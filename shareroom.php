<?php
include ('../config.php');
if(isset($_POST['submit'])) 
{

$name=$_POST['name'];
$add=$_POST['Address'];
$location=$_POST['location'];
$phone=$_POST['phone'];
$dept=$_POST['department'];
$year=$_POST['year'];
$gender=$_POST['gendr'];
$qurey1="INSERT INTO `roommate`(`rname`, `rphone`, `radd`, `rlocation`, `rdpet`, `ryear`, `rgender`) VALUES ('$name','$phone','$add','$location','$dept','$year','$gender')";

if (mysqli_query($conn, $qurey1)) {
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
    <title>share room</title>
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
                    <h4>Hello, Enter Details </h4>
      <form method="POST">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Name" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="Address"placeholder="Enter your PG/Hostel Name" required>
          </div>
         
          <div class="input-box">
            <span class="details">Phone No.</span>
            <input type="text" name="phone" placeholder="Enter your Phone No." required>
          </div>
          <div class="input-box">
          <span class="details">Location</span>
          <select name="location" class="box">
      <option value="Bibwewadi">Bibwewadi</option>
      <option value="Kondhva">Kondhva</option>
      <option value="Lower_Indiranagar">Lower Indiranagar</option>
      <option value="Upper_Indiranagar">Upper Indiranagar</option>
      <option value="Chintamaninagar1">Chintamaninagar 1</option>
      <option value="Chintamaninagar2" selected>Chintamaninagar 2</option>
    </select>
          </div>
        
         
<div class="input-box">
          <span class="details">Department</span>
          <select name="department" class="box">
      <option value="CS">CS</option>
      <option value="IT">IT</option>
      <option value="AIDS" selected>AIDS</option>
      <option value="Mechanical" >Mechanical</option>
      <option value="Chemical" >Chemical</option>
      <option value="Intrument" >Instrument</option>
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
        <input type="radio" name="gendr" id="dot-1" value="Male" required>
          <input type="radio" name="gendr" id="dot-2" value="Female" required>
          <input type="radio" name="gendr" id="dot-3" value="Prefer not to say" required>
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
          <input type="submit" name="submit" value="Get your Room  Partner">
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