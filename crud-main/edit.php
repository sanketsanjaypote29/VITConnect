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
            <?php 
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

try {
    $sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();    
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("Location: index.php");
    exit();
}
$product = $stmt->fetch();
?>

<?php ?>
    <div class="container">
    <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "updated") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Updated</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_update") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Update</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-danger">
         
            <div class="card-body">
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required value="<?= $product['barcode'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?= $product['name'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required value="<?= $product['price'] ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required value="<?= $product['qty'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL" value="<?= $product['image'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"><?= $product['description'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
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