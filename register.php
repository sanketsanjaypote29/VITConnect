
<?php
$userreg=0;
    include('config.php');
    if (isset($_POST['register'])) 
{
        $username=$_POST['fullname'];
        $nemail=$_POST['email1'];
        $npassword=$_POST['password1'];
        $cpassword=$_POST['cpass'];


    $queryemail="SELECT * FROM `users` WHERE `email`='$nemail'";
    $emailfound=mysqli_query($conn,$queryemail);
    $emailnum=mysqli_num_rows($emailfound);

    if($emailnum==0){
        

    
if($npassword==$cpassword)
{

        $query="INSERT INTO `users` (`uname`, `email`, `pass`) VALUES ('$username', '$nemail', '$cpassword')";
        
        if (mysqli_query($conn, $query)) {
            header("Location: login.php?reg=1");

            

          } else {
            header("Location: login.php?reg=0");

          }

    }
    else{
        echo"retry";
    }
}

    
    else{
        $userreg=1;
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
    <title>Register</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="nav">VITConnect</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                 
                                       
                </ul>
            </nav>
        </div>
    </div>
    <section class='showcase2'>
    <div class="showcase-form card" style='height:400px'>
            <h2>Register</h2>
            <form method="POST">
                <div class="form-control">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-control">
                    <input type="text" name="email1" placeholder="Email" required>
                </div>
                 
                <div class="form-control">
                    <input type="password" name="password1" placeholder="Password" required>
                </div>
                <div class="form-control">
                    <input type="password" name="cpass" placeholder="Confirm Password" required>
                    <?php

if($userreg==1){
echo"<h3 style='color:red;'> user is alrady exist!!</h3>";


}
?>
                </div>

                <input type="submit" name="register" value="Register" class="btn btn-primary">
            </form>
            <br>

        
        
        </div>
    </div>
</section>