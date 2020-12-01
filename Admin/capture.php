<!DOCTYPE html>
<html>
<style>
    /*set border to the form*/
    
    form {
        border: 3px solid #f1f1f1;
    }
    /*set a style for the buttons*/
    
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: auto;
        align-items: center;
    }
    /* set a hover effect for the button*/
    
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
    
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
    
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
    
    img.avatar {}
    /*set padding to the container*/
    
    .container {
        padding: 90px 160px;
        width: auto;
        background-color: #2342;
        align-items: center;
    }
    /*set the forgot password text*/
    
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
    
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <header>
        <div class="inner-width">
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu">
                <a href="index.php"><i class="fas fa-home home"></i> Home</a>
                <a href="Registration.html"><i class="fas fa-align-left about"></i>Registration</a>
                <a href="capyure.php"><i class="fab fa-buffer works"></i>Online reports</a>
                <a href="About Us.html"><i class="fas fa-users team"></i>About</a>
                <a href="Contact us.html"><i class="fas fa-headset contact"></i>Contact Us</a>
            </nav>
        </div>
    </header>
</head>

<body>
    <h1>Welcome to the registration page</h1>
    
    <p><a href="Registration.html">Fill out the form again?</a></p>    
</body>
</html>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_bus_registration_system";
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  	$regno = @$_POST['VEHICLE_REGNO'];
    $name = @$_POST['VehicleName'];
    $capacity = @$_POST['Capacity'];
    $Ownerid = @$_POST['OwnerID'];
    $DId = @$_POST['DriverID'];
    $sacco = @$_POST['SaccoName'];
    $route = @$_POST['RouteName'];
   
    if(!@$_POST['submit']) {
        $sql = "INSERT INTO vehicle_info('VEHICLE_REGNO','vehicle_name','capacity', 'Owner_ID','Driver_ID','Route_Name','Sacco_Name')
         VALUES(NULL, '$regno', '$name', '$capacity', '$Ownerid', '$DId', '$route', '$sacco')";

        echo "Your input has been added successfully";
    }else {
  echo "Error: "; 
}
$conn->close();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<footer>
    <div class="footer-container">
        <div class="left-col">
            <img src="logo2.png" alt="" class="logo">
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