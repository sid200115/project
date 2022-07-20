<?php error_reporting(0); 
       session_start(); ?>
<?php 
include('dbconnect.php');

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION["name"] = $username;
    $password = $_POST['password'];

    if ($username != '' && $password != '') {
        $encrypted_pwd = md5($password);
        $sql = "SELECT * FROM signup WHERE username = '$username' AND password = '$encrypted_pwd'";
        $result = mysqli_query($conn, $sql) or die('Error');

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                header('Location:booking.php');
            }
        } else {
           echo $error = "Username Or Password is incorrect ! Please Try again";
        }
    } else {
      echo  $error = "Please Fill all the Input Fields";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
    
  
 

<div class="wrapper">
    <div class="railway_reservation">
        <b><h1>BHARTIYA RAIL APKA SWAGAT KARTA HAI</h1></b>
	
        <form action="login.php"  method="POST">
            <label>username</label>
            <input type=text name="username" placeholder="Username" />
        <br></br>
            <label>password</label>
            <input type=password name="password" placeholder="Password" />
        <br></br>
            <input type="submit" value="Login" name="login">
<br></br>
            <a href="signup.php">new user click here</a>
        </form>
 </div>
</div>
</body>
</html>