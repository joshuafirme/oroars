const getList = () =>{
    fetch(`app/client/cart.php?request=list&user_id=${getCookie('user_id')}`)
        .then(data => data.json())
        .then(data =>{
            let container = document.querySelector('#cart_container')
            let total_price = document.querySelector('#total_order_price')
            container.innerHTML = ""
            const menu = new Cart()
            if(!data.hasOwnProperty("list")) {
                return menu.createEmptyRow(container)
            }
            data.list.map(item =>{
                menu.createRow(container,item);
                
            })
            let price_list = data.list.map(item => parseFloat(item.SRP * item.quantity)).reduce((prev, next) => prev + next);
            total_price.innerHTML = price_list.toFixed(2)
            
        })
}
const updateQuantity = ( id, operator ) =>{
    var url;
    if(operator === "increase"){
       url = `app/client/cart.php?request=increase&user_id=${getCookie('user_id')}&product_id=${id}`
    }
    if(operator === "reduce"){
        url = `app/client/cart.php?request=reduce&user_id=${getCookie('user_id')}&product_id=${id}`
     }
    fetch(url)
        .then(data => data.json())
        .then(data =>{
            if(!data.response) return
            getList()
        })
}

const minusBtn = ( elem ) => {
    if(elem.dataset.value === "1"){
        if(confirm(`are you sure you want to remove it from your cart?`)){
            return updateQuantity(elem.dataset.btnid,'reduce')
        }
    }
    updateQuantity(elem.dataset.btnid,'reduce')
}

const addBtn = ( elem ) => {
    updateQuantity(elem.dataset.btnid,'increase')
}

const removeItems = () =>{
        var checkedBoxes = document.querySelectorAll('input[name=menu_check]:checked');
        var names = Array();
        var ids = Array();
        for (let checkbox of checkedBoxes) {
            names.push(checkbox.dataset.name)
        } 
        if(names.length < 1){
            return alert('No items Selected')
        }
        if(names.length > 0){
            if(confirm(`are you sure you want to remove the ff : ${names.toString()}?`)){
                for (let checkbox of checkedBoxes) {
                    ids.push(checkbox.id.split("_")[1])
                } 
                fetch(`app/client/cart.php?request=remove&id=${ids.toString()}&user_id=${getCookie('user_id')}`)
                        .then(data => data.json())
                        .then(data => {
                            if(!data.response) return
                            if(!data.hasOwnProperty("message")) return
                            getList()
                            alert(data.message);
                })
        }
    }
}
$(document).ready(()=>{
    getList()


    $('.removebutton').click((event)=>{
        removeItems();
        event.preventDefault()
    })

    
})

