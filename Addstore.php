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
<title>AddStore</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
<form action="Addstore.php" method="post" enctype="multipart/form-data">
    <br class="container">
        <h1>Add Product</h1>

        <hr>
        <p>
        <label for="pName"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Product Name" name="txtProductName" id="txtProductName" required>

        <label for="image"><b>Image</b></label>
        <td><input type="file" name="imagefol" id="imagefol"  required></td>

        <label for="price" ></br>
          </br> 
          <b>Price</b></label>
        <input type="text" placeholder="Enter Price" name="txtPrice" id="txtPrice" required>

        <label for="chkPublish"><b>Publish</b></label>
  <input type="checkbox" name="chkPublish" id="chkPublish" />Publish this</p>
        
		 <?php
			  if(isset($_POST["btnSubmit"]))
			  {
				  $name =$_POST["txtProductName"];
				  $image ="uploads/".basename($_FILES["imagefol"]["name"]);
				  move_uploaded_file($_FILES["imagefol"]["tmp_name"],$image);
				  $price =$_POST["txtPrice"];
				  
				
				    
				  if(isset($_POST["chkPublish"]))
					  {$status=1;}
				  else
					  {$status=0;}
				 
				  $con = mysqli_connect("localhost","root","","test");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	

					$sql= "INSERT INTO `product`(`id`, `Email`, `Name`, `Price`, `Path`, `Post`) VALUES (NUll,'".$_SESSION["username"]."','".$name."','".$price."','".$image."','".$status."');";
				    
				  if(mysqli_query($con,$sql))
					{
						echo "file uploaded Sucessfully";
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
				 	header('Location:Adminstore.php.');
			  }
					
			  
			  
	  ?>
          
          
        </p>
		<a href="viweStore.php">
        <button type="submit" class="button" name="btnSubmit" id="btnSubmit">Add Product</button>
         <a href="Admin.php"><button type="button" class="button">Cancel</button></a>
        </a>
</div>
</form>
</script>
</body>
</html>