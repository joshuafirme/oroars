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
        <link rel="stylesheet" href="css/editemployee.css">
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
                    <label for="Product Image">Please upload a 1x1 picture</label>
                        <br> <br> <br>
                        <input type="image"  name="pdimage" id="pimage" required>
                        <br>
                        <br>
                    <label for="Product Image">Please upload a valid ID</label>
                        <br> <br> <br>
                        <input class ="pvid "type="image"  name="pvid" id="pvid" required>
                </form>
            </div>
            <div class = "container-time">
                    <h2 class = "heading"> Personal Information</h2>
                    <label for="Employee name" class="headingdays">Name:</label>
                    <input type="text" name="emplname" id="empname" require>
                    <br>
                    <br>
                    <label for="Email" class="headingdays">Email</label>
                    <input type="email" name="empemail" id="empemail" require>
                    <br>
                    <br>

                    <label for="Address" class="headingdays">Address</label>
                    <input type="text" name="empaddress" id="empaddress" require>
                    <br>
                    <br>

                    <label for="Contactnumber" class="headingdays"><b>Contact Number</b></label>
			        <input type="tel" placeholder="0999-999-9999" name="empnum" id="empnum" pattern="[0-9-9-5]{4} [0-9-9]{3} [0-9-9-5]{4}"  required>
			        <br>
                    <br>

                    <label for="Job Description" class="headingdays">Job Description:</label>
                    <input type="text" name="jobdesc" id="jobdesc" require>
                    <br>

                    <label for="age" class="headingdays">Age:</label>
                    <input type="text" name="age" id="age">
                    <br>
                    <form action="">
                    <label for="Gender" class="headingdays">Gender</label>
                        <select id="gender" name="gender" require>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </form>

                    <br>
                    <label for="privilege" class="headingdays">privilege:</label>
                    <input type="text" name="privilege" require>
                    <br>
                    <div class = "buttons">
                    <button><a href="#" class= "editbtn editbtn-primary">Edit</a></button>
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
