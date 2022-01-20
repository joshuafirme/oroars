
const addOrder = (id) =>{
    if(!getCookie('fullname') || !getCookie('username')){
        return window.location.href="loginpage.php"
    }
    if(getCookie('validated') === "0"){
        return alert("You cannot add this to your cart yet! Please wait for your account to be validated.")
    }
    fetch(`app/client/cart.php?request=add&product_id=${id}&user_id=${getCookie('user_id')}`)
    .then(data=>data.json())
    .then(data=>{
        if(data.response){
            getCartContent()
            return alert("Product added to cart!")
            // return  window.location.href="addcart.php"
        }
        return alert(data.message);
    })
    
}

$(document).ready(()=>{
    fetch('app/client/menu.php')
    .then(data => data.json())
    .then(data =>{
        let container = document.querySelector('#menu_container')
        let menutabs = document.querySelector("#menu_tabs")
        const menu = new Menu()
        if(data.hasOwnProperty("list")){
            data.list.map(item =>{
                menu.createRow(container,item)
            })

            const category = data.list.map(item => item.CategoryName)
                .filter((value, index, self) => self.indexOf(value) === index)

            const count = data.list.length
            const bundle = data.list
                            .map(({ CategoryName }) => CategoryName)
                            .reduce((names, name) => {
                            const count = names[name] || 0;
                            names[name] = count + 1;
                            return names;
                            }, {});
            menu.createMenuTabs(menutabs,{category,count,bundle})
            var selectedCategory;
            var $grid = $('#menu_container').isotope({
                itemSelector: '.col-md-3',
                masonry: {
                    columnWidth: '.col-md-3',
                },
                getSortData: {
                    selectedCategory: function( itemElem ) {
                        return $( itemElem ).hasClass( selectedCategory ) ? 0 : 1;
                    }
                }
            });

            var $items = $('#menu_container').find('.featured-items');

            
            $('#menu_tabs').on( 'click', '.button', function() {
                selectedCategory = $( this ).attr('data-category');
                if ( selectedCategory == 'all' ) {
                    $grid.isotope({
                        sortBy: 'original-order'
                    });
                    $items.css({
                        opacity: 1
                    });
                    return;
                }
                var selectedClass = '.' + selectedCategory;
                $items.filter( selectedClass ).css({
                    opacity: 1
                });
                $items.not( selectedClass ).css({
                    opacity: 0
                });
                $grid.isotope('updateSortData');
                $grid.isotope({ sortBy: 'selectedCategory' });
            });

            $('#menu_tabs').each( function( i, buttonGroup ) {
                    var $buttonGroup = $( buttonGroup );
                    $buttonGroup.on( 'click', 'li', function() {
                        $buttonGroup.find('.active').removeClass('active');
                        $( this ).addClass('active');
                    });
            });
        }
    })
})
