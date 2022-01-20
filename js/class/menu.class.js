class Menu {
    tab_count = 0;

    createRow(container,data = {}){
               container.innerHTML +=       `<div  id="item-menu-${data.ID}" class="col-md-3 col-sm-6 col-xs-12 ${data.CategoryName.replace(/\s+/g, '-').toLowerCase()} featured-items isotope-item">
                                                <div class="product-item">
                                                    <img src="${data.photo}" class="img-responsive" width="255" height="322" alt="">
                                                    <div class="sell-meta">
                                                        <a href="#" class="new-item" onclick="addOrder('${data.ID}'')">Add to Order</a>
                                                    </div>
                                                    <div class="product-hover">
                                                        <div class="product-meta">
                                                            <br>
                                                            <a href="#" onclick="addOrder('${data.ID}')"><i class="pe-7s-cart"></i>Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-title">
                                                        
                                                            <h3>${data.ProductName}</h3>
                                                            <span>${parseFloat(data.SRP).toFixed(2)}</span>
                                                 
                                                    </div>
                                                </div>
                                            </div>`

    }

    createMenuTabs(container,data= {}){
        if(this.tab_count < 1){
            container.innerHTML =`<li class="button active" data-category="all">All<span>${data.count}</span></li>`
        }

        for(const prop in data.bundle){
            container.innerHTML += `<li class="button" data-category="${prop.replace(/\s+/g, '-').toLowerCase()}">${prop}<span>${data.bundle[prop]}</span></li>`
        }
            
                                
    }
}