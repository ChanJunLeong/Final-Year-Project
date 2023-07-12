<?php
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>SweetMoly Dessert</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="main1.css"/>
<link rel="stylesheet" href="customerview1.css"/>
<style>
    .logo img 
    {
        display:block;
        max-width:100%;
        border-radius:15px;
        margin-top: 30px;
    }
    .nav
    {
        width:100%;
        box-shadow:2px 2px 30px rgba(0,0,0,0.07);
        position:absolute;
        text-align: right;
        background-color: white;
        height: 33px;
    }
    .nav a
    {
        color:black;
        font-size:20px;
        padding-right: 15px;
        text-decoration:none;
    }
    .nav a:hover
    {
        text-decoration:underline;
        color:#808080;
    }
</style>
</head>
<body>
	<div class="nav">
        <a href="login%20page.php">Log Out</a>
        <a href="profile.php">Account</a>
        <a href="plpage.php">Purchase List</a> 
	</div>
	
		<div class="menubar">
			<div class="logo">
				<img src="Image/logo.jpeg"/>
			</div>
			
			<a href="main.php">Home</a>
			<div class="drop">
				<button onclick="window.location.href = 'cake.php';" class="dropbtn">Cakes</button>
                <div class="dropdown">
						<a href="normalcakes.php">Normal Cake</a>
						<a href="fruitcake.php">Fruit Cake</a> 
						<a href="bircake.php">Birthday Cake</a> 
				</div>
			</div>
			
			<div class="drop">
				<button onclick="window.location.href = 'dessert.php';" class="dropbtn">Dessert</button>
                <div class="dropdown">
						<a href="desserttart.php">Tart</a>
						<a href="dessertmacaroon.php">Macaron</a> 
				</div>
			</div>
			
			<div class="drop">
				<button onclick="window.location.href = 'cookies.php';" class="dropbtn">Cookies</button>
			</div>
			
			<a class="cart">
			</a>
	</div>

	<!-----------------------------Slider---------------------------->
	<div class="slider slider-img">
		<!-------------------Slider text------------------------->
		<div class="slider-text">
			<div class="text">
				<!--<a href="#" class="slider-button">Order Now &#8594;</a>-->
			</div>
		</div>
	</div>
	<!----------------------fetured categories------------------------>
		<div class="content">
			<h2>Who are you shopping for?</h2>
		</div>
		<div class="categories">
			<div class="row">
				<div class="col-3">
					<img src="image/cake%20cake.jpeg"/>
					<button class="btn"><a href="cake.php">Shop Cakes</a></button>
						
				</div>
				<div class="col-3">
					<img src="image/photo dessert.jpeg"/>
					<button class="btn"><a href="dessert.php">Shop Desserts</a></button>
				</div>
				<div class="col-3">
					<img src="image/cookies.jpg"/>
					<button class="btn"><a href="cookies.php">Shop Cookies</a></button>
				</div>
			</div>
		</div>

	<!-------------------------featured product----------------------->
		<div class="featured">
			<h2>&#8594 Featured Product</h2>
			<div class="pro-container">
				<div class="pro">
					<a><img src="image/Cok2.jpg"/></a>
					<div class="description">
						<span>Coconut Cookies"</span>
						<p>Cookies</p>
					</div>
				</div>
				<div class="pro">
					<a><img src="image/MC2.jpg"/></a>
					<div class="description">
						<span>Salted Egg Macaroon</span>
						<p>Desserts</p>
					</div>
				</div>
				<div class="pro">
					<a><img src="image/TT3.jpg"></a>
					<div class="description">
						<span>Egg Tart</span>
						<p>Dessert</p>
					</div>
				</div>
				<div class="pro">
					<a><img src="image/BC-1.jpeg"></a>
					<div class="description">
						<span>Matcha Yuzu Honey Cheesecake</span>
						<p>Cakes</p>
					</div>
				</div>
			</div>
		</div>
	
	
	<!--------------------------Footer----------------------------->
		<div class="footer">
			<div class="container">
				<img src="Image/logo.jpeg">
			</div>
			<div class="info">
				<p><strong>Address : </strong><br>177, Jalan Rakyat,86600 Paloh, Johor, Malaysia</p>
				<p><strong>Phone : </strong><br>+60 12-619 0288</p>
				<p><strong>Hours : </strong><br>10:00 - 18:00, Mon - Sun</p>
			</div>
			<div class="products">
				<h4>Cakes</h4>
				<a href="cake.php">Cakes</a>
				<a href="dessert.php">Dessert</a>
				<a href="cookies.php">Cookies</a>
			</div>
			<div class="follow">
				<h4>Company Info</h4>
				<a href="About%20us%20page%20cake.php">About Us</a>
				<a href="contactuscake.php">Contact Us</a>
			</div>	
			
			<div class="copyright">
				<p>copyright &copy;Sweet_moly desserts</p>
			</div>
		</div>
</body>
</html>
<?php
}
else
{
    echo "No session exists or session has expired. Please
    log in again.<br>";
    echo "<a href=login%20page.php> Login </a>";
}
?>