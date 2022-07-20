
<?php 
include('dbconnect.php');

if(isset($_POST['book_ticket'])) {
    $name = $_POST['name'];
    $mobile_no = $_POST['mobile_no'];
    $s_station = $_POST['s_station'];
    $l_station = $_POST['l_station'];
    $train_name = $_POST['train_name'];
    $seat_preference = $_POST['seat_preference'];
    $adhar_card = $_POST['adhar_card'];
    $address = $_POST['address'];
    $pin_code = $_POST['pin_code'];
    $gender = $_POST['gender'];

    
    if ($name != '' && $mobile_no != '' && $s_station !='' && $l_station!= '' &&  $train_name!= ''  
     &&  $seat_preference!= ''&& $adhar_card!= ''&&  $address != ''&&  $pin_code != '' && $gender != '') {
        
        
        $sql1 = "INSERT INTO booking(name,mobile_no,s_station,l_station,train_name,seat_preference,adhar_card,address,pin_code,gender) VALUES('$name', '$mobile_no', '$s_station','$l_station','$train_name','$seat_preference','$adhar_card','$address','$pin_code','$gender')";

       $query1 = $conn->query($sql1);
        if ($query1) {
          header('Location:rail6.html');
           // echo "Success";
        } 
        else {
            echo $error =  'Please Fill all the Details !';
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
    <title>Booking Page</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <h4>Booking Page</h4>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.jpg" alt="" width="200" height="150" class="d-inline-block align-text-top">

            </a>
        </div>
    </nav>
    <div class="sid">
        <ul>
            <li class="active"><a href="login.php">Home Page</a></li>
            <li><a href="rail4.html">Help Line Number</a></li>
            <li><a href="rail5.html">explore railway</a></li>
            <li><a href="rail9.html">About Us</a></li>

        </ul>
    </div>

    <div class="main">
        <h1>FOR BOOKING TICKET PLEASE FILL BELOW GIVEN FORM</h1>

        <form action="booking.php" method="POST">
            <label>FULL NAME</label>
            <input type="text" name="name" placeholder="Name">
<br></br>
            <label>MOBILE NO</label>
            <br><input type="number" name="mobile_no" placeholder="enter MOBILE NO"></br>
            

            <BR></BR>
            <label for="BOARDING(start journey)">BOARDING(start journey)</label>
            <input type="text" name="s_station" placeholder="enter your starting station">

            <label for="JOURNEY UPTO">JOURNEY UPTO</label>
            <input type="text" name="l_station" placeholder="enter your destination">
            <br></br>

             <div class="mb-3 col-md-3">
            <label for="validationDefault04" class="form-label">train name</label>
            <select name="train_name" class="form-select" id="validationDefault04" required>
              <option selected disabled value="">Select your train name</option>
              <option value="golden temple">golden temple</option>
              <option value="kushinagar express">kushinagar express</option>
              <option value="2542 express">2542 express</option>
              <option value="deccan queen">deccan queen</option>
            </select>
          </div>


            <br></br>

            <div class="mb-3 col-md-3">
            <label class="form-label">seat preference</label>
            <select name="seat_preference" class="form-select mb-3" aria-label="Default select example" required>
              <option selected disabled value="">Choose your seat preference</option>
              <option value="upper birth">upper birth</option>
              <option value="middle birth">middle birth</option>
              <option value="lower birth">lower birth</option>
            </select>
          </div>

       <br></br>

  
      




            <label>adhar card no</label>
            <br><input type="number" name="adhar_card" placeholder="enter adhar card no"></br>

            <label>RESIDENTIAL ADDRESS</label>
            <br><textarea name="address" placeholder="enter residential address"></textarea></br>

            <label>PIN CODE</label>
            <br><input type="number" name="pin_code" placeholder="enter pin code" size="6"></br>
           
<br></br>
    
            <div class="mb-3 col-md-3">
            <label class="form-label">gender</label>
            <select name="gender" class="form-select mb-3" aria-label="Default select example" required>
              <option selected disabled value="">Select your gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <br>
         
          <center><input type="submit" name="book_ticket" value="booking"></center>
          <footer>
<marquee bgcolor="green">******WELCOME TO INDIAN RAILWAY******</marquee>
</footer>
        </form>
    </div>
</body>

</html>