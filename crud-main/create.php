<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/ed98ca1227.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Bike Buddy</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="./css/bootstrap.css" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->
    <link href="./css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="./css/custom.css" rel="stylesheet" />
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
                        <a href="#"><i class="fa fa-edit "></i>Logout</a>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
            <?php ?>
    <div class="container">
        <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
       
      
        <br>
    </div><!-- /.container -->
<?php ?>
                        <!-- /. WRAPPER  -->
                        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                        <!-- JQUERY SCRIPTS -->
                        <script src="./js2/jquery-1.10.2.js"></script>
                        <!-- BOOTSTRAP SCRIPTS -->
                        <script src="./js2/bootstrap.min.js"></script>
                        <!-- CUSTOM SCRIPTS -->
                        <script src="./js2/custom.js"></script>


</body>

</html>