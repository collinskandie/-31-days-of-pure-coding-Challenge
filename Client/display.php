<!DOCTYPE html>
<html>
	<head>
		<title>Reports</title>
    <style>
      table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        }  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
			<header>
      <div class="inner-width">
        <i class="menu-toggle-btn fas fa-bars"></i>
         <nav class="navigation-menu">
          <a href="home.php"><i class="fas fa-home home"></i> Home</a>
          <a href="Registration.html"><i class="fas fa-align-left about"></i>Registration</a>
          <a href="display.php"><i class="fab fa-buffer works"></i>Online reports</a>
          <a href="About Us.html"><i class="fas fa-users team"></i>About</a>
          <a href="Contact us.html"><i class="fas fa-headset contact"></i>Contact Us</a>
        </nav>
      </div>
    </header>
    </head>
   <body>
       <?php
  		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_bus_registration_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          $result = "SELECT * FROM owner_info";
         
  ?>
  <section> 
        <h1>Vehicle Info</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>Vehicle REG</th> 
                <th>Vehicle Name</th>
                <th>Capacity</th>  
                <th>Owner ID</th> 
                <th>Driver ID </th> 
                <th>Route Name </th>
                <th>Sacco Name</th>
            </tr> 
              <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['vehicle_regno'];?></td> 
                <td><?php echo $rows['vehicle_names'];?></td> 
                <td><?php echo $rows['capacity'];?></td> 
                <td><?php echo $rows['Owner_ID'];?></td>
                <td><?php echo $rows['Driver_ID'];?></td>
                <td><?php echo $rows['Route_Name'];?></td>
                <td><?php echo $rows['Sacco_Name'];?></td>  
            </tr> 
            <?php 
                } 
              }
             ?> 
        </table> 
    </section>     
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