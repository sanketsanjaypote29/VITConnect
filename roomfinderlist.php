<?php



?>





<!DOCTYPE html>
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
    <link href="assets/css/bikelist.css" rel="stylesheet" />
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

                <?php
               
                      
                
                

                        include('../config.php');
                        $sql1= "SELECT * FROM `roommate`";
                        $result=mysqli_query($conn,$sql1);


                        if (mysqli_num_rows($result) > 0) 
                        {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                        $link="https://wa.me/".$row['rphone']."?text=hi";
                          
                echo"
                     <div class='grid'>
                    <div class='product-card'>


                        <div class='product-details'>
                            <span class='product-catagory'>".$row['rlocation']."</span>
                        <h4>".$row['rname']."</h4>
                            <p>".$row['rphone']."</p>
                            <h5>Address<p>".$row['radd']."</p></h5>
                            <p><b>Dept. </b>".$row['rdpet']." ".$row['ryear']."Year</p>
                            <p>".$row['rgender']."</p> 
                            <div class='product-bottom-details'>
                                <div class='product-price'>
                                <a href='".$link."'> <button class='product-button'>Chat Now</button></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>";


                            }
                        }

                        
                    else {
                            echo "0 results";
                        }
?>

                <!-- <div class='grid'>
                    <div class="product-card">


                        <div class="product-details">
                            <span class="product-catagory">chintamani nagar</span>
                            <h4><a href="">Avdhoot Fulsundar</a></h4>
                            <p>Department of AI & DS in 2nd year</p>
                            <div class="product-bottom-details">
                                <div class="product-price">
                                    <button class="product-button">Chat Now</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="product-card">


                        <div class="product-details">
                            <span class="product-catagory">chintamani nagar</span>
                            <h4><a href="">Avdhoot Fulsundar</a></h4>
                            <p>Department of AI & DS in 2nd year</p>
                            <div class="product-bottom-details">
                                <div class="product-price">
                                    <button class="product-button">Chat Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="product-card">


                        <div class="product-details">
                            <span class="product-catagory">chintamani nagar</span>
                            <h4><a href="">Avdhoot Fulsundar</a></h4>
                            <p>Department of AI & DS in 2nd year</p>
                            <div class="product-bottom-details">
                                <div class="product-price">
                                    <button class="product-button">Chat Now</button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

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