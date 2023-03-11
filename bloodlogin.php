<?php
require 'connect.php';

if(isset($_POST["submit"])){
  $full_name = $_POST["full_name"];
  $blood_group = $_POST["blood_group"];
  $phone_number = $_POST["phone_number"];
  $land_number = $_POST["land_number"];
  $country = $_POST["country"];
  $email = $_POST["email"];
  $user_id =$_POST["user_id"];
  $password = $_POST["password"];
  $query = "INSERT INTO donor_details VALUES('$full_name', '$blood_group','$phone_number', '$land_number','$country', '$email','$user_id',
    '$password')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register here</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <h1> Register here! </h1>

    <div id = "reg-form">
    <form class="" action="" method="post" autocomplete="off">
      <label for="">full_name :</label>
      <input type="text" name="full_name" placeholder="" required value="">
      <label for="">blood_group</label>
      <select class="" name="blood_group" required>
        <option value="" selected hidden>blood_group</option>
        <option value="O+">O+</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
      </select>
      <label for ="phone_number"> phone_number :</label>
      <input type="text" name="phone_number" required value="">
      <label for ="land_number"> land_number :</label>
      <input type="text" name="land_number" required value="">
      <label for="">country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>country</option>
        <option value="india">india</option>
        <option value="usa">usa</option>
        <option value="uk">uk</option>
      </select>
      <div>
        <label for = "email"> email :</label>
        <input name="email" type="password" required value=""/>
      </div>
      <div>
        <label for = "user_id"> user_id :</label>
        <input name="user_id" type="text" required value=""/>
      </div>
      <div>
          
        <label for = "password"> password :</label>
        <input name = "password" type="Password" required value="" />


      </div>
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
