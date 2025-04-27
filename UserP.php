<?php session_start();
if(!isset($_SESSION["username"]))
{
	header("location:Profile.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UserP Page</title>

	<style>
	 body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
	min-height: 100vh;
    }

h1 {
	font-size: 50px;
	line-height: 64px;
	color: #000000;
}

h2 {
	font-size: 46px;
	line-height: 54px;
	color: #000000;
	text-decoration: underline;
}

h4 {
	font-size: 20px;
	color: #000000;
}

h6 {
	font-weight: 700;
	font-size: 12px;
}

p {
	font-size: 16px;
	color: #550204;
}

header {
      display: flex;
	  align-items: center;
		justify-content: space-between;
		padding: 10px 80px;
		background: linear-gradient(to right, #FD0004, #AFACAC);
		
    }
.logo {
	height: 60px; width: 60px;
}

#navbar {
	display: flex;
	align-items: center;
	justify-content: center;
	
	
}

#navbar li{
	list-style: none;
	padding: 0 20px;
}

#navbar li a {
	text-decoration: none;
	font-size: 16px;
	font-weight: 600;
	color: #000000;
}
#navbar li a:hover {
	color: #FF0004;
}

.section-1 {
	padding: 40px 80px;
}

		
#products {
	text-align: center;
		}
		
button.more {
	font-size: 14px;
	font-weight: 600;
	padding: 10px 20px;
	color: aliceblue;
	background-color: #FD0004;
	border-radius: 4px;
	border: none;
	cursor: pointer;
	
}
		

footer {
      background: linear-gradient(to right, #FD0004, #AFACAC);
      color: #fff;
      padding: 20px;
      text-align: center;
	position: sticky;
	top: 100%;
    }
		
		

		
	
	</style>

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

	

	
	<p>
	  <?php
	$con = mysqli_connect("localhost","root","","test");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
	$sql ="SELECT * FROM `user` WHERE `email` = '".$_SESSION["username"]."'"; 
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
</p>
<p>&nbsp;</p>
<table width="258" height="212" border="0" align="center">
  <tbody>
    <tr>
      <td width="211" align="center"><img src="Images/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" width="216" height="211" alt=""/></td>
    </tr>
  </tbody>
</table>
<table height="233" align="center">
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><h1 align="center" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #3B5C28;">My Profile</h1></td>
  </tr>
	
	<tr>
	<td width="146">Full Name</td>
	<td width="227"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["name"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Email</td>
	<td width="227"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["email"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Contact Number</td>
	<td width="227"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row["contact"];?>" readonly></td>
	</tr>
	
</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td width="227" align="center"><a href="Home.html"><button type="submit" name="btnsubmit" id="subbtn">Back</button></a></td>
    </tr>
  </tbody>
</table>

	<?php
		}
	mysqli_close($con);
		 ?>
	
	
	
<!--	<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>-->
	
	
</body>
</html>
