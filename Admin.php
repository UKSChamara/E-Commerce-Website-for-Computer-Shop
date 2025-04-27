<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

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
<!--
      <li><a href="Home.html">Home</a></li>
      
	  <li><a href="profile.html">Profile</a></li>
      <li><a href="Cart.html"><img src="Images/cart.png"></a></li>
-->
    </ul>
  </div>
</header>
	

	
	<section id="products" class="section-1">
	
		<button class="more"> <a href="Addstore.php" style="color: aliceblue"> Add Products</a> </button>
		<button class="more"> <a href="Adminstore.php" style="color: aliceblue"> Store</a> </button>
		
		</section>
	
	
	
	<footer>&copy;2023 MI Computer Store. All rights reserved.</footer>
	
	
</body>
</html>
