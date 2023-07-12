<?php
    $ID=$_POST['y'];
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html>
<head>
<title>Cakes</title>
<link rel="stylesheet" href="customerview1.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

    .buy
    {
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
    .container{
        margin:auto;
        padding-right:25px;
        max-width:1000px;
    }

    .row{
        display:flex;
        justify-content:space-around;
    }

    .product{
        margin-top:60px;
    }
    button{
        padding:10px;
        border-radius:10px;
        background-color:#EBDEF0;
        border-color:#EBDEF0;
    }

    button:hover{
        cursor:pointer;
        background-color:#9B59B6;
        color:white;
    }

    button a:hover{
        color:white;
    }

    .checked{
        color:yellow;
        padding:15px 0;

    }

    .price{
        font-size:25px;
        padding:9px 0;
    }

    .detail{
        padding-top:20px;
        line-height:25px;
    }

    .title{
        font-family: 'Raleway', sans-serif;
        font-size:35px;
        font-weight:bold;
    }

    .title2{
        margin-bottom:10px;
    }

    .box{
        padding:20px 0;
    }

    button a, .cart{
        text-decoration:none;
        color: black;
    }

    .category{
        padding-bottom:20px;
        color:grey;
    }
    *
    {
        margin:0;
        padding:0;
        box-sizing:border-box;
        margin:auto;
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
    .content{
        text-align:center;
    }

    .logo img 
    {
        display:block;
        width:80%;
        max-width:100%;
        border-radius:15px;
    }
    .container img
    {
        display:block;
        width:80%;
        max-width:100%;
        border-radius:15px;
    }
    .proimg img
    {
        border-radius: 20px;
    }
    .price
    {
        padding:13px 0;
        font-size:20px;
    }
    .des
    {
        word-wrap: break-word;
        width: 800px;
    }
    .buyh
{
    margin: 0 auto;
    padding: 10px;
    background-color: lightcyan;
    border-radius: 8px;
    margin-top: 20px;
    width:1200px;
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
    .buyh p
    {
        text-align: center;
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
<div class="product">
	<div class="row">
        <?php
            include 'database.php';
            $sql = "SELECT Dst_name, Dst_img, Dst_price, Dst_ID, Flavor, Dst_description, Dst_type FROM dessert WHERE Dst_ID = $ID";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0)
            {
                $row = $result->fetch_assoc()
        ?>
        <div class="proimg">
            <img src="image/<?php echo $row["Dst_img"]; ?>" height="550" width="450" />
        </div>    
        <div class="col">
            <div class="category"><p>Home / Dessert / <?php echo $row["Dst_type"]; ?></p></div>
                <div class="title"><?php echo $row["Dst_name"]; ?></div><br><div class="title2">Flavor: <?php echo $row["Flavor"]; ?></div>
				<div class="price"><p>RM<?php echo $row["Dst_price"]; ?></p></div>
				<div class="detail">
                    <h3>Product Details <i class="fa-regular fa-clipboard"></i></h3>
                    <p class="des"><?php echo $row["Dst_description"]; ?></p>
                </div>
                <form method="POST" name="a" action="paymentdessert.php">
                    <div class="box">
                        <h3>Quantity <i class="fas fa-balance-scale"></i></h3>
                        <input type="hidden" name="did" value="<?php echo $row["Dst_ID"]; ?>">
                        <input type="hidden" name="dimg" value="<?php echo $row["Dst_img"]; ?>">
                        <input type="hidden" name="dname" value="<?php echo $row["Dst_name"]; ?>">
                        <input type="hidden" name="dprice" value="<?php echo $row["Dst_price"]; ?>">
                        <input type="number" style="width:80px; height:25px;" min="1" value="1" name="quanty"/>
                        <br><br><input type="submit" class="buy" value="Order Now">
                    </div>
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
    <div class="buyh">
                <?php
                    include 'database.php';
                    $sql = "SELECT customer_comment, customer_rating FROM purchase WHERE Dst_ID ='".$ID."'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);?>
                    <p><b>Comment</b></p>
                    <?php
                    if($resultCheck > 0)
                    {
                        
                        while($row = $result->fetch_assoc())
                        {
                    ?>
                    
                    <br>
                    <?php
                            if($row["customer_rating"]==""&&$row["customer_comment"]=="")
                            {
                    ?>
                    
                    
                    <?php
                            }
                            else
                            {
                    ?>
                    <div class="co">        
                            <p><strong>  Rating:</strong> <?php echo $row["customer_rating"]; ?> star</p>
                            <p><strong>  Comment:</strong> <?php echo $row["customer_comment"]; ?></p>
                    </div>
                    <?php
                            }
                    ?>
                    
                
                <?php
                        }
                    }
                    else
                    {
                    
                    }
                ?>
            </div>
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
				<a href="#">Dessert</a>
				<a href="#">Cookies</a>
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