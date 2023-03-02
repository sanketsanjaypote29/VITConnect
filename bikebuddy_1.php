<!-- <?php
// include ('../config.php');
// session_start();
// $username=$_SESSION['user'];
// $qu="SELECT * FROM `rider`";
// $result = mysqli_query($conn,$qu);
// //echo"$username";


// if (isset($_POST['update'])) 

// {

//     $name=$_POST['delete'];
//     $qu2="DELETE FROM rider WHERE `rider`.`name` = '$name'";
//     mysqli_query($conn,$qu2);
  


// }

?> -->

<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/ed98ca1227.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Bike Buddy</title>
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

<body style="font-family: 'Lato', sans-serif;
    line-height: 30px;">



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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">

                </div>
                <!-- /. ROW  -->

                
                <div class="row">
                    <div class="col-lg-12 ">


                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row text-center pad-top">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="div-square">
                            <a href="havebike.php">
                                <i class=" fa fa-solid fa-person-biking fa-4x"></i>
                                <h5 style='color:black; text-decoration:none;'>Do you have a bike?</h5>
                            </a>

                        </div>


                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="div-square">
                            <a href="wantbike.php">
                                <i class="fa fa-solid fa-user fa-4x"></i>
                                <h5 style='color:black; text-decoration:none;'>Do you need a lift?</h5>
                        </a>
                        </div>



                

<?php

?>

<form method="POST">

<!-- 
<table>
   
   
            <tr>
                
                <td><input type="hidden" name="delete" value="<?php echo $username?>"> 
                <td><input type="submit" name="update" value="delete"></td>
            </tr>
        
    
    </table> -->
</form>

                        <!-- /. WRAPPER  -->
                        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                        <!-- JQUERY SCRIPTS -->
                        <script src="assets/js/jquery-1.10.2.js"></script>
                        <!-- BOOTSTRAP SCRIPTS -->
                        <script src="assets/js/bootstrap.min.js"></script>
                        <!-- CUSTOM SCRIPTS -->
                        <script src="assets/js/custom.js"></script>


</body>

<!-- 
    localStorage.setItem("auth","")
    localStorage.getItem("auth")
 -->


</html> 