<?php 
session_start();
include('connect.php');

$seatbfetch = "SELECT * FROM booking WHERE name LIKE ?";
$stfetch = $pdo->prepare($seatbfetch);
$stfetch->execute(["aditya sharma"]);
$stbsfetch = $stfetch->fetchALL();
foreach ($stbsfetch as $stbfrtch) {
  $name = $stbfrtch->name;
  $train_name = $stbfrtch->train_name;
  $s_station = $stbfrtch->s_station;
  $l_station = $stbfrtch->l_station; 
  
}


?>



<html>
<head>
<title>railway reservation system</title>
<link rel="stylesheet" type="text/css" href="./css/payment.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./images/logo.jpg" alt="" width="200" height="150" class="d-inline-block align-text-top">
        
      </a>
    </div>
  </nav>
<center><p>***YOUR PAYMENT HAS DONE SUCCESFULLY***</p></center>
<label>view your ticket here</label>
<h2>Name: <?php echo $name; ?></h2>
<h2>train name <?php echo $train_name; ?></h2>
<h2>s_station <?php echo $s_station; ?></h2>
<h2>l_station <?php echo $l_station; ?></h2>
<h2>YOUR STATUS:CONFIRMED</h2>


<a href="logout.php">
    <center><button>LOG OUT </button></center>
    </a>

<center><B><P>THANKYOU FOR VISITING WEBSITE</P></B></center>
<form>






<div class="footerb">
  <b> Address</b>
  <br><br>
 Sarojini Naidu Rd,<br> 
 near Court, Ashok Nagar,<br>
 Mulund West, Mumbai,<br>
 Maharashtra 400080<br>
</div>



<div class="footerb">
 <b>Location</b>
  <br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.452271096502!2d72.95613891421429!3d19.175438653823782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8e5321ecbfb%3A0xf7d295a999c47b89!2sMulund%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1631304717416!5m2!1sen!2sin" width="100%" height="110" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<p><a href="rail5.html"><b><i> some interesting fact and  beautiful route should visit in india</i></b></a></p>



</div>

</form>
</body>
</html>