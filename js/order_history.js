const getList = () =>{
    fetch(`app/client/transactions.php?request=view_all_order&user_id=${getCookie('user_id')}`)
        .then(data => data.json())
        .then(data =>{
            let container = document.querySelector('#cart_container')
            // let total_price = document.querySelector('#total_order_price')
            container.innerHTML = ""
            // const menu = new Cart()
            // if(!data.hasOwnProperty("list")) {
            //     return menu.createEmptyRow(container)
            // }
            data.list.map(item =>{
                    container.innerHTML += `<tr>
                                    <td scope="row">
                                        <span>${new Intl.DateTimeFormat('en', { month:'short', day:'numeric',year: 'numeric', hour: '2-digit',minute : '2-digit', second: '2-digit' }).format(new Date(item.date_created))}</span>
                                    </td>

                                    <td scope="row">
                                    <span>${item.payment_ref.replace("pay_","")}</span>
                                    </td>
                                    <td scope="row">
                                        <span>&#8369 ${parseFloat(item.totalamount).toFixed(2)}</span>
                                    </td>
                                    <td><a href="vieworders.php?id=${item.ID}">View Order</a></td>
                                </tr>`;
                
            })            
        })
}

$(document).ready(()=>{
    getList()
    
})

