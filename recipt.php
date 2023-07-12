<?php
    $CID = $_POST['cid'];
    $CN = $_POST['cname'];
    $TA = $_POST['totala'];
    $quan = $_POST['qtt'];
    $date = $_POST['date'];
    $dl = "Waiting for staff confirm the order";
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"])))
    {
        include 'database.php';
        $sql = "INSERT INTO purchase (CK_ID, MB_ID, quantity, total_amount, buy_date, DL_statu) VALUES('".$CID."','".$_SESSION["UID"]."','".$quan."','".$TA."','".$date."','".$dl."')";
        if ($conn->query($sql) == TRUE) 
        {
            echo '<script>alert("New record created successfull")</script>';
        } 
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
?>
<!DOCTYPE html>
<html>
<head>
<title>Recipt Page</title>
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
    .shopping-cart 
    {
      width: 400px;
      height: 370px;
      margin: 80px auto;
      background: #FFFFFF;
      box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
      border-radius: 6px;
      font-family: 'Roboto', sans-serif;
      display: flex;
      flex-direction: column;
      border:1px solid black;
    }
    .header-bar
    {
        display:flex;
        text-align:center;
        position:relative;
        height:35px;
        background:white;
        white-space:nowrap;
        width:1530px;
        padding-left:1350px;
    }

    .header-bar a{
        color:black;
        font-size:0.8rem;
        float:left;
        padding:3px 10px;
        text-decoration:none;
    }
    .header-bar a:hover{
        text-decoration:underline;
        color:#808080;
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
<div class="shopping-cart">
    <!-- Title -->
    <div class="title">Receipt</div>
 
    <!-- Product #1 -->
    <div class="item">
        <div class="description">
            <h3>Product Items:</h3>
            <p>Name:           <?php echo $CN;?></p>
            <p>Quantity:       <?php echo $quan;?></p>
            <p>Total Amount: RM<?php echo $TA;?></p><br>
        </div>
        <?php
            include 'database.php';
            $sql = "SELECT MB_ID, MB_Name FROM member WHERE MB_ID = '".$_SESSION["UID"]."'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
    
            if($resultCheck > 0)
            {
                $row = $result->fetch_assoc();
        ?>
         <div class="quantity">
            <h3>Customer detail:</h3>
            <p>Member ID: <?php $MBID=$row["MB_ID"]; echo $row["MB_ID"];?></p>            
            <p>Member Name: <?php echo $row["MB_Name"];?></p>            
        </div>
        <?php
        }
        else
        {
            echo "error";
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