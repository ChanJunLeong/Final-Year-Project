<?php
    ob_start();
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="adminpage1.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
          .co
          {
              margin: 10px;
              border: 2px solid black;
              box-shadow: 5px 5px;
              background-color: lightcyan;
              margin-bottom: 30px;
              border-radius: 10px;
          }
          .co p
          {
            padding-left: 10px;
            padding-bottom: 10px;
          }
          .com
          {
                margin: 10px;
                margin-left: 500px;
                align-content: center;
                text-align: center;
                padding: 10px;
                border-radius: 20px;
                background-color: skyblue;
                width: 300px;
          }
          .btncom
            {
                margin: 10px;
                margin-left: 570px;
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
            .changeo
            {
                margin-bottom: 50px;
            }           
            .changep
            {
                margin-top: 50px;
                margin-left: 20px;
                margin-bottom: 20px;
                text-decoration: underline overline;
            }
            .act
            {
                border-style: solid;
                padding: 10px;
                border-radius: 10px;
                margin: 10px;
                background-color: skyblue;
                text-decoration: none;
            }
            .act:hover
            {
                background-color: darkcyan;
            }
            .act1
            {
                border-style: solid;
                padding: 10px;
                border-radius: 10px;
                margin: 10px;
                text-decoration: none;
            }
            .act1:hover
            {
                background-color: darkcyan;
            }
            .logo2 img
            {
                width:258px;
                height: 68px;
            }
      </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo2">
      <img src="image/logo2.jpeg.jpg">
    </div>
      <ul class="nav-links">
        <li>
          <a href="orderlist.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Order List</span>
          </a>
        </li>
        <li>
          <a href="daily.php">
            <i class='bx bxs-report' ></i>
            <span class="links_name">Daily Report</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class='bx bxs-cake' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="team.php">
            <i class='bx bxs-user-check'></i>
            <span class="links_name">Staff</span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bxs-message'></i>
            <span class="links_name">Message</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login%20page.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
      <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Order List</span>
      </div>
          <?php
            include 'database.php';
            $sqle = "SELECT ST_Name FROM staff WHERE ST_ID = '".$_SESSION["UID"]."'";
            $result2 = mysqli_query($conn, $sqle);
            $result2Check = mysqli_num_rows($result2);
            $row = $result2->fetch_assoc();
          ?>
      <div class="profile-details">
        <span class="admin_name"><?php echo $row["ST_Name"]; ?></span>
      </div>
    </nav>
    <div class="home-content">
        <div class="sales-details">
            <div class="changeo">
                <a href="orderlist.php" class="act">
                    <span class="links_name">All Order List</span>
                </a>               
                <a href="myorder.php" class="act1">
                    <span class="links_name">Order to process</span>
                </a>
            </div>
            <div class="changep">
                    <h1>Cake Order</h1>
            </div>
            <?php
                include 'database.php';
                $sql = "SELECT cake.CK_Name, purchase.DL_statu, purchase.total_amount, cake.CK_Type, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.ST_ID, member.MB_ID, member.MB_Name, purchase.buy_date FROM purchase JOIN cake ON purchase.CK_ID = cake.CK_ID JOIN member ON purchase.MB_ID = member.MB_ID";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                $i=1;
                if($resultCheck > 0)
                {
                    while($row = $result->fetch_assoc())
                    { 
                ?>
                <div class="do">
                    <p><strong>Order <?php echo $i; $i++;?></strong></p>
                </div>
              <div class="co">
                  <p><strong>Cake Name: </strong><?php echo $row["CK_Name"]; ?></p>
                  <p><strong>Cake Type: </strong><?php echo $row["CK_Type"]; ?></p>
                  <p><strong>Purchase Member: </strong><?php echo $row["MB_Name"]; ?></p>
                  <p><strong>Member ID: </strong><?php echo $row["MB_ID"]; ?></p>
                  <p><strong>Purchase Quantity: </strong><?php echo $row["quantity"]; ?></p>
                  <p><strong>Purchase Date: </strong><?php echo $row["buy_date"]; ?></p>
                  <p><strong>Total Amount: </strong>RM<?php echo $row["total_amount"]; ?></p>
                  <?php
                        if($row["DL_statu"]=="Delivery complete")
                        {
                            
                  ?>
                  <p><strong>Customer Rating: </strong><?php echo $row["customer_rating"]; ?></p>
                  <p><strong>Customer Comment: </strong><?php echo $row["customer_comment"]; ?></p>
                  <?php
                        }
                  ?>
                  <p><strong>Delivery status: </strong><?php echo $row["DL_statu"]; ?></p>
                </div>
                <?php
                        if($row["ST_ID"]=="")
                        {
                ?>
                <form method="post">
                    <input type="submit" class="btncom" value="Comfirm Order" name="submitck">
                    <input type="hidden" value="On Proccessing" name="DL"> 
                    <input type="hidden" name="pid" value="<?php echo $row["PH_ID"]; ?>">
                </form>
                </div>
                <?php
                        }
                        else
                        {
                ?>
                <h3 class="com">Order has been Comfirm</h3>
                <?php
                        }
                ?>
                <?php
                    }
                }
                else
                {
                    echo "error11";
                }
                ?>
                <div class="changep">
                    <h1>Cookies Order</h1>
                </div>
                <?php
                include 'database.php';
                $sqll = "SELECT cookies.Cok_Name, purchase.total_amount, purchase.DL_statu, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.ST_ID, member.MB_ID, member.MB_Name, purchase.buy_date FROM purchase JOIN cookies ON purchase.Cok_ID = cookies.Cok_ID JOIN member ON purchase.MB_ID = member.MB_ID";
                $result1 = mysqli_query($conn, $sqll);
                $result1Check = mysqli_num_rows($result1);
                
                if($result1Check > 0)
                {
                    while($row = $result1->fetch_assoc())
                    { 
                ?>
                <div class="do">
                    <p><strong>Order <?php echo $i; $i++;?></strong></p>
                </div>
              <div class="co">
                  <p><strong>Cookies Name: </strong><?php echo $row["Cok_Name"]; ?></p>
                  <p><strong>Purchase Member: </strong><?php echo $row["MB_Name"]; ?></p>
                  <p><strong>Member ID: </strong><?php echo $row["MB_ID"]; ?></p>
                  <p><strong>Purchase Quantity: </strong><?php echo $row["quantity"]; ?></p>
                  <p><strong>Purchase Date: </strong><?php echo $row["buy_date"]; ?></p>
                  <p><strong>Total Amount: </strong>RM<?php echo $row["total_amount"]; ?></p>
                  <?php
                        if($row["DL_statu"]=="Delivery complete")
                        {
                            
                  ?>
                  <p><strong>Customer Rating: </strong><?php echo $row["customer_rating"]; ?></p>
                  <p><strong>Customer Comment: </strong><?php echo $row["customer_comment"]; ?></p>
                  <?php
                        }
                        else
                        {
                  ?>
                  <p><strong>Delivery status: </strong><?php echo $row["DL_statu"]; ?></p>
                  <?php
                        }
                  ?>
                </div>
                <?php
                        if($row["ST_ID"]=="")
                        {
                ?>
                <form method="post">
                    <input type="submit" class="btncom" value="Comfirm Order" name="submitcok">
                    <input type="hidden" value="On Proccessing" name="DL"> 
                    <input type="hidden" name="pid" value="<?php echo $row["PH_ID"]; ?>">
                </form>
                </div>
                <?php
                        }
                        else
                        {
                ?>
                <h3 class="com">Order has been Comfrim</h3>
                <?php
                        }
                ?>
                <?php
                    }
                }
                else
                {
                    echo "error11";
                }
                ?>
            <div class="changep">
                    <h1>Dessert Order</h1>
            </div>
            <?php
                include 'database.php';
                $sql = "SELECT dessert.Dst_Name, purchase.DL_statu, purchase.total_amount, dessert.Dst_Type, purchase.customer_rating, purchase.customer_comment, purchase.quantity, purchase.PH_ID, purchase.ST_ID, member.MB_ID, member.MB_Name, purchase.buy_date FROM purchase JOIN dessert ON purchase.Dst_ID = dessert.Dst_ID JOIN member ON purchase.MB_ID = member.MB_ID";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0)
                {
                    while($row = $result->fetch_assoc())
                    { 
                ?>
                <div class="do">
                    <p><strong>Order <?php echo $i; $i++;?></strong></p>
                </div>
              <div class="co">
                  <p><strong>Dessert Name: </strong><?php echo $row["Dst_Name"]; ?></p>
                  <p><strong>Dessert Type: </strong><?php echo $row["Dst_Type"]; ?></p>
                  <p><strong>Purchase Member: </strong><?php echo $row["MB_Name"]; ?></p>
                  <p><strong>Member ID: </strong><?php echo $row["MB_ID"]; ?></p>
                  <p><strong>Purchase Quantity: </strong><?php echo $row["quantity"]; ?></p>
                  <p><strong>Purchase Date: </strong><?php echo $row["buy_date"]; ?></p>
                  <p><strong>Total Amount: </strong>RM<?php echo $row["total_amount"]; ?></p>
                  <?php
                        if($row["DL_statu"]=="Delivery complete")
                        {
                            
                  ?>
                  <p><strong>Customer Rating: </strong><?php echo $row["customer_rating"]; ?></p>
                  <p><strong>Customer Comment: </strong><?php echo $row["customer_comment"]; ?></p>
                  <?php
                        }
                        else
                        {
                  ?>
                  <p><strong>Delivery status: </strong><?php echo $row["DL_statu"]; ?></p>
                  <?php
                        }
                  ?>
                </div>
                <?php
                        if($row["ST_ID"]=="")
                        {
                ?>
                <form method="post">
                    <input type="submit" class="btncom" value="Comfirm Order" name="submitd">
                    <input type="hidden" value="On Proccessing" name="DL"> 
                    <input type="hidden" name="pid" value="<?php echo $row["PH_ID"]; ?>">
                </form>
                </div>
                <?php
                        }
                        else
                        {
                ?>
                <h3 class="com">Order has been Comfrim</h3>
                <?php
                        }
                ?>
                <?php
                    }
                }
                else
                {
                    echo "error11";
                }
                ?>
    </div>
      </div>
    </section>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
<?php
    function button1()
    {
        $DL = $_POST['DL'];
        $pid=$_POST['pid'];
        include 'database.php';
         
        $sqla = "UPDATE purchase SET ST_ID='".$_SESSION["UID"]."', DL_statu='".$DL."' WHERE PH_ID = '".$pid."'";
        $conn->query($sqla);
    }
    if(array_key_exists('submitck', $_POST)) 
    {
        button1();
        header("Refresh:0");
    }    
    if(array_key_exists('submitcok', $_POST)) 
    {
        button1();
        header("Refresh:0");
    }    
    if(array_key_exists('submitd', $_POST)) 
    {
        button1();
        header("Refresh:0");
    }
}
else
{
    echo "No session exists or session has expired. Please
    log in again.<br>";
    echo "<a href=login%20page.php> Login </a>";
}
?>
