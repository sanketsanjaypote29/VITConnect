<?php

// include ('../config.php');
// if (isset($_POST['getp'])) {

//   $bike_no = $_POST['bikeno'];
//   $phone_no = $_POST['phoneno'];
//   $helmet_check = $_POST['helmetcheck'];
//   $gender_radio = $_POST['gndr'];
//   $location_check = $_POST['location'];
//   $dept = $_POST['department'];
//   $year_check = $_POST['year'];

//   //$bike_re = "[A-Z]{2}[0-9]{2}[A-Z]{1,2}[0-9]{4}";

//   // if (preg_match($bike_re, $bike_no)) {

    
    
//   // }
//   $bikeins= "INSERT INTO `rider` (`bikeno`,`phoneno`,`location`,`helmet`,`department`,`year`,`gender`) VALUES ('$bike_no', '$phone_no', '$location_check', '$helmet_check', '$dept', '$year_check', '$gender_radio')";

//   if (mysqli_query($conn, $bikeins)) {
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
  

  
// }

?>







<!DOCTYPE html>
<html >
<head>
<script src="https://kit.fontawesome.com/ed98ca1227.js" crossorigin="anonymous"></script>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration form</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">
                <p style='font-size:30px'>VIT Connect</p>

                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
                    
                </div>
              
                
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="homepage.php" ><i class="fa fa-desktop "></i>Home </a>
                    </li>
                   

                    <li>
                        <a href="bikebuddy_1.php"><i class="fa-solid fa-person-biking"></i>Bike Buddy </a>
                    </li>
                    <li>
                        <a href="study_option.php"><i class="fa fa-book "></i>Study </a>
                    </li>


                    <li>
                        <a href="buy_sell2.php"><i class="fa fa-lightbulb-o "></i>Buy/Sell</a>
                    </li>
                    <li>
                        <a href="roommate.php"><i class="fa fa-users"></i>Room Mate</a>
                    </li>
                    <li>
                        <a href="./forum/index.php"><i class="fa fa-quora" aria-hidden="true" alt='forum image'></i></i>Community Forum</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Logout</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
         <!-- /. NAV SIDE  -->
         <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                </div>              
                 <!-- /. ROW  -->
                
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                 
                  <!-- /. form  --> 
                  <div class="content">
                    <h2>Hello, username</h2>
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="varchar" name="product name" placeholder="Enter product name" required>
          </div>
          <div class="input-box">
            <span class="details">Produt Price</span>
            <input type="number" name="productprice" placeholder="Enter product price in RS" required>
          </div>
          
          <div class="input-box">
          <span class="details">Produt Description</span>
          <textarea type="message" name="productdiscription" placeholder="Enter product description" required class="text-area" style="width: 513px;
      height: 74px;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    transition: all 0.3s ease;"
          ></textarea>

          </div>
          <div class="input-box">
            <span class="details">Product image</span>
            <input type="file" name="product image" accept="image/*" required style=" text-align: center;
  margin:auto;" >
          </div>
         

          
        </div>
      
        <div class="button">
          <input type="submit" name="getp" value="Sell your product">
        </div>
      </form>
    </div>
            <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
            <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>