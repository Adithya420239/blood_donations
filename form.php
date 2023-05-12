<?php
require 'connect.php';

if(isset($_POST["submit"])){
  $full_name = $_POST["full_name"];
  $blood_group = $_POST["blood_group"];
  $phone_number = $_POST["phone_number"];
  $land_number = $_POST["land_number"];
  $country = $_POST["country"];
  $state = $_POST["State"];
  $district=$POST["District"];
  $city=$POST["City"];
  $email = $_POST["email"];
  $user_id =$_POST["user_id"];
  $password = $_POST["password"];
  $query = "INSERT INTO donor_details VALUES('$full_name', '$blood_group','$phone_number', '$land_number','$country', '$State','$District','$City', '$email','$user_id',
    '$password')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5CSpMNq5SligPT6jXZrx56bUaeOcaH_tQg&usqp=CAU">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body background="background.jpg" style="margin-left: 25%;margin-right: 29%;border-style:;">
    <tbody>
        <tr>
            <td background="../../imgs/bg_middle_inner.gif">
                <!-- Add Code Here -->
                <table style="background-color: aliceblue;" cellspacing="0" cellpadding="5" width="688">
                    <tr>
                        <td background="../../imgs/bg_head_inner.gif" height="32">
                            <strong>About
                                Blood Donors: Register</strong>
                        </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td height="10">
                            </td>
                        </tr>
                        <tr>
                            <td height="30"><a href="whocancant.html">Who can/ Can't Donate</a></td>
                        </tr>
                        <tr>
                            <td valign="top">
                                Please fill the following information to register as voluntary blood donor. Kindly
                                update your date of donation once done, so that your name will be hidden automatically
                                till next 3 Months. Also please update your profile/information if in case you relocate
                                in future.
                                <p align="center" class="heading_white" style="border-style: groove;">
                                    <strong>REGISTRATION FORM</strong>
                                </p>
                                <table style="background-color: aliceblue;" cellspacing="1" cellpadding="3" width="70%"
                                    align="center">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" align="center">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="107" style="width: 115px">
                                                <strong>Full Name</strong>
                                            </td>
                                            <td width="30" height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td width="307" style="width: 327px">
                                                <input name="txtFullName" type="text" maxlength="30" id="txtFullName"
                                                    class="textarea">
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                            <td style="width: 107px">
                                                <strong>Blood Group</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <select name="dpBloodGroup" id="dpBloodGroup" class="textarea">
                                                    <option value="Select">-----Select-----</option>
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
                                            </td>
                                        </tr>


                                        <tr bgcolor="#e5e5e5">
                                            <td height="30" colspan="3" style="text-align: center;">
                                                <strong>Contact Information</strong>
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                            <td style="width: 107px">
                                                <strong>Mobile Number<br>
                                                    <font color="blue" size="1"></font>
                                                </strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <input name="txtMobileNumber" type="text" maxlength="10"
                                                    id="txtMobileNumber" class="textarea"
                                                    onkeypress="javascript:return allowOnlyNumbers(event);">
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                            <td class="style5">
                                                <strong>Land Line Number<br>
                                                </strong>(Eg: 0863351725)
                                            </td>
                                            <td class="style3">
                                                <strong>:</strong>
                                            </td>
                                            <td class="style4">
                                                <input name="txtLandLineNumber" type="text" maxlength="12"
                                                    id="txtLandLineNumber" class="textarea"
                                                    onkeypress="javascript:return allowOnlyNumbers(event);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style12">
                                                <strong>Select Country</strong>
                                            </td>
                                            <td class="style13">
                                                <strong>:</strong>
                                            </td>
                                            <td class="style14">

                                                <select name="Country" id="Country" class="textarea">
                                                    <option value="">-----Select-----</option>
                                                    <option value="1">INDIA</option>
                                                    <input type="hidden" name="CountryCascading_ClientState"
                                                        id="CountryCascading_ClientState" value="::::::">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style12">
                                                <label><strong>Select State</strong></label>
                                            </td>
                                            <td class="style13">
                                                <strong>:</strong>
                                            </td>
                                            <td class="style14">

                                                <select name="State" id="State" class="textarea">
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
                                                <input type="hidden" name="StateCascading_ClientState"
                                                    id="StateCascading_ClientState" value="::::::">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="style15" style="width: 107px">
                                                <strong>Select District</strong>
                                            </td>
                                            <td class="style16" height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td class="style16" style="width: 327px">
                                                <div id="dv">
                                                    <select name="District" id="District" class="textarea">
                                                        <option value="">-----Select-----</option>
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
                                                    <input type="hidden" name="DistrictCascading_ClientState"
                                                        id="DistrictCascading_ClientState" value="::::::">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 107px">
                                                <strong>Select City</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <div id="dv1">
                                                    <select name="City" id="City" class="textarea">



                                                        <option value="">-----Select-----</option>
                                                        <option value="">Kurnool</option>
                                                        <option value="">Nandyal</option>
                                                        <option value="">Adoni</option>
                                                        <option value="">Yemmiganur</option>
                                                        <option value="">Dhone</option>


                                                    </select>
                                                    <input type="hidden" name="CityCascading_ClientState"
                                                        id="CityCascading_ClientState" value="::::::">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                            <td style="width: 107px">
                                                <strong>E-Mail ID</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <input name="txtEmailId" type="text" maxlength="100" id="txtEmailId"
                                                    class="textarea">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 107px">
                                                <strong>UserId</strong>

                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>

                                            <td style="width: 327px">
                                                <div>
                                                    <div id="PnlUsrDetails">

                                                        <table>
                                                            <tbody>
                                                                <tr>

                                                                    <!--<td style="width: 327px">
                                                            <input name="txtUserName" type="text" maxlength="100" onchange="javascript:setTimeout('__doPostBack(\'txtUserName\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;return IsAlphaNumeric(event);" id="txtUserName" ondrop="return false;" onpaste="return false;">
                                                                <span id="error" style="color: Red; display: none">* Special Characters not allowed, Please use only letters (a-z) and numbers</span>
                                                            
                                                            <div class="waitingdiv" id="loadingdiv" style="display: none; margin-left: 5.3em">
                                                                <img src="../../images/LoadingImage.gif" alt="Loading">Please wait...
                                                            </div>
                                                        </td>-->
                                                                    <td>
                                                                        <input type="text">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="trPassword">
                                            <td style="width: 107px">
                                                <strong>Password</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <input name="txtUserPassword" type="password" maxlength="50"
                                                    id="txtUserPassword" class="textarea">
                                            </td>
                                        </tr>

                                        <tr id="trRetypePassword">
                                            <td style="width: 107px">
                                                <strong>Re-type Password</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <input name="txtRetypePassword" type="password" maxlength="50"
                                                    id="txtRetypePassword" class="textarea">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 107px">
                                                <strong>Please confirm your availability to donate blood</strong>
                                            </td>
                                            <td height="30">
                                                <strong>:</strong>
                                            </td>
                                            <td style="width: 327px">
                                                <select name="dpAvailUnAvailable" id="dpAvailUnAvailable">
                                                    <option selected="selected" value="A">Available</option>
                                                    <option value="U">UnAvailable</option>

                                                </select>
                                            </td>
                                        </tr>

                                        <!-- Captcha V2 functionality -->
                                        <tr>
                                            <td style="width: 107px">
                                            </td>
                                            <td height="30">

                                            </td>
                                            <td style="width: 327px">
                                                <div id="ReCaptchContainer"></div>
                                                <label id="lblMessage"></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 107px">
                                            </td>
                                            <td valign="top" height="30">
                                                <input type="checkbox" id="chkTermsAndCondition"
                                                    name="chkTermsAndCondition">
                                            </td>
                                            <td style="width: 327px">
                                                I authorise this website to display my name and telephone number, so
                                                that the needy could contact me, as and when there is an emergency.
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                            <td colspan="3" height="30">
                                                <div align="center">
                                                    &nbsp;
                                                    <input name="hidDistrict" type="hidden" id="hidDistrict">
                                                    <input type="button" name="btnSubmit" value="Submit"<a href = "login.html">
                                                        onclick="if(!RegistrationValidation()) return;__doPostBack('btnSubmit','')"
                                                        id="btnSubmit" class="textarea">
                                                    <input name="hidCity" type="hidden" id="hidCity">
                                                </div>
                                                <div class="contact">
                                                    <a href="contact.html"
                                                        style="background-color: aliceblue; margin: 10px;">Contact
                                                        Us</a>
                                                </div>
                                            </td>

                                            <td>

                                            </td>
                                        </tr>
                                        <tr>


                                        </tr>
                                    </tbody>
                                </table>
                                <br>

                            </td>

                        </tr>
                    </tbody>
                </table>

            </td>
        </tr>


    </tbody>
</body>

</html>