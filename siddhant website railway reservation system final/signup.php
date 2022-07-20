<?php error_reporting(0); 
      ?>

<?php
include('dbconnect.php');
if (isset($_POST['register'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username != '' && $password != '' && $name != '' && $email != '') {
        $pwd_hash = md5($password);
        $sql = "INSERT INTO signup (name,email,username,password) VALUES ('$name', '$email', '$username', '$pwd_hash')";
        $query = $conn->query($sql);
        
        if ($query) {
            // echo "Success";
            header('Location:login.php');
        } 
        else {
           echo $error = "Failed to Register User !";
        }
    }
     else {
       echo $error =  'Please Fill all the Details !';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Railway Register</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    </head>
<body>
<div class="wrapper">
    <div class="rail">
        <form action="signup.php" method="POST">

             <label>Name</label>
            <br><input type="text" name="name" placeholder="Full name"/></br>
            
            <label>Email</label>
            <br><input type="email" name="email" placeholder="Email"/></br>

            <label>username</label>
            <br><input type="text" name="username" placeholder="username"/></br>
        
            <label>password</label>
            <br> <input type="password" name="password"/></br>
    

         <input type="submit" name="register" value="Sign Up">

        </form>
    </div>
</div>
</body>
</html>