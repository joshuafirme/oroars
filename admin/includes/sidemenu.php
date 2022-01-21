
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .hidden{
      display:none;
    }
    </style>
<!-- Sidebar Menu -->
<script>
   fetch(`includes/app/user.php?request=find_user&id=<?php echo $_SESSION['username']?>`)
   .then(data => data.json())
   .then(data => {
     if(data.hasOwnProperty("list")){
        var priv_indi = data.list.privilege.split(",")
        priv_indi.forEach(element => {
            $(`.nav-${element}`).show()
        });
     }
   })
   fetch(`includes/app/feedback.php?request=notification`)
   .then(data => data.json())
   .then(data =>{
     if(data.hasOwnProperty("list")){
        return $("#notif_badge").text(data.list.length)
     }
     return $("#notif_badge").text("0")
   })
</script>
  
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!--Transaction-->
          <li class="nav-item nav-transaction" style="display:none">
            <a href="#" class="nav-link">
              <i class="fa fa-handshake nav-icon" aria-hidden="true"></i>
              <p>
                Transactions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cashiering.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cashiering</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reservation.php" class="nav-link">
                  <i class="fa fa-ticket nav-icon" aria-hidden="true"></i>
                  <p>Reservation</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="orderlist.php?stat=pending" class="nav-link">
                  <i class="fa fa-cutlery nav-icon" aria-hidden="true"></i>
                  <p>New Orders</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="orderlist.php?stat=cancelled" class="nav-link">
                  <i class="fa fa-ban nav-icon" aria-hidden="true"></i>
                  <p>Cancelled Orders</p>
                </a>
              </li>
              <!--Delivery Module -->
                <li class="nav-item">
                  <a href="orderlist.php?stat=delivery" class="nav-link">
                    <i class="far fa fa-motorcycle nav-icon" aria-hidden="true"> </i>
                    <p>Orders For Delivery</p>
                  </a>
                </li>
              <!--Delivery Module -->
              <li class="nav-item">
                  <a href="orderlist.php?stat=completed" class="nav-link">
                    <i class="far fa fa-check nav-icon" aria-hidden="true"> </i>
                    <p>Completed Order</p>
                  </a>
                </li>
                
                </li>
              </ul>
          </li>

          <li class="nav-item nav-settings" style="display:none">
            <a href="#" class="nav-link">
              <i class="fa fa-cog fa-fw nav-icon"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product.php" class="nav-link">
                  <i class="fa fa-cutlery nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee.php" class="nav-link">
                  <i class="fa fa-user-secret nav-icon"></i>
                  <p>Employee</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="client.php" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Client</p>
                </a>
              </li>
                <li class="nav-item">
                  <a href="category.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="subcat.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sub-Category</p>
                    </a>
                  </li>
                </ul>
          </li>
        

        
          <!--Notification module-->
        <li class="nav-item" >
            <a href="notification.php" class="nav-link">
              <i class="fa fa-bell nav-icon" aria-hidden="true"></i>
              <p> Notification 
              <span class="badge badge-dark" id="notif_badge">0</span>
              </p>
            </a>
        </li>

        
          <!--Identity Verification-->
        <li class="nav-item nav-identification" style="display:none">
            <a href="idverf.php" class="nav-link">
              <i i class="fa fa-id-card nav-icon" aria-hidden="true"></i>
              <p> Identity Verification
              </p>
            </a>
            </li>
          </li>

        
        
          <!--Reports-->
          <li class="nav-item nav-reports" style="display:none">
            <a href="#" class="nav-link">
              <i class="fa fa-book nav-icon" aria-hidden="true"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customer_information.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="best_seller.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Best Seller Reports</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="sales_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gross Sales Reports</p>
                </a>
              </li>
              <!-- Delivery Module-
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Delivery Module</p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Map</p>
                    </a>
                      </li>
                    </ul>
                </li>
                </li> -->
              </ul>
          </li>
        
          <!--Maintennace-->
        <li class="nav-item">
            <a href="#" class="nav-link nav-maintenance" style="display:none">
              <i class="fa fa-cogs nav-icon" aria-hidden="true"></i>
              <p>
               Maintenance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="category.php" class="nav-link">
                    <i class="far fa-circle nav-icon" aria-hidden="true"> </i>
                    <p>Category</p>
                  </a>
                </li>

              <!-- <li class="nav-item">
                <a href="gallery.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Maintennace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="address.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Address Reference</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="delivery.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery fee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="voucher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voucher</p>
                </a>
              </li>
              </ul>
        </li>
        
          <!--Utilities-->
        <li class="nav-item nav-utility" style="display:none">
            <a href="#" class="nav-link">
              <i class="nav-icon fas "></i>
              <p>
                Utilities
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user_account.php" class="nav-link">
                  <i class="far fa fa-users nav-icon" aria-hidden="true"></i>
                  <p>User Account Maintenance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="feedback.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedback & Suggestion</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="backupandrestore.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Backup & Restore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i  class=" far fa fa-archive nav-icon" aria-hidden="true"></i>
                  <p>Archieve</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="audit_trail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Audit Trail</p>
                </a>
              </li>
            </ul>
        </li>


          <li class="nav-item">
              <a href="functions/logout.php" class="nav-link">
                <i class="fa fa-sign-out nav-icon" aria-hidden="true"></i>
                <p>
                  Log-out
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
