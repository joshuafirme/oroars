
var map,marker,quantity,geocoder;
const getList = () =>{
    fetch(`app/client/cart.php?request=list&user_id=${getCookie('user_id')}`)
        .then(data => data.json())
        .then(data =>{
            let container = document.querySelector('#cart_container')
            let total_price = document.querySelector('#total_order_price')
            container.innerHTML = ""
            
            const menu = new Cart()
            if(!data.hasOwnProperty("list")) {
                return window.location.href = "addcart.php"
            }
            quantity = data.list.length
            data.list.map(item =>{
                menu.createCheckout(container,item);
            })
            let price_list = data.list.map(item => parseFloat(item.SRP * item.quantity)).reduce((prev, next) => prev + next);
            total_price.innerHTML = price_list.toFixed(2)
            
        })
}
function distanceTwoPoints(p3, p4){
    return (new google.maps.geometry.spherical.computeDistanceBetween(p3, p4) / 1000); //dividing by 1000 to get Kilometers
}

    
async function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    var business_add = new google.maps.LatLng(13.949745,120.7048262)
    var current_loc = new google.maps.LatLng(marker.position.lat(),marker.position.lng())
    
    var distance = await directionsService
      .route({
        origin:business_add,
        destination: current_loc,
        travelMode: google.maps.TravelMode.DRIVING,
      })
      .then((response) => {
        directionsRenderer.setDirections(response);
        directionsRenderer.setDirections(response); // Add route to the map
        var directionsData = response.routes[0].legs[0]; // Get data about the mapped route
        if (!directionsData) {
          window.alert('Directions request failed');
          return;
        }
        else {
          document.querySelector("#delivery_details").innerHTML = " Driving distance is " + directionsData.distance.text + "(" + directionsData.duration.text + ")"
          document.querySelector("#delivery_fee").innerHTML = "N/A" // replace with fetch for delivery prices
          
          return directionsData.distance.text;
          
        }
      })
      .catch((e) => window.alert("Directions request failed due to " + status));
      return await distance;
  }

 
function initMap() {
    geocoder = new google.maps.Geocoder();
    navigator.geolocation.getCurrentPosition(function(position) {
        let coords = { lat: position.coords.latitude, lng: position.coords.longitude }
        
        map = new google.maps.Map(document.getElementById("map"), {
            center: coords,
            zoom: 12,
        });
        marker = new google.maps.Marker({
            position: coords,
            map,
            draggable:true,
            title: "Delivery Address!",
        });        
        const geocoder = new google.maps.Geocoder();
        const infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(map, 'click', function(event) {
            marker.setPosition(event.latLng); 
            geocodeLatLng(geocoder, map, infowindow, event.latLng);
         });
    
        
    })
}

