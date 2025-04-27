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
<title>Shop Page</title>
<link rel="stylesheet" type="text/css" href="Shop.css">
</head>

<body>

	
<header>
    <a href="#"><img src="Images/332908969_3157164351095892_8198187503957028333_n.jpg" class="logo" alt=""></a>
  

  <div>
    <ul id="navbar">
      <li><a href="Admin.php">Home</a></li>
      
	  
    </ul>
  </div>
</header>
	
<section id="products" class="section-1">
	<h2>Our Products</h2>
	<div class="pro-container">
		<?php
				
				$con = mysqli_connect("localhost","root","","test");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
				 
				$sql= "SELECT * FROM `product`" ;
				
				$result = (mysqli_query($con,$sql));
				
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result))
					{	
						
				echo "
				
				<div class='pro'>
		<img src='".$row["Path"]."'>
		<dev class='des'>
		<h5>".$row["Name"]."</h5>
		<h4>".$row["Price"]."</h4>
		<td width='46'><a href='Updatestore.php?id=".$row["id"]."'>Edit</a></td>
                <td width='45'><a href='DeleteStore.php?id=".$row["id"]."'>Delete </a></td>
		</dev>
		</div> " ;
					}
				}
				?>
	
		
		</div>
	
	<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<a href="Addstore.php">
		<button type="submit" name="btnsubmit" id="subbtn" >Addstore</button>
	    </a>
	
	</section>
	
	
<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>
	
</body>
</html>
