<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="Profile.css">
	
<script>
	
//	function validateEmail()
//	{
//		let email=document.getElementById("txtEmail").value;
//		
//		let at=email.indexOf("@");
//		let dt=email.lastIndexOf(".");
//		let len=email.length;
//		
//		if((at<2) || (dt-at<2) || (len-dt<2))
//			{
//				alert("Please Enter a valid Email address!!");
//				return false;
//			}
//		return true;
//	}
//	
//	
//	function validatePassword()
//	{
//		let pass=document.getElementById("txtPassword").value;
//		
//		
//		if((pass.length <5))
//			{
//				alert("Please Enter a Correct Password!!");
//				return false;
//			}
//		return true;
//	}
//	
//	function validateOption()
//	{
//	if((document.getElementById("chkEmailMe").checked))
//		{
//			return true;
//		}
//	alert("Please select option");
//	return false;
//	}
//	
//	
//	function validateAll()
//	{
//		if(validateEmail() && validatePassword() && validateOption() )
//			{
//				alert(" Login Successfull!!");
//					//open("Home.html");
//			}
//		else
//			{
//				event.preventDefault();
//			}
//	}
	
	
	
	
	
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
    <td colspan="2"><h1 align="center">User Login</h1></td>
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
    <td>
    <input type="checkbox" name="chkEmailMe" id="chkEmailMe" />
      <label for="chkEmailMe"></label>
      I Accept Terms and Conditions</td> <br>
	   
    <td>&nbsp;</td>
    
  </tr>
	
  
	
  <tr>
    <td height="71"><input type="submit" name="btnSubmit" id="btnSubmit" value="Login" ></td>
<!--	  onClick="validateAll()"-->
	<td><tr></tr></td>
         
    
  </tr>
  <?php
	if(isset($_POST["btnSubmit"]))
	{
		$username=$_POST["txtEmail"];
		$password=$_POST["txtPassword"];
		$valid=false;
		$Avalidate=false;
		if($username=='Admin' and $password=='Admin')
		{
			$Avalidate=true;
		}
		echo $Avalidate;
		if($Avalidate)
		{
				$_SESSION["username"]=$username;
			if(!isset($_SESSION["username"]))
			{
				echo "error";
			}
			else
			{
				header('Location:Admin.php');
			}
		
		}
		$con=mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="SELECT * FROM `user` WHERE `email`='".$username."' and `password` ='".$password."';";
		$result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$valid=true;
		}
		else
		{
			$valid=false;
		}
		if($valid)
		{
			$_SESSION["username"]=$username;
			if(!isset($_SESSION["username"]))
			{
				echo "error";
			}
			else
			{
				header('Location:Home.html');
			}
		
		}
		else
		{
			echo "Your password or user name is not correct. Please try again.";
		}
	}
	?>
</table>
</form>
	
<center>
	<a href="Register.php">Register Here !</a>
</center>
 
	
<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>
</body>
</html>
