<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ORORS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/editproduct.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>



        <!--productdesc-->
        <section class = "productdesc">
            <div class ="reservationcontainer">

            <div class = "container-form">
                <form action="">
                    <br> <br>
                    <label for="Product Image">Please upload a product image</label>
                        <br> <br> <br>
                        <input type="image"  name="pdimage" id="pimage" required> 
                </form>
            </div>
            <div class = "container-time">
                    <h2 class = "heading"> Product Description</h2>
                    <label for="Product Name" class="headingdays">Product Name:</label>
                    <input type="text" >
                    <br>
                    <label for="Product Description" class="headingdays">Description:</label>
                    <br>    
                    <textarea name="pdesc" id="" cols="60" rows="5"> Description</textarea>
                    <br>
                   
                    <form action="">
                    <label for="Category" class="headingdays">Category:</label>
                        <select id="category" name="category" require>
                        <option value="All day breakfast">All day breakfast</option>
                        <option value="Value Meals">Value Meals</option>
                        <option value="Sizzling">Sizzling</option>
                        <option value="Milk tea">Milk Tea</option>
                        <option value="Fruit tea">Fruit Tea</option>
                    </select>
                    </form>

                    <br>
                    <form action="">
                    <label for="SubCategory" class="headingdays">SubCategory:</label>
                        <select id="subcategory" name="subcategory" require>
                        <option value=""></option>
                        <option value="chicken">Chicken</option>
                        <option value="Pork">Pork</option>
                        <option value="Beef">Beef</option>
                        <option value="Seafood">Seafood</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Peach">Peach</option>
                        <option value="Taro">Taro</option>
                    </select>
                    </form>
                    <br>
                    <label for="Product Price" class="headingdays">Price:</label>
                    <input type="text"  placeholder="&#8369.00" pattern="" require>
                    <br>
                    <div class = "buttons">
                    <button><a href="#" class= "savebtn savebtn-primary">Save</a></button>
                    <button><a href="#" class= "deletebtn deletebtn-primary">Delete</a></button>
                    </div>
            </div>
            </div>
        </section>


        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
