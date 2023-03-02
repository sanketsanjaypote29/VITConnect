<?php
include ('../config.php');
if (isset($_POST['getp'])) {

  $bike_no = $_POST['bikeno'];
  $phone_no = $_POST['phoneno'];
  $license_check = $_POST['licensecheck'];
  $gender_radio = $_POST['gndr'];
  $location_check = $_POST['location'];
  $dept = $_POST['department'];
  $year_check = $_POST['year'];

  //$bike_re = "[A-Z]{2}[0-9]{2}[A-Z]{1,2}[0-9]{4}";

  // if (preg_match($bike_re, $bike_no)) {

    
    
  // }
  $bikeins= "INSERT INTO `rider` (`bikeno`,`phoneno`,`license`,`location`,`department`,`year`,`gender`) VALUES ('$bike_no', '$phone_no', '$license_check', '$location_check', '$dept', '$year_check', '$gender_radio')";

  if (mysqli_query($conn, $bikeins)) {
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

  
}

?>