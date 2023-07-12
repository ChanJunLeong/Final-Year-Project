<?php
    $COID = $_POST['coid'];
    $COIMG = $_POST['coimg'];
    $CON = $_POST['coname'];
    $COP = $_POST['coprice'];
    $quan = $_POST['quanty'];
    $date = date("Y-m-d");
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="shoppingcart1.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<style>
*{
	box-sizing:border-box;
}
body, html{
    height: 100%;
}
body{
	background-color:white;
	margin:0px;
	padding:0px;
	font-family:Time New Roman;
}
h2{
	text-align: center;
	padding-top:40px;
}
.content{
	padding-top:10px;
	border:2px solid black; 
	width:500px; 
	box-shadow: 5px 5px grey;
	margin:auto; 
	padding-left:50px; 
	border-radius:10px;
}
.content img{
	width:75px;
}
input[type=submit]{
	background-color:#CCCCFF; 
	border-color:#CCCCFF;
}
input:hover[type=submit]{
	background-color:#A969F1; 
	color:white; 
	cursor:pointer;
}
.nav{
	width:1000px;
	box-shadow:2px 2px 30px rgba(0,0,0,0.07);
	position:absolute;
}
.header-bar{
	display:flex;
	text-align:center;
	position:relative;
	height:35px;
	background:white;
	white-space:nowrap;
	width:1520px;
	padding-left:1350px;
}

.header-bar a{
	color:black;
	font-size:0.8rem;
	float:left;
	padding:5px 10px;
	text-decoration:none;
}
.header-bar a:hover{
	text-decoration:underline;
	color:#808080;
}
.menubar{
	display:flex;
	background:#C4A484;
	overflow:hidden;
	height:95px;
}
.menubar a{
	padding-top:35px; 
	padding-left:325px;
	padding-right:150px;
	display:flex;
	font-size:16px;
	color:black;
	text-decoration:none;
	font-size:20px;
	font-weight:bold;
    margin:auto;
}
.logo img{
	
	width: 70px;
    margin-top: 26px;
    margin-left: 75px;
    margin-right: -10px;
}
.drop{
	display:inline-block;
	padding-top:26px;
	justify-content:space-between;
}
.drop .dropbtn{
	border:none;
	outline:none;
	color:black;
	background-color: inherit;
	font-family: inherit;
	font-size:20px;
	font-weight:bold;
	padding:35px;
	padding-top:25px; 
	padding-right:100px;
    white-space: nowrap;
}
.menubar a:hover, .drop:hover .dropbtn{
  color:#6b6e70;
}
.dropdown{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:-4px;
}
.dropdown a{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown a:hover{
  background-color: #eee;
}
.drop:hover .dropdown{
  display: block;
}
.cart img{
	width:25px;
	height:20px;
	margin-left:10px;

}
.cart img:hover{
	transform: scale(1.1);
}
.feedback p{
	margin-top:40px;
	text-align:center;
	line-height:22px;
	font-size:17px;
}
.feedback a{
	font-style:italic;
	text-decoration:none;
	color:red;
}
.footer{
	height:340px;
	width:1519px;
	background:#C4A484;
	color:black;
	font-size:14px;
	padding:20px 0px 0px 0px;
	margin-top:40px;
	display:flex;
	flex-wrap:wrap;
}

.container{
	display:flex;
	flex-direction:column;
	align-items:flex-start;
	padding-left:50px;
	font-size:1.1rem;
	line-height:28px;
}

.container img{
	width: 200px;
    height: 200px;
    margin-top: 10px;
}

.info{
	display:block;
	margin-left:8%;
	margin-top:3px;
	font-size:1.2rem;
	line-height:28px;
}
.products{
	display:flex;
	flex-direction:column;
	align-items:flex-start;
	font-size:1.2rem;
	padding-left:10%;

}

.follow{
	display:flex;
	flex-direction:column;
	align-items:flex-start;
	font-size:1.2rem;
	padding-left:6%;

}

.footer a{
	padding-top:10px;
	text-decoration:none;
	color:black;
	line-height:25px;
}

.footer h4{
	text-transform:uppercase;
	font-family:Arial, sans-serif;
	margin-bottom:10px;
}

.products a:hover, .follow a:hover{
	text-decoration:underline;
	color:#808080;
}

.copyright{
	display:inline-block;
	text-align:center;
	justify-content:center;
	align-items:center;
}

.copyright p{
	font-size:1rem;
	text-transform:capitalize;
	margin-left:700px;
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
			
			<a  class="cart"></a>
	</div>
<h2>Payment Details</h2>
<div class="shopping-cart">
    <!-- Title -->
    <div class="title">Shopping Bag</div>
 
    <!-- Product #1 -->
    <div class="item">
        <div class="image">
            <img src="image/<?php echo $COIMG; ?>" width="200" height="200"/>
        </div> 
        <div class="description">
            <h3>Product Details:</h3>
            <p style="color: darkcyan"><?php echo $CON;?></p>

            <p style="color: darkcyan">RM<?php echo $COP;?> per one</p>
        </div>
         <div class="quantity">
            <h3>Purchase Quantity:</h3>
            <p><?php echo $quan;?></p>            
            <h3>Total Amount:</h3>
            <p>RM<?php $TA = $COP*$quan; echo $TA;?></p>
        </div>
    </div>
</div>
<form method="POST" name="a" action="reciptcookies.php">
    <div class="content">
        <p><i class="fa-solid fa-user"></i> Full Name<br><input type="text" name="Name" size="50"  /></p>
        <p><i class="fa-solid fa-credit-card"></i> Credit Card Number<br><input type="text" name="num" size="30"  /><br>
        <img src="Image/mc.png"> <img src="Image/visa.png"> <img src="Image/pp.png"></p>
        <i class="fa-regular fa-calendar"></i> Expiry Date<br>
                    <select name="month">
                    <option value="January">Jan</option>
                    <option value="February">Feb</option>
                    <option value="March">Mar</option>
                    <option value="April">Apr</option>
                    <option value="May">May</option>
                    <option value="June">Jun</option>
                    <option value="July">Jul</option>
                    <option value="August">Aug</option>
                    <option value="September">Sept</option>
                    <option value="October">Oct</option>
                    <option value="November">Nov</option>
                    <option value="December">Dec</option>
                    </select>

                    <select name="year">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    </select>

        <p><i class="fa-solid fa-credit-card"></i> CVV / CVC<br><input type="text" name="cvv" maxlength="3" size="11"  /></p>
        <p><input type="submit" name="btnSubmit "value="Payment"/></p>
        
        <input type="hidden" name="coid" value="<?php echo $COID; ?>">
        <input type="hidden" name="coname" value="<?php echo $CON; ?>">
        <input type="hidden" name="totala" value="<?php echo $TA; ?>">
        <input type="hidden" name="qtt" value="<?php echo $quan; ?>">
        <input type="hidden" name="date" value="<?php echo $date; ?>">
    </div>
</form>
	
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
    if(array_key_exists('btnSubmit', $_POST)) 
    {
        button1();
    }
    function button1()
    {
        $CID1 = $_POST['cid'];
        $quan1 = "590";
        $TA1 = $_POST['totala'];
        $date1 = $_POST['date'];
        $dl = "Waiting for staff confirm the order";
        include 'database.php';
        $sql = "SELECT MB_ID, MB_Name FROM member WHERE MB_ID = '".$_SESSION["UID"]."'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        $sqla = "INSERT INTO purchase (CK_ID, MB_ID, quantity, total_amount, buy_date, DL_statu) VALUES('".$CID1."','".$_SESSION["UID"]."','".$quan1."','".$TA1."','".$date1."','".$dl."')"; 
    }
}
else
{
    echo "No session exists or session has expired. Please
    log in again.<br>";
    echo "<a href=login%20page.php> Login </a>";
}
?>