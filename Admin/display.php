<!DOCTYPE html>
<html>
	<head>
		<title>Reports</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 14px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
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
        $username = "root";
        $password = "";
        $dbname = "online_bus_registration_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          $sql1 = "SELECT * FROM owner_info";
          echo "data fechted.";
            $result1 = $conn->query($sql1);            
            if ($result1->num_rows > 0) {
              // output data of each row
              while($row = $result1->fetch_assoc()) {
                echo "Owner ID: " . $row["Owner_ID"]. " - Name: " . $row["owner_name"]. " Phone number" . $row["Phone_number"]. " Email Address" . $row["email_address"]. "<br>";
              }
            } else {
              echo "0 results";
            }
            $sql2 = "SELECT * FROM vehicle_info";
            $result2 = $conn->query($sql2);            
            if ($result2->num_rows > 0) {
              // output data of each row
              while($row = $result2->fetch_assoc()) {
                echo "RegNo: " . $row["vehicle_regno"]. " - Name: " . $row["vehicle_name"]. "Vehicle capacity" . $row["capacity"]. " Owner ID" . $row["Owner_ID"]. " Driver ID" . $row["Driver_ID"]. "Route Name" . $row["Route_Name"]. "Sacco Name" . $row["Sacco_Name"]. "<br>";
              }
            } else {
              echo "0 results";
            }
          }
  ?>
    
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