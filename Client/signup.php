<?php
       $servername = "localhost";
        $user_name = "root";
        $pass_word = "";
        $dbname = "online_bus_registration_system";
$link = mysqli_connect($servername, $user_name, $pass_word, $dbname);
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$usernm = mysqli_real_escape_string($link, @$_REQUEST['usrnm']);
$Email = mysqli_real_escape_string($link, @$_REQUEST['email']);
$pwd = mysqli_real_escape_string($link, @$_REQUEST['psw']);
 
// Attempt insert query execution
$sql = "INSERT INTO login (username,email,password) VALUES ('$usernm', '$Email', '$pwd')";
if(mysqli_query($link, $sql)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
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
    <title>User successfully created</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <header>
        <div class="inner-width">
            SUCCESS
        </div>
    </header>
</head>

<body>
    <h1>Registration successful</h1>

    <p><a href="Index.html">Login?</a></p>
    creat a new account<a href="signup.html">Login?</a>
    
</body>
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