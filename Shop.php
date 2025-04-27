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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	
<header>
    <a href="#"><img src="Images/332908969_3157164351095892_8198187503957028333_n.jpg" class="logo" alt=""></a>
  

  <div>
    <ul id="navbar">
      <li><a href="Home.html">Home</a></li>
      <li><a href="Shop.php">Shop</a></li>
	  <li><a href="Profile.php">Profile</a></li>
      <li><a href="Cart.php"><img src="Images/cart.png"></a></li>
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
                <p><a href='Shop.php?id=".$row['id']."'><button type='submit' name='btnsubmit'  ><i class='fa fa-cart-arrow-down' aria-hidden='true'></i>Add to Cart</button></a></p>
             </dev>
		</div>
               " ;
					}
				}
				?>
			<?php
			
                $sql="SELECT * FROM `product` WHERE `id`='".$_GET['id']."'";
		

                $results=mysqli_query($con,$sql);
                    if(mysqli_num_rows($results)>0) {
                $row = mysqli_fetch_assoc($results);
                        $sql = "INSERT INTO `cart` (`id`, `Name`,`Price`,`email`,`path`) VALUES (NULL,'".$row["Name"]."', '".$row["Price"]."','".$_SESSION["username"]."','".$row["Path"]."');";
                        if(mysqli_query($con, $sql))
                        {
                            
                           header("Location:cart.php");

                        }else{
                            echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
                        }

					}
				

    ?>
		
		
	
		
		</div>
	
	</section>
	
<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>
	
</body>
</html>
