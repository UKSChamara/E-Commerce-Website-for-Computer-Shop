<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Profile.css">
	
<script>
	function validateFullName()
	{
		let fname=document.getElementById("txtFullName").value;
		
		if((fname == "") || (fname == null))
			{
				alert("Please Enter Full Name !!");
				return false;
			}
			return true;
	}
	
	
	function validateEmail()
	{
		let email=document.getElementById("txtEmail").value;
		
		let at=email.indexOf("@");
		let dt=email.lastIndexOf(".");
		let len=email.length;
		
		if((at<2) || (dt-at<2) || (len-dt<2))
			{
				alert("Please Enter a valid Email address!!");
				return false;
			}
		return true;
	}
	
	
	function validatePassword()
	{
		let pass=document.getElementById("txtPassword").value;
		let cpass=document.getElementById("txtConfirmPassword").value;
		
		if((pass!=cpass) || (pass.length <5))
			{
				alert("Please Enter a Correct Password!!");
				return false;
			}
		return true;
	}
	
	
	
	
	
	function validateContact()
	{
		let contact=document.getElementById("txtContact").value;
		
		if((contact.length != 10) || (isNaN(contact)))
			{
				alert("Please Enter a valid Contact Number!!");
				return false;
			}
		return true;
	}
	
	
	
	
	
	
	
	
	
	function validateAll()
	{
		if(validateFullName() && validateEmail() && validatePassword() &&  validateContact() ())
			{
				alert("Reservation Added!!");
			}
		else
			{
				event.preventDefault();
			}
	}
	
</script>
</head>

<body>
	
<header>
    <a href="#"><img src="Images/332908969_3157164351095892_8198187503957028333_n.jpg" class="logo" alt=""></a>
  

  <div>
    <ul id="navbar">
      <li><a href="Home.html">Home</a></li>
      <li><a href="Shop.html">Shop</a></li>
	  <li><a href="profile.html">Profile</a></li>
      <li><a href="Cart.html"><img src="Images/cart.png"></a></li>
    </ul>
  </div>
</header>
	
<form id="form1" name="form1" method="post" action="">
<table width="478" border="0" align="center">
  <tr>
    <td colspan="2"><h1 align="center">New User Registration</h1></td>
    </tr>

  
	<tr>
    
    <td ><label for="txtFullName"></label>
      <input type="text" name="txtFullName" id="txtFullName" placeholder="Full Name" /></td>
  </tr>
	
	<tr>
    
    <td><label for="txtEmail"></label>
      <input type="text" name="txtEmail" id="txtEmail" placeholder="Email Address" /></td>
  </tr>
  <tr>
    
    <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" /></td>
  </tr>
  <tr>
    
    <td><label for="txtConfirmPassword"></label>
      <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Confirm Password" /></td>
  </tr>
  <tr>
    
    <td><label for="txtContact"></label>
      <input type="text" name="txtContact" id="txtContact" placeholder="Contact Number"/></td>
  </tr>
  
  <tr>
    <td height="71"><input type="submit" name="btnSubmit" id="btnSubmit" value="Register" onClick="validateAll()"> </td>    
         
    
  </tr>
	<?php
	if(isset($_POST["btnSubmit"]))
	{
		$name  = $_POST["txtFullName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$contact  = $_POST["txtContact"];
		
		$con=mysqli_connect("localhost","root","","test","3306");
		
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="INSERT INTO `user` (`name`, `email`, `password`, `contact`) VALUES ('".$name."', '".$email."', '".$password."', '".$contact."');";
		//INSERT INTO `user` (`name`, `email`, `password`, `contact`, `utype`) VALUES ('Sahan Chamara', 'ukschamara@gmail.com', 'sahan123', '11111', 'admin')

		mysqli_query($con,$sql);
		header('Location:Profile.php');
	}
	?>
</table>
</form>
	
	
<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>
</body>
</html>	
