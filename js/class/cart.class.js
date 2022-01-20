class Cart {

    createRow(container,data = {}){

               container.innerHTML +=       `<div class="item">
                                                <div>
                                                    <input type="checkbox" name="menu_check" data-name="${data.ProductName}" id="checkbox_${data.ID}">
                                                </div>
                                        
                                                <div class="image">
                                                    <img src="${data.photo}" alt="${data.ProductName}" style="width:auto;height:80px" />
                                                </div>
                                        
                                                <div class="description">
                                                    <span>${data.ProductName}</span>
                                                </div>

                                                <div class="price">
                                                    <span>&#8369 ${parseFloat(data.SRP).toFixed(2)}</span>
                                                </div>
                                        
                                                <div class="quantity">
                                                    <button class="minus-btn" type="button" name="button" data-btnid="${data.ID}" data-value="${data.quantity}" onclick="minusBtn(this)">
                                                    <img src="minus.svg" alt="" />
                                                    </button>
                                                    <input type="text" name="name" value="${data.quantity}">
                                                    <button class="plus-btn" type="button" name="button"  data-btnid="${data.ID}" data-value="${data.quantity}"  onclick="addBtn(this)">
                                                    <img src="plus.svg" alt="" />
                                                    </button>
                                                </div>
                                                <div class="price"><span>&#8369 ${parseFloat(data.SRP * data.quantity).toFixed(2)} </span></div>
                                            </div>
                                        `

    }

    createEmptyRow(container){
        container.innerHTML +=       `<div class="item">
                                            <div style="width:100%;text-align:center">
                                                <span>No Orders. <a href="menu.php">Select From our products</a></span>
                                            </div>
                                        </div>
                                    `

    }

    createCheckout(container,data = {}){
        container.innerHTML +=       `<li class="item">
                                            <div class="description">
                                                <h3>${data.ProductName}</h2>
                                            </div>
                                            <div>
                                                X ${data.quantity}
                                            </div>
                                            <div class="price"><h3>&#8369 ${parseFloat(data.SRP * data.quantity).toFixed(2)} </h3></div>
                                        </div>
                                    `
    }
}