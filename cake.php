<?php
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Cakes</title>
<link rel="stylesheet" href="product.css"/>
<link rel="stylesheet" href="customerview1.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<style>
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
						<a href="dessertmacaroon.php">Macaroon</a> 
				</div>
			</div>
			
			<div class="drop">
				<button onclick="window.location.href = 'cookies.php';" class="dropbtn">Cookies</button>
			</div>
			
			<a class="cart">
			</a>
	</div>
	
<h1><i class="fa-solid fa-wand-magic-sparkles"></i> Cakes <i class="fa-solid fa-wand-magic-sparkles"></i></h1>
<div class="grid-container">

    <?php
        include 'database.php';
        $sql = "SELECT CK_Name, CK_img, CK_price, CK_ID, Flavor FROM cake WHERE CK_statu = 'Active'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck > 0)
        {
            while($row = $result->fetch_assoc())
            {
    ?>
	<div class="col">
		 <img src="image/<?php echo $row["CK_img"]; ?>"/>
		<div class="content">
                <a href="" class="name" name="halo"><h3><?php echo $row["CK_Name"]?></h3>
                <p><i><?php echo $row["Flavor"]?><br/></i></p>
                <div class="price">RM<?php echo $row["CK_price"]?></div>
                <div class="star">
                </div>
                    <br/>
                    <form method="post" name="x" action="eachcake.php">
                        <input type="hidden" name="y" value="<?php echo $row["CK_ID"]?>">
                        <input type="submit" class="buy" value="Order Now">
                        <a href=""></a>
                    </form>  
		</div>
	</div>
    <?php
            }
        }
        else
        {
            echo "error";
        }
    ?>
	
</div>

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