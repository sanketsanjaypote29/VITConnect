<?php
include ('../config.php');
if (isset($_POST['getp'])) {
  session_start();
 $bikername=$_SESSION['user'];
  $bike_no = $_POST['bikeno'];
  $phone_no = $_POST['phoneno'];
  $helmet_check = $_POST['helmetcheck'];
  $gender_radio = $_POST['gndr'];
  $location_check = $_POST['location'];
  $dept = $_POST['department'];
  $year_check = $_POST['year'];
  

  // $bike_re = "";
  $bikeins= "INSERT INTO `rider` (`bikeno`,`phoneno`,`location`,`helmet`,`department`,`year`,`gender`,`name`) VALUES ('$bike_no', '$phone_no', '$location_check', '$helmet_check', '$dept', '$year_check', '$gender_radio','$bikername')";
  
if (mysqli_query($conn, $bikeins)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  

  
}

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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">
                    <p style="font-size:30px;">VIT Connect</p>


                    </a>
                    
                </div>
              
                
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 



                <li class="active-link">
                        <a href="homepage.php"><i class="fa fa-desktop "></i>Home </a>
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
                        <a href="logout.php"><i class="fa fa-edit "></i>Logout</a>
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
                
                 
                <div class="row">
                    <div class="col-lg-12 ">
                      
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                 
                  <!-- /. form  --> 
                  <div class="content">
                    <h3>Hello,Enter Information</h3>
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Vehicle No.</span>
            <input type="varchar" name="bikeno" placeholder="ST00VR2022" required>
          </div>
          <div class="input-box">
            <span class="details">Phone No.</span>
            <input type="phone" name="phoneno" placeholder="Phone Number" required>
          </div>
          <div class="checkbox-wrapper-19">
  <input type="checkbox" id="cbtest-19" name="licensecheck" value="yes" required/>
  <span>I have Driver's License</span>&emsp;
  <input type="checkbox" id="cbtest-20" name="helmetcheck" value="yes"/>
  <span>Extra Helmet</span>
</div>
          <div class="input-box">
          <span class="details">Location</span>
          <select name="location" class="box" required>
      <option value="Bibwewadi" name="Bibwewadi">Bibwewadi</option>
      <option value="kondhwa" name="Kondhwa">Kondhwa</option>
      <option value="Lower_Indiranagar" name="Lower_Indiranagar">Lower Indiranagar</option>
      <option value="Upper_Indiranagar" name="Upper_Indiranagar">Upper Indiranagar</option>
      <option value="Chintamaninagar1" name="Chintamaninagar1">Chintamaninagar-1</option>
      <option value="Chintamaninagar2" name="Chintamaninagar2"selected>Chintamaninagar-2</option>
      <option value="Dhankavdi" name="Dhankavdi">Dhankavdi</option>
      <option value="Kothrud" name="Kothrud">Kothrud</option>

    </select>
          </div>
        
         
<div class="input-box">
          <span class="details">Department</span>
          <select name="department" class="box" required>
      <option value="CS" name="CS">CS</option>
      <option value="IT" name="IT">IT</option>
      <option value="AIDS" name="AIDS" selected>AI&DS</option>
      <option value="E&TC" name="E&TC">E&TC</option>
      <option value="Mechanical" name="Mechanical">Mechanical</option>
      <option value="Chemical" name="Chemical">Chemical</option>
      <option value="Instrumentation" name="Instrumentation">Instrumentation</option>
    </select>
          </div>
          <div class="input-box">
          <span class="details">Year</span>
          <select name="year" class="box" required>
      <option value="1st" name="1st">1st</option>
      <option value="2nd" name="2nd">2nd</option>
      <option value="3rd" name="3rd">3rd</option>
      <option value="4th" name="4th">4th</option>
    </select>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gndr" id="dot-1" value="Male" required>
          <input type="radio" name="gndr" id="dot-2" value="Female" required>
          <input type="radio" name="gndr" id="dot-3" value="Prefer not to say" required>
          <span >Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <a href="bs-simple-admin/bikebuddy_1.php"><input type="submit" name="getp" value="Get your Bike Partner">
        </div>


        <?php

//if (isset($_POST['getp'])){

 // header("Location:bs-simple-admin/bikebuddy_1.php");


//}
        
        
        
        ?>


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