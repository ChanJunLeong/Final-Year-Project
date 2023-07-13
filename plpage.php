<?php
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
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
	width:100%;
	box-shadow:2px 2px 30px rgba(0,0,0,0.07);
	position:absolute;
    text-align: right;
    background-color: white;
    height: 33px;
}
.nav a{
	color:black;
	font-size:20px;
	padding-right: 15px;
	text-decoration:none;
}
.nav a:hover{
	text-decoration:underline;
	color:#808080;
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
.contain {
max-width: 800px;
margin: 0 auto;
padding: 20px;
background-color: lightcyan;
border-radius: 8px;
margin-top: 20px;
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

h1 {
margin-top: 0;
}


p {
margin: 0;
}

.info {
margin-bottom: 20px;
}

.bio {
font-style: italic;
}

.button2{
display: flex; 
    justify-content: center;        
}
.co
{
    margin: 10px;
    border: 2px solid black;
}
.co p
{
    padding-left: 10px;
    padding-bottom: 10px;
}

.btncom
{
    margin: 10px;
    margin-left: 320px;
    align-content: center;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    background-color: skyblue;
}
.btncom:hover
{
        background-color: darkcyan;
}
.changep
{
    margin-top: 50px;
    margin-left: 20px;
    margin-bottom: 20px;
    text-decoration: underline overline;
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
			
			<a  class="cart">
			</a>
	</div>
            <div class="buyh">
                <?php
                    include 'database.php';
                    $sql = "SELECT cake.CK_Name, purchase.total_amount, cake.CK_Type, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.DL_statu, purchase.buy_date FROM purchase JOIN cake ON purchase.CK_ID = cake.CK_ID WHERE MB_ID ='".$_SESSION["UID"]."'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0)
                    {
                ?>
                <div class="changep">
                    <h3>Cake Order</h3>
                </div>
                <?php
                        while($row = $result->fetch_assoc())
                        {
                ?>
                <div class="co">
                    <br>
                    <p><strong>  Product Name:</strong> <?php echo $row["CK_Name"]; ?></p>
                    <p><strong>  Product Type:</strong> <?php echo $row["CK_Type"]; ?></p>
                    <p><strong>  Quantity:</strong> <?php echo $row["quantity"]; ?></p>
                    <p><strong>  Total Amount:</strong> RM<?php echo $row["total_amount"]; ?></p>
                    <p><strong>  Purchase Date:</strong> <?php echo $row["buy_date"]; ?></p>
                    <p><strong>  Delivery status:</strong> <?php echo $row["DL_statu"]; ?></p>
                    <?php
                            if($row["customer_rating"]==""&&$row["customer_comment"]=="")
                            {
                                if($row["DL_statu"] !="Delivery complete")
                                {
                                    
                                }
                                else
                                {
                    ?>
                            <form action="addcomment.php" method="post">
                                <input type="submit" class="btncom" value="ADD COMMENT">
                                <input type="hidden" value="<?php echo $row["PH_ID"]; ?>" name="pid">
                            </form>          
                    <?php
                                }
                            }
                            else
                            {
                    ?>
                            <p><strong>  Rating:</strong> <?php echo $row["customer_rating"]; ?> star</p>
                            <p><strong>  Comment:</strong> <?php echo $row["customer_comment"]; ?></p>
                    <?php
                            }
                    ?>
                    
                </div>
                <?php
                        }
                    }
                    else
                    {
                    }
                ?>
                <?php
                    $sql = "SELECT cookies.Cok_name, purchase.total_amount, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.DL_statu, purchase.buy_date FROM purchase JOIN cookies ON purchase.Cok_ID = cookies.Cok_ID WHERE MB_ID ='".$_SESSION["UID"]."'";
                    $result1 = mysqli_query($conn, $sql);
                    $result1Check = mysqli_num_rows($result1);

                    if($result1Check > 0)
                    {
                ?>
                    <div class="changep">
                        <h3>Cookies Order</h3>
                    </div>
                <?php
                        while($row = $result1->fetch_assoc())
                        {
                ?>
                <div class="co">
                    <br>
                    <p><strong>  Product Name:</strong> <?php echo $row["Cok_name"]; ?></p>
                    <p><strong>  Product Type:</strong> Cookies</p>
                    <p><strong>  Quantity:</strong> <?php echo $row["quantity"]; ?></p>
                    <p><strong>  Total Amount:</strong> RM<?php echo $row["total_amount"]; ?></p>
                    <p><strong>  Purchase Date:</strong> <?php echo $row["buy_date"]; ?></p>
                    <p><strong>  Delivery status:</strong> <?php echo $row["DL_statu"]; ?></p>
                    <?php
                            if($row["customer_rating"]==""&&$row["customer_comment"]=="")
                            {
                                if($row["DL_statu"] !="Delivery complete")
                                {
                                    
                                }
                                else
                                {
                    ?>
                            <form action="addcommentcok.php" method="post">
                                <input type="submit" class="btncom" value="ADD COMMENT">
                                <input type="hidden" value="<?php echo $row["PH_ID"]; ?>" name="pid">
                            </form>          
                    <?php
                            }
                            }
                            else
                            {
                    ?>
                            <p><strong>  Rating:</strong> <?php echo $row["customer_rating"]; ?> star</p>
                            <p><strong>  Comment:</strong> <?php echo $row["customer_comment"]; ?></p>
                    <?php
                            }
                    ?>
                    
                </div>
                <?php
                        }
                    }
                    else
                    {
                    }
                ?>
                <?php
                    $sql = "SELECT dessert.Dst_name, dessert.Dst_type, purchase.total_amount, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.DL_statu, purchase.buy_date FROM purchase JOIN dessert ON purchase.Dst_ID = dessert.Dst_ID WHERE MB_ID ='".$_SESSION["UID"]."'";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);

                    if($result2Check > 0)
                    {
                ?>
                <div class="changep">
                    <h3>Dessert Order</h3>
                </div>
                <?php
                        while($row = $result2->fetch_assoc())
                        {
                ?>
                <div class="co">
                    <br>
                    <p><strong>  Product Name:</strong> <?php echo $row["Dst_name"]; ?></p>
                    <p><strong>  Product Type:</strong> <?php echo $row["Dst_type"]; ?></p>
                    <p><strong>  Quantity:</strong> <?php echo $row["quantity"]; ?></p>
                    <p><strong>  Total Amount:</strong> RM<?php echo $row["total_amount"]; ?></p>
                    <p><strong>  Purchase Date:</strong> <?php echo $row["buy_date"]; ?></p>
                    <p><strong>  Delivery status:</strong> <?php echo $row["DL_statu"]; ?></p>
                    <?php
                            if($row["customer_rating"]==""&&$row["customer_comment"]=="")
                            {
                                if($row["DL_statu"] !="Delivery complete")
                                {
                                    
                                }
                                else
                                {
                    ?>
                            <form action="addcommentdessert.php" method="post">
                                <input type="submit" class="btncom" value="ADD COMMENT">
                                <input type="hidden" value="<?php echo $row["PH_ID"]; ?>" name="pid">
                            </form>          
                    <?php
                                }
                            }
                            else
                            {
                    ?>
                            <p><strong>  Rating:</strong> <?php echo $row["customer_rating"]; ?> star</p>
                            <p><strong>  Comment:</strong> <?php echo $row["customer_comment"]; ?></p>
                    <?php
                            }
                    ?>
                    
                </div>
                <?php
                        }
                    }
                    else
                    {
                    }
                ?>
                <?php
                    $sqle = "SELECT * FROM purchase WHERE MB_ID ='".$_SESSION["UID"]."'";
                    $result3 = mysqli_query($conn, $sqle);
                    $result3Check = mysqli_num_rows($result3);

                    if($result3Check == 0)
                    {
                        echo "You haven't purchased anything yet";
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