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
    <!-- CUSTOM STYLES-->
    <link href="./css/custom.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    

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
                        <a href="../homepage.php"><i class="fa fa-desktop "></i>Home </a>
                    </li>


                    <li>
                        <a href="../bikebuddy_1.php"><i class="fa-solid fa-person-biking"></i>Bike Buddy </a>
                    </li>
                    <li>
                        <a href="../study_option.php"><i class="fa fa-book "></i>Study </a>
                    </li>


                    <li>
                        <a href="../buy_sell2.php"><i class="fa fa-lightbulb-o "></i>Buy/Sell</a>
                    </li>
                    <li>
                        <a href="../roommate.php"><i class="fa fa-users"></i>Room Mate</a>
                    </li>
                    <li>
                        <a href="./forum/index.php"><i class="fa fa-quora" aria-hidden="true"
                                alt='forum image'></i></i>Community Forum</a>
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
                <?php
                // Include database connection
                require("inc/db.php");

                try {
                    // Create sql statment
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);

                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                    exit();
                }

                ?>
                <?php ?>
                <div>
                    <?php if (isset($_GET['status']) && $_GET['status'] == "deleted"): ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Deleted</strong>
                        </div>
                    <?php endif ?>
                    <?php if (isset($_GET['status']) && $_GET['status'] == "fail_delete"): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Fail Delete</strong>
                        </div>
                    <?php endif ?>
                    <!-- Table Product -->
                    <div class="card border-danger">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="card-title float-left">Manage Products</h5>
                                    <a href="additem.php" class="btn btn-light mb-3">
                                        << Go Back</a><br>
                                            <a href="create.php" class="btn btn-success float-right mb-3"
                                                style="background-color:#2770D5;"><i class="fa fa-plus"></i> Add New</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th style="width: 20%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($result->rowCount() > 0): ?>
                                        <?php foreach ($result as $product): ?>
                                            <tr>
                                                <td>
                                                    <?= $product['barcode'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['name'] ?>
                                                </td>
                                                <td>$
                                                    <?= number_format($product['price'], 2) ?>
                                                </td>
                                                <td>
                                                    <?= $product['qty'] ?>
                                                </td>
                                                <td>
                                                    <a href="show.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-light"><i
                                                            class="fa fa-th-list"></i></a>
                                                    <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-info"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#modal-delete-<?= $product['id'] ?>"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                    <?php include("inc/modal.php") ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Table Product -->
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