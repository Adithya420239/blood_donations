<?php
require 'connect.php';

if(isset($_POST["submit"])){
  $full_name = $_POST["full_name"];
  $blood_group = $_POST["blood_group"];
  $phone_number = $_POST["phone_number"];
  $land_number = $_POST["land_number"];
  $country = $_POST["country"];
  $state = $_POST["dpState"];
  $district=$POST["dpDistrict"];
  $city=$POST["dpCity"];
  $email = $_POST["email"];
  $user_id =$_POST["user_id"];
  $password = $_POST["password"];
  $query = "INSERT INTO donor_details VALUES('$full_name', '$blood_group','$phone_number', '$land_number','$country', '$dpState','$dpDistrict','$dpCity', '$email','$user_id',
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
        <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="A1+">A1+</option>
                                                    <option value="A1-">A1-</option>
                                                    <option value="A1B+">A1B+</option>
                                                    <option value="A1B-">A1B-</option>
                                                    <option value="A2+">A2+</option>
                                                    <option value="A2-">A2-</option>
                                                    <option value="A2B+">A2B+</option>
                                                    <option value="A2B-">A2B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                                                    <option value="INRA">INRA</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>

                                                </select>
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
      label for="">State</label>
      <select class="" name="State" required>
        <option value="" selected hidden>State</option>
                                                    <option value="">-----Select-----</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                </select>
      <label for="">District</label>
      <select class="" name="District" required>
        <option value="">Chitoor</option>
        
                                                        <option value="">Kurnool</option>
                                                        <option value="">Nellore</option>
                                                        <option value="">East Godavari</option>
                                                        <option value="">Guntur</option>
                                                        <option value="">Krishna</option>
                                                        <option value="">Prakasam</option>
                                                        <option value="">Srikakulam</option>
                                                        <option value="">Visakhapatnam</option>
                                                        <option value="">Vizianagaram</option>
                                                        <option value="">West Godavari</option>
                                                        <option value="">YSR Kadapa</option>
  </select>
  <label for="">City</label>
      <select class="" name="City" required>
        <option value="" selected hidden>City</option>
        <option value="">-----Select-----</option>
                                                        <option value="">Kurnool</option>
                                                        <option value="">Nandyal</option>
                                                        <option value="">Adoni</option>
                                                        <option value="">Yemmiganur</option>
                                                        <option value="">Dhone</option>


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
      <button type="submit" name="submit">Submit<a href = "login.html"></button>
    </form>
  </body>
</html>
