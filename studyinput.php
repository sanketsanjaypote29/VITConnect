<?php

include('../config.php');
if (isset($_POST['getp'])) {
  $subject=$_POST['sub'];
  $name2=$_POST['name'];
  $phone=$_POST['phoneno'];
  $platform=$_POST['platform'];
  $dept=$_POST['department'];
  $year1=$_POST['year'];
  $meet1link=$_POST['meetlink1'];
  $time1=$_POST['appt'];


  $query="INSERT INTO `study`(`subj`, `phonenum`, `meetlink`, `platf`, `yearb`, `dept`,`time`,`name1`) VALUES ('$subject','$phone','$meet1link','$platform','$year1','$dept','$time1','$name2')";

  if (mysqli_query($conn, $query)) {

    echo "New record created successfully";

    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }







// // $query="INSERT INTO `study` (`subject`, `phoneno`, `meetinglink`,'platform','year','dept','time') VALUES ('$subject','$phone','$platform',' $dept','$year','$meetl','$appt1')";
// $query="INSERT INTO 'study' ('time') VALUES('$appt1')";
// if (mysqli_query($conn, $query)) {
//   echo "New record created successfully";
//       echo"<script>alert('');</script>  ";

// } else {
//   echo "Error: " . $query . "<br>" . mysqli_error($conn);
// }

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
                    <!-- <h2>Hello, username</h2>-->
      <form action="" method="POST"> 
        <div class="user-details">
        <div class="input-box">
            <span class="details"autocomplete="off">Name  </span>
            <input type="text" name="name" placeholder="Name" required>
          </div>
          <div class="input-box">
            <span class="details"autocomplete="off">Subject  </span>
            <input type="text" name="sub" placeholder="Subject" required>
          </div>

          <div class="input-box">
            <span class="details">Phone No.</span>
            <input type="text" name="phoneno" placeholder="Enter your Phone No." required>
          </div>
          <div class="input-box">
          <span class="details">Platform</span>
          <select name="platform" class="box">
      <option value="GOOGLEMEET" seleted>Google Meet</option>
      <option value="MICROSOFT TEAMS">MicrosoftTeams</option>
      <option value="Zoom">zoom</option>
      <option value="YOUTUBELIVE" >YouTubeLive</option>
      <option value="INVITCOLLEGE" >InCollege</option>
     
    </select>
          </div>
        
         
<div class="input-box">
          <span class="details">Department</span>
          <select name="department" class="box">
      <option value="Computer Science">CS</option>
      <option value="InformationTechnology">IT</option>
      <option value="Artifical Intelligence & Data Sc" selected>AIDS</option>
      <option value="Mechanical" >Mechanical</option>
      <option value="Chemical" >Chemical</option>
      <option value="Intrument" >Instrumentation</option>
    </select>
          </div>
          <div class="input-box">
          <span class="details">Year</span>
          <select name="year" class="box">
      <option value="1st">1st</option>
      <option value="2nd">2nd</option>
      <option value="3rd">3rd</option>
      <option value="4th">4th</option>
      <option value="all" selected>For all</option>
    </select>
          </div>
          
       
        <div class="input-box">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Platform Link </span>
            <input type="text" name="meetlink1" placeholder="Meeting Link" required>
          </div>
</div>
    </select>
          </div>
          <div class="input-box">
        <div class="user-details">
          <label for="appt">Select a time:</label>
<input type="datetime-local" id="appt" name="appt">

          <div class="category">
            
</div>
        </div>
        <div class="button">
          <input type="submit" name="getp" value="Get your Bike Partner">
        </div>
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