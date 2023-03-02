<?php

    include('config.php');
    if (isset($_POST['forgot'])) {
       
        $nemail = $_POST['email1'];
        $npassword=$_POST['npass'];
        $cpassword = $_POST['cpass'];

if($npassword==$cpassword)
{

        $query="UPDATE users SET pass='$cpassword' WHERE email='$nemail'";
        if (mysqli_query($conn, $query)) {

            //echo '<script>alert("Password Changed")</script>';

          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
          }

    }
    else{
        echo"retry";
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NExtGen</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="nav">NextGen</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                  
                 
                </ul>
            </nav>
        </div>
</div>
<section class='showcase2'>
    <div class="showcase-form card">
            <h2>Change Password</h2>
            <form method="post">
            <div class="form-control">
                    <input type="email" name="email1" placeholder="Gmail" required>
                </div>
                <div class="form-control">
                    <input type="password" name="npass" placeholder="New Password" required>
                </div>
                
               
                <div class="form-control">
                    <input type="password" name="cpass" placeholder="Confirm Password" required>
                </div>
                <input type="submit" onclick="window.open('login.php')" name="forgot" value="Change Password" class="btn btn-primary">
            </form>
           
        </div>
    </div>
</section>