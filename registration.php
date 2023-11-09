
<?php
require("config.php");
if(isset($_POST['btn']))
{
  $to = $_POST['email'];
$subject = "Registration Successfully";
$from="ashwini kembhavi";
$msg="Register successfully";
$headers = "From: $from";


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $sql="insert into register(First_name,Last_name,Email,Password,phone,city,country)
    values('$firstname','$lastname','$email','$pass','$phone','$city','$country')";
    if(mysqli_query($con,$sql))
    {
      mail($to,$subject,$msg,$headers);
      echo "Email successfully sent.";
      
        echo "Registration Successfully";
    }
    else
    {
        echo "ERROR";
    }

}

?>
<!-- Design by foolishdeveloper.com -->

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <style>
 @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
}

body{
      height: 100vh;
      background: #ff99ff;
}

.wrapper{
  max-width: 450px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;

}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}
.heading{
  background: #015a80;
  margin: -30px;
  text-align: center;
  color: white;
  font-size: 19px;
  margin-bottom: 35px;
  padding: 10px;
  
  
}
.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}

.btn input[type="submit"]{
  background: #1598d4;
  border: 1px solid #1598d4;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}
  </style>
</head>
<body>
<div class="wrapper">
    <div class="form_container">
		  <form name="form" method="post" >
        <div class="heading">
        <h2>Registion Form</h2>
      </div>
			<div class="form_wrap fullname">
				<div class="form_item">
					<label>First Name</label>
					<input type="text" name="firstname" pattern="[a-zA-Z\s]+" required>
					<div class="error" id="fname"></div>  
				</div>
				<div class="form_item">
					<label>Last Name</label>
					<input type="text" name="lastname" pattern="[a-zA-Z\s]+" required>
					<div class="error" id="lname"></div>  
				</div>
			</div>
			<div class="form_wrap">
				<div class="form_item">
					<label>Email Address</label>
					<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter valid email" required>
					<div class="error" id="email"></div>  
				</div>
			</div>
      <div class="form_wrap">
				<div class="form_item">
					<label>Password</label>
					<input type="text" name="pass" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password must include one uppercase letter, one lowercase letter, one number, and one special character such as $ or %."  required>
					<div class="error" id="email"></div>  
				</div>
			</div>
			<div class="form_wrap">
				<div class="form_item">
					<label>Phone</label>
					<input type="text" name="phone" pattern="[0-9]{10}" title="Enter valid Mobile Number" required>
					<div class="error" id="phone"></div>  
				</div>
			</div>
			<div class="form_wrap select_box">
				<div class="form_item">
					<label>City</label>
					<select name="city" required>
						<option value="pune" name="city">pune</option>
						<option value="mumbai" name="city">Mumbai</option>
						<option value="gujrat" name="city">Gujrat</option>
						<option value="ap" name="city">AP</option>
						<option value="up" name="city">UP</option>
					</select>
					<div class="error" id="city"></div>  
				</div>
				<div class="form_item">
					<label>Country</label>
					<select name="country" required>
						<option value="india">India</option>
						<option value="canada">Canada</option>
						<option value="germany">Germany</option>
						<option value="australia">Australia</option>
					</select>
					<div class="error" id="country"></div>  
				</div>
			</div>
      <div class="btn">
			  <input type="submit" value="submit" name="btn">
			</div><br>
      <div class="signup-link">already register?<a href="login1.php">login now</a></div>
</form>
		</div>
	  </div>
  </body>
</html>
