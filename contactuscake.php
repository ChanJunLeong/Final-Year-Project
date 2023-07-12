<?php
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="contactus9.css"/>
<link rel="stylesheet" href="customerview1.css"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
    
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    h1{
	text-align:center;
	padding-top: 20px;
	font-family: 'Kanit', sans-serif;
    }

    h3{
        font-size:23px;
    }

    .name{
        text-decoration:none;
        color:black;
    }

    .grid-container{
        padding:50px;
        display:grid;
        grid-gap:40px;
        grid-template-columns:repeat(2, 1fr);
        overflow:auto;
    }

    .col{
        background-color: #D7DBDD;
        padding:30px;
        border-radius:15px;
        width:60%;
        transition: transform 0.4s;
    }

    .col:hover{
        transform: scale(1.1);
    }

    .content{
        text-align:center;
    }

    img{
        display:block;
        width:80%;
        max-width:100%;
        border-radius:15px;
    }

    .price{
        padding:13px 0;
        font-size:20px;
    }

    .checked{
        color: yellow;
    }

    .buy{
        background-color:#EBF1F7;
        border-radius: 10px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size:20px;
        padding:10px;
        text-decoration:none;
        color:black;
    }

    .buy:hover{
        cursor: pointer;
        background-color:#5D6D7E;
        color:white;
    }

    .star{
        padding:10px;
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
    .tms
    {
        width: 900px;
        height: 50px;
        margin-top: 27px;
    }    
    .dms
    {
        width: 900px;
        height: 200px;
    }
    .btnsm
    {
        margin-top: 20px;
        width: 200px;
        height: 50px;
        background-color:azure;
    }  
    .btnsm:hover
    {
        background-color:antiquewhite;
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
	
	<div class="contactus">
		<div class="title">
			<h1>Contact Us</h1>
		</div>
		<div class="box">
		<!------------info box--------->
			<div class="contact info">
				<h3>Contact Info</h3>
				<div class="infobox">
					<div>
						<span><ion-icon name="location-outline"></ion-icon></span>
						<p>177, Jalan Rakyat,86600 Paloh, Johor<br>MALAYSIA</p>
					</div>
					
					<div>
						<span><ion-icon name="mail-outline"></ion-icon></span>
						<a href="mailto:ninjasports@gmail.com">sweetmolydessert@gmail.com</a>
					</div>
					
					<div>
						<span><ion-icon name="call-outline"></ion-icon></span>
						<a href="tel:+60 012-619 0288">+60 12-619 0288</a>
					</div>
					
					<div>
						<span><ion-icon name="hourglass-outline"></ion-icon></span>
						<p>Operating hours : <br>10:00am - 6:00pm, Mon - Sun<p>
					</div>
				</div>
			</div>
			
		<!------------Map-------------->
		</div>
        <div class="box">
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.896545293284!2d103.19415060561798!3d2.192860299096349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d0163816798cc5%3A0x5c50b9c35fc61d28!2sJalan%20Rakyat%2C%20Kampung%20Muhibbah%2C%2085400%20Paloh%2C%20Johor!5e0!3m2!1sen!2smy!4v1682448130743!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
        <div class="inputff">
            <form method="post">
                <textarea placeholder="Title of this Message" name="tm" class="tms" maxlength="50"></textarea>
                <textarea placeholder="Message for admin" name="m" class="dms" maxlength="500"></textarea>
                <br>
                <input type="submit" name="submit2" value="Send Message" class="btnsm">
            </form>
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
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
        function button1()
        {
            $TM = $_POST['tm'];
            $M = $_POST['m'];
    
            
            include 'database.php';
            
            $sql = "INSERT INTO msg1 (MB_ID, MS_title, MS_detail) VALUES ('".$_SESSION["UID"]."', '".$TM."', '".$M."')";
            if ($conn->query($sql) === TRUE) 
            {
              echo '<script>alert("New record created successfully")</script>';
            } 
            else
            {
              echo "Error";
            }   
        }
        if(array_key_exists('submit2', $_POST)) 
        {
            button1();
        }
    }
    else
    {
        echo "No session exists or session has expired. Please
        log in again.<br>";
        echo "<a href=login%20page.php> Login </a>";
    }
?>