<!DOCTYPE html>
<html>
<style type="text/css">
    img {
        border-radius: 50%;
    }
</style>

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="slideshow.css">
    <link rel="stylesheet" type="text/css" href="column.css">
    <script type="text/javascript" src="slideshow.js"></script>
    <header>
        <div class="inner-width">
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu">
                <a href="Home.php"><i class="fas fa-home home"></i> Home</a>
                <a href="Registration.html"><i class="fas fa-align-left about"></i>Registration</a>
                <a href="display.php"><i class="fab fa-buffer works"></i>Online reports</a>
            </nav>
        </div>
    </header>
</head>

<body>
<?php
       $servername = "localhost";
        $user_name = "root";
        $pass_word = "";
        $dbname = "online_bus_registration_system";
$link = mysqli_connect($servername, $user_name, $pass_word, $dbname);
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['user_name']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $search = mysql_query("SELECT  FROM admin WHERE username = '$myemail' and passcode = '$mypassword' AND active='1'") or die(mysql_error()); 
                $match  = mysql_num_rows($search);

                if($match > 0){
                  echo "SUCCESS, Welcome";                   
                }else{
                    $msg = 'Login Failed!<br /> Please make sure that you enter the correct details and that you have activated your account.';
                }
            }
          }
          ?>
    <h2 style=":#aaa">Welcome</h2>
    <p style="font: ">Thank you for choosing online bus registration to register your vehicle with us. Online bus registration system enables us to manage the public service vehicles and bring order to the sector</p>

         <form action="searchRecord.php" method="$_POST" id="form2">
        < Vehicle registration number: <input type="text" name="VEHICLE_REGNO" />
        </form>
                
</body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<footer>
    <div class="footer-container">
        <div class="left-col">
            <img src="logo2.png" alt="logo" class="logo">
            <div class="social-media">
                <a href="https://www.facebook.com/collins.kandie.56"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/kandie_collins"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/kandie_official"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/account"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/in/collins-kandie-0929b81aa"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="rights-text">© 2020 Created.</p>
        </div>

        <div class="right-col">
            <h1>Our Newsletter</h1>
            <div class="border"></div>
            <p>Enter Your Email to get our news and updates.</p>
            <form action="" class="newsletter-form">
                <input type="text" class="txtb" placeholder="Enter Your Email">
                <input type="submit" class="btn" value="submit">
            </form>
        </div>
    </div>
</footer>

</html>
?>