function codeAddress() {
    var address = document.getElementById('search_address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

function geocodeLatLng(geocoder, map, infowindow,latLng) {
    
    const input = latLng
    // const latlngStr = input.split(",", 2);
    // const latlng = {
    // lat: parseFloat(latlngStr[0]),
    // lng: parseFloat(latlngStr[1]),
    // };
    const latlng = latLng

    geocoder
    .geocode({ location: latlng })
    .then((response) => {
    if (response.results[0]) {
        // map.setZoom(11);
        // infowindow.setContent(response.results[0].formatted_address);
        // infowindow.open(map, marker);
        document.querySelector("#address_complete").innerHTML = response.results[0].formatted_address;
    } else {
        window.alert("No results found");
    }
    })
    .catch((e) => window.alert("Geocoder failed due to: " + e));
}

const onChangeHandler = async function () {
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();

    

    

    directionsRenderer.setMap(map);
    var distance = calculateAndDisplayRoute(directionsService, directionsRenderer);
    var raw_distance = await distance
    var km = raw_distance.toString().replace("km","");
    fetch('app/client/delivery.php?request=list')
    .then(data => data.json())
    .then(data => {
        if(data.hasOwnProperty("list")){
            let closest = data.list.reverse().find(e => e.KM <= km)
            document.querySelector("#delivery_fee").innerHTML = `Php ` + parseFloat(closest.PRICE).toFixed(2);
            var total_order = document.querySelector('#total_order_price')
            var price = parseFloat(total_order.innerText) + parseFloat(closest.PRICE);
            total_order.innerHTML = parseFloat(price).toFixed(2)
        }
       
    })
};

$("#btnDeliveryAdd").click(onChangeHandler)

const setMap = (coords) =>{
    $("#ifrMaps").attr("src",`"https://maps.google.com/maps/embed/v1/place?key=AIzaSyDKEGwhMZ_UXrD0mlU3RCkCrE03CgVtAFA&q=${coords.lat},${coords.long}`)
}

$(document).ready(()=>{
    getList()
    

    $('#btnLocation').click(()=>{
        initMap()
    })

    if(!getCookie("username")){
        return window.location.href = "loginpage.php"
    }
        
        let searchParams = new URLSearchParams(window.location.search)
        if(searchParams.has('payment')){
            if(searchParams.get('payment') === "success"){
                var source = getCookie("source")
                if(source){
                    checkSource(source)
                }
            }
            if(searchParams.get('payment') === "failed"){
                return alert('Payment has not been authorized! Please Try again or use a different payment')
            }
        }
    })
    
       function checkSource(src){
            let searchParams = new URLSearchParams(window.location.search)
            let payment_method = '',lat=0,lng=0;
            if(searchParams.has('payment_method')){
                payment_method = searchParams.get("payment_method")
            }
            if(searchParams.has('lat')){
                lat = searchParams.get("lat")
            }
            if(searchParams.has('lng')){
                lng = searchParams.get("lng")
            }
            getSource(src).then((data)=>{
                if(data.data.attributes.status === "pending"){
                    checkSource(src)
                }
                if(data.data.attributes.status === "chargeable"){
                    chargePayment(src)
                    .then(data =>{
                        data = {
                            ref : `TN_-${generateUUID()}`,
                            payment_ref : data.data.id,
                            status : "pending",
                            coord_lat : lat,
                            coord_long : lng,
                            total_amount : parseFloat($("#total_order_price").text()),
                            payment_type : payment_method,
                            quantity : quantity,
                            user_id : getCookie('user_id')
                        }
                        var option = createRequestOption("POST",data)
                        requestURL(`app/client/transactions.php?request=place_order`,option)
                        .then(data => {
                            if(data.response){
                                alert (data.message)
                                return window.location.href="addcart.php"
                            }
                        })
                    })
                }
            })
       }

        async function chargePayment(id){
            let headers = createHeaders("sk_test_nY9ijCLWys58NrMk5KgP5TkF");
            raw = {
                data : {
                    attributes : {
                        amount : 15000,
                        source : {
                            id : id,
                            type : "source"
                        },
                        currency : "PHP"
                    }
                }
            }
            let data = createRequestOption("POST",raw,headers);
            const pm = await requestURL("https://api.paymongo.com/v1/payments",data);
            return await pm;
        }
        async function getSource(id){
            
            let headers = createHeaders("sk_test_nY9ijCLWys58NrMk5KgP5TkF");
            let data = createRequestOption("GET",null,headers);
            const pm = await requestURL("https://api.paymongo.com/v1/sources/" + id,data);
            return await pm;
        }

        /*helpers*/
        async function requestURL(url,requestOptions){
            const action = await fetch(url,requestOptions)
            .then(response=> response.json())
            .then(data => data);
            return action;
        }

        function createHeaders(key){
            var myHeaders = new Headers();
            myHeaders.append("Authorization", `Basic ${btoa(key)}`);
            myHeaders.append("Content-Type", "application/json");
            return myHeaders;
        }

        function createRequestOption(method,data = null,header = null){
            var requestOptions = {
                method: method
            }
            if(data !== null)
            requestOptions = {
                method: method,
                redirect: "follow",
                body : JSON.stringify(data)
            };

            requestOptions['headers'] = header !== null ? header : null;
            
            let requestOpt = removeEmpty(requestOptions);

            return requestOpt;
        }

        function removeEmpty(obj) {
            return Object.fromEntries(Object.entries(obj).filter(([_, v]) => v != null));
        }

        let key = "sk_test_nY9ijCLWys58NrMk5KgP5TkF"
        let headers = createHeaders(key);

        document.querySelector("#btnPayment").addEventListener("click",async function(event){
        
        if(!confirm("Place order ?")){

        }
        if($('input[name="payment_type"]:checked').val() === "cash"){
            data = {
                payment_ref : generateUUID(),
                ref : `TN_-${generateUUID()}`,
                status : "pending",
                coord_lat : marker.position.lat(),
                coord_long : marker.position.lng(),
                total_amount : parseFloat($("#total_order_price").text()),
                payment_type : $('input[name="payment_type"]:checked').val(),
                quantity : quantity,
                user_id : getCookie('user_id')
            }
            var option = createRequestOption("POST",data)
            requestURL(`app/client/transactions.php?request=place_order`,option)
            .then(data => {
                if(data.response){
                    alert (data.message)
                    return window.location.href="addcart.php"
                }
            })
        }else{
        let raw =  {
            "data": {
                "attributes" : {
                    type: "gcash",
                    amount : 15000,
                    currency : "PHP",
                    redirect : {
                        success : `http://localhost:81/oroars/checkout.php?payment=success&payment_method=gcash&lat=${marker.position.lat()}&lng=${marker.position.lng()}`,
                        failed : "http://localhost:81/oroars/checkout.php?payment=failed"
                    }
                }
                
            }
           };
       
        let data = createRequestOption("POST",raw,headers);
        const pm = await requestURL("https://api.paymongo.com/v1/sources",data);
        //window.open(pm.data.attributes.redirect.checkout_url,'sample-inline-frame');  display authentication link for user to enter password
        // document.querySelector('#three-ds-container').setAttribute("style","display:block"); 
        document.cookie = `source=${new URL(pm.data.attributes.redirect.checkout_url).searchParams.get('id')}; expires=Fri, 31 Dec 9999 23:59:59 GMT`
        window.location.href = pm.data.attributes.redirect.checkout_url;
        
        }
        
    })

    function generateUUID() { // Public Domain/MIT
        var d = new Date().getTime();//Timestamp
        var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now()*1000)) || 0;//Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16;//random number between 0 and 16
            if(d > 0){//Use timestamp until depleted
                r = (d + r)%16 | 0;
                d = Math.floor(d/16);
            } else {//Use microseconds since page-load if supported
                r = (d2 + r)%16 | 0;
                d2 = Math.floor(d2/16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
      }