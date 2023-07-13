<?php
    ob_start();
    $pid=$_POST['pid'];
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" href="product.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<style>
.page-btn{
	text-align:center; 
	margin-bottom:50px;
}
body{
	background-color:#FAEBD7;
}
button{
	padding:15px; 
	margin:20px; 
	font-size:16px;
}
button:hover{
	cursor:pointer; 
	background-color:#1F618D; 
	color:white;
}
.nav{
	width:auto;
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
	width:1519px;
	padding-left:1350px;
}
.header{
	display:block;
}
.header a{
	color:black;
	font-size:0.8rem;
	float:left;
	padding:5px 10px;
	text-decoration:none;
}
.header a:hover{
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
}
.logo img{
	width: 70px;
    margin-top: 35px;
    margin-left: 75px;
    margin-right: -10px;
}
.drop{
	display:inline-block;
	padding-top:26px;
	margin-left:-20px;
	margin-right:-20px;
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
	padding:25px;
	padding-top:8px; 
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
  margin-top:-28px;
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
	position:absolute;
	width:25px;
	height:20px;
	border-radius:0px;
	margin-left:-125px;
	margin-top:-10px;
}
.cart img:hover{
	transform: scale(1.1);
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
}
.container img{
	width: 200px;
    height: 200px;
    margin-top: 10px;
	margin-right:100px;

}
.info{
	display:block;
	padding-left:110px;
	margin-top:25px;
	font-size:1.2rem;
	line-height:25px;
}
.products{
	margin-top:25px;
	display:flex;
	flex-direction:column;
	font-size:1.2rem;
	padding-right:-10px;
	padding-left:30px;
}
.products a{
	margin:0;
}
.follow{
	margin-top:25px;
	display:flex;
	flex-direction:column;
	font-size:1.2rem;
	padding-right:130px;	
}
.follow a{
	margin:0;
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
	float:left;
	margin-left:510px;
}
.copyright p{
	font-size:1rem;
	text-transform:capitalize;
	padding-left:170px;
	margin-top:-30px;
}
form {
display: flex;
flex-direction: column;
max-width: 500px;
margin: 0 auto;
}
label {
margin-bottom: 10px;
font-weight: bold;
}

.input-field 
{
    padding: 10px;
    margin-bottom: 20px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    width: 400px;
}
    
.submit-btn {
background-color: lightcyan;
color: black;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 16px;
}
    
.submit-btn:hover {
background-color: lightpink;
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
.co
{
    width: 500px;
    margin: 10px;
    border: 2px solid black;
}
.co p
{
    padding-left: 10px;
    padding-bottom: 10px;
}
.buyh
{
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: lightcyan;
    border-radius: 8px;
    margin-top: 20px;
}
.dif
{
    text-align: left;  
    width: 400px;
    margin-top: 20px;
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
<div class="container">
    <?php
        include 'database.php';
        $sql = "SELECT MB_Name, MB_Email, MB_Password, MB_Phone_number, MB_Address FROM member WHERE MB_ID = '".$_SESSION["UID"]."'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0)
        {
            $row = $result->fetch_assoc();
    ?>
		<div class="form-container">
			<h1>Add Comment</h1>
            <div class="buyh">
                <?php
                    include 'database.php';
                    $sqla = "SELECT cake.CK_Name, purchase.total_amount, cake.CK_Type, purchase.customer_rating, purchase.customer_comment, purchase.quantity FROM purchase JOIN cake ON purchase.CK_ID = cake.CK_ID WHERE MB_ID ='".$_SESSION["UID"]."'";
                    $result1 = mysqli_query($conn, $sqla);
                    $result1Check = mysqli_num_rows($result1);

                    if($resultCheck > 0)
                    {
                        $row = $result1->fetch_assoc();
                ?>
                <div class="co">
                    <br>
                    <p><strong>  Product Name:</strong> <?php echo $row["CK_Name"]; ?></p>
                    <p><strong>  Cake Type:</strong> <?php echo $row["CK_Type"]; ?></p>
                    <p><strong>  Quantity:</strong> <?php echo $row["quantity"]; ?></p>
                    <p><strong>  Total Amount:</strong> RM<?php echo $row["total_amount"]; ?></p>
                </div>
                <?php
                    }
                    else
                    {
                        echo "error";
                    }
                ?>
            </div> 
			<form method="post">
                <div class="dif">
                    <p><strong>Rating: </strong></p>
                    <input type="number" style="width:80px; height:25px;" min="1" max="5" value="1" name="rating"/>
                </div>
                <br>
                
                <div>
                    <p><strong>Comment: </strong></p>
                    <input type="text" id="email" name="comment" class="input-field" required/>
                </div>
                
				<input type="submit" value="Save Changes" name="submit" class="submit-btn">
				<input type="hidden" value="<?php echo $pid ?>" name="pid">
                
			</form>
		</div>
    <?php
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
    function button1()
    {
        $pid=$_POST['pid'];
        $prating = $_POST['rating'];
        $pcomment = $_POST['comment'];
        
        include 'database.php';
         
        $sqla = "UPDATE purchase SET customer_rating ='".$prating."', customer_comment='".$pcomment."' WHERE PH_ID = '".$pid."'";
        $conn->query($sqla);
        header('Location:plpage.php');
    }
    if(array_key_exists('submit', $_POST)) 
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