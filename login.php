
<?php
$passwrong=0;
echo $password;
include('../config.php');
if(isset($_POST['login'])) 
{
$email =$_POST['email'];
$password = $_POST['password'];
$query="SELECT `email`,`pass`,`uname` FROM users";
$result=mysqli_query($conn, $query);
        if ($result) 
         {
            if (mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    if($row["email"]==$email && $row["pass"]==$password)
                    {         
                        echo "hyhyuhuy";
                           
                            // session_start();
                
                            //      $_SESSION['user']=$row['uname'];
                            //     $_SESSION['user_id']=$userid;
                            //      $_SESSION['login']=1;
                            //    header("Location:bs-simple-admin/homepage.php");

                    }
                    else
                        {
                              $passwrong=1;
                            
                        }
                    
                    }
                }
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
    <link rel="stylesheet" href=" ../css/utilities.css">
    <link rel="stylesheet" href=" ../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  


    <title>VITConnect</title>
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
    <div class="showcase-form card">
            <h2>Login</h2>
            <form method="POST" action=”<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>” >
                <!-- action -->
                <div class="form-control">
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                
               
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password" required>

                    <?php
                    if($passwrong==1){
                     echo"<h3 style='color:red;'> email or pass is wrong!!</h3>";
                    }
                    ?>
                </div>
                <input type="submit" name="login" value="login" class="btn btn-primary">
            </form>
            <br>
            <div><a href='forgot.php'>Forgot Password ?</a></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>