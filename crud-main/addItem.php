<!DOCTYPE html>
<html>

<head>
  <script src="https://kit.fontawesome.com/ed98ca1227.js" crossorigin="anonymous"></script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forum Page</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="css/custom.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</head>

<body>
  <div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top navbar-header">
      <div class="adjust-nav">

        <a class="navbar-brand" href="../../index.php">
          <p style='font-size:30px'>VIT Connect</p>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>





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
            <a href="../bikebuddy_1.php"><i class="fa-solid fa-person-biking" alt='bike icon'></i>Bike Buddy
            </a>
          </li>
          <li>
            <a href="../study_option.php"><i class="fa fa-book " alt='study icon'></i>Study </a>
          </li>


          <li>
            <a href="../buy_sell2.php"><i class="fa fa-lightbulb-o " alt='buy sell icon'></i>Buy/Sell</a>
          </li>
          <li>
            <a href="../roommate.php"><i class="fa fa-users" alt='room mate icon'></i>Room Mate</a>
          </li>
          <li>
            <a href="../forum/index.php"><i class="fa fa-quora" aria-hidden="true" alt='forum image'></i></i>Community
              Forum</a>
          </li>

          <li>
            <a href="#"><i class="fa fa-edit " alt='logout icon'></i>Logout</a>
          </li>

        </ul>
      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <!-- Modal -->

    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">


          <!-- Modal content-->
          <?php ?>
          <div class="container">
            <a href="../buy_sell2.php" class="btn btn-light mb-3">
              << Go Back</a>
                <a href="index.php" class="btn btn-light mb-3">
                  << Manage Products</a>
                    <?php if (isset($_GET['status']) && $_GET['status'] == "created"): ?>
                      <div class="alert alert-success" role="alert">
                        <strong>Created</strong>
                      </div>
                    <?php endif ?>
                    <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create"): ?>
                      <div class="alert alert-danger" role="alert">
                        <strong>Fail Create</strong>
                      </div>
                    <?php endif ?>

                    <!-- Create Form -->
                    <div class="card border-danger">
                      <div class="card-body">
                        <form action="add.php" method="post" enctype="multipart/form-data">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="barcode" class="col-form-label">Barcode</label>
                              <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode"
                                required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="name" class="col-form-label">Name </label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="price" class="col-form-label">Price</label>
                              <input type="number" class="form-control" id="price" name="price" placeholder="Price"
                                required>
                            </div>
                            <div class="form-group col-md-4">
                              <label for="qty" class="col-form-label">Qty</label>
                              <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                            </div>

                            <div class="form-group col-md-4">
                              <label for="image" class="col-form-label">Image</label>
                              <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="note" class="col-form-label">Description</label>
                            <textarea name="description" id="" rows="5" class="form-control"
                              placeholder="Description"></textarea>
                          </div>
                          <button type="submit" class="btn btn-success" style="background-color:#2770D5;"><i
                              class="fa fa-check-circle"></i> Save</button>

                        </form>

                      </div>

                    </div>
                    <!-- End create form -->
                    <br>
          </div><!-- /.container -->
          <?php ?>
        </div>





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