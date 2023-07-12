<?php
    $date = date("Y-m-d");
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin page2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        .halo
          {
              background-color: lightseagreen;
              text-align: center;
              width: 300px;
              border-radius: 10px;
              margin-left: 430px;
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
          <a href="orderlist.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Order List</span>
          </a>
        </li>
        <li>
          <a href="daily.php" class="active">
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
        <span class="dashboard">Daily Report</span>
      </div>
      <?php
            include 'database.php';
            $sqle = "SELECT ST_Name FROM staff WHERE ST_ID = '".$_SESSION["UID"]."'";
            $result8 = mysqli_query($conn, $sqle);
            $result8Check = mysqli_num_rows($result8);
            $row = $result8->fetch_assoc();
          ?>
      <div class="profile-details">
        <span class="admin_name"><?php echo $row["ST_Name"]; ?></span>
      </div>
    </nav>

   

      <div class="home-content">
      <div class="overview-boxes">
        <div class="">
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Customer Purchase Today</div>

    <br><table>
      <tr>
        <th>Customer Name</th>
        <th>Product Purchased</th>
        <th>Quantity</th>
        <th>Total Price</th>
      </tr>
      <?php
            include 'database.php';
            $sqle = "SELECT member.MB_Name, cake.CK_Name, purchase.quantity, purchase.total_amount FROM purchase JOIN cake ON purchase.CK_ID = cake.CK_ID JOIN member ON purchase.MB_ID = member.MB_ID WHERE purchase.buy_date = '".$date."'";
        
            $result8 = mysqli_query($conn, $sqle);
            $result8Check = mysqli_num_rows($result8);
            $tpricec = 0;
            $tpc=0;
            while($row = $result8->fetch_assoc())
            {
                $tpricec = $tpricec + $row['total_amount'];
                $tpc = $tpc + $row['quantity'];
      ?>
      <tr>
        <td><?php echo $row["MB_Name"];?></td>
        <td><?php echo $row["CK_Name"];?></td>
        <td><?php echo $row["quantity"];?></td>
        <td>RM<?php echo $row["total_amount"];?></td>
      </tr>
        <?php
            }
        ?>
        <?php
            include 'database.php';
            $sql9 = "SELECT member.MB_Name, cookies.Cok_Name, purchase.quantity, purchase.total_amount FROM purchase JOIN cookies ON purchase.Cok_ID = cookies.Cok_ID JOIN member ON purchase.MB_ID = member.MB_ID WHERE purchase.buy_date = '".$date."'";
        
            $result9 = mysqli_query($conn, $sql9);
            $result9Check = mysqli_num_rows($result9);
            $tpricecok = 0;
            $tpcok=0;
            while($row = $result9->fetch_assoc())
            {
                $tpricecok = $tpricecok + $row['total_amount'];
                $tpcok = $tpcok + $row['quantity'];
      ?>
      <tr>
        <td><?php echo $row["MB_Name"];?></td>
        <td><?php echo $row["Cok_Name"];?></td>
        <td><?php echo $row["quantity"];?></td>
        <td>RM<?php echo $row["total_amount"];?></td>
      </tr>
        <?php
            }
        ?>
                <?php
            include 'database.php';
            $sql99 = "SELECT member.MB_Name, dessert.Dst_Name, purchase.quantity, purchase.total_amount FROM purchase JOIN dessert ON purchase.Dst_ID = dessert.Dst_ID JOIN member ON purchase.MB_ID = member.MB_ID WHERE purchase.buy_date = '".$date."'";
        
            $result99 = mysqli_query($conn, $sql99);
            $result99Check = mysqli_num_rows($result99);
            $tpriced = 0;
            $tpd=0;
            while($row = $result99->fetch_assoc())
            {
                $tpriced = $tpriced + $row['total_amount'];
                $tpd = $tpd + $row['quantity'];
      ?>
      <tr>
        <td><?php echo $row["MB_Name"];?></td>
        <td><?php echo $row["Dst_Name"];?></td>
        <td><?php echo $row["quantity"];?></td>
        <td>RM<?php echo $row["total_amount"];?></td>
      </tr>
        <?php
            }
            $ttprice = $tpriced + $tpricecok +$tpricec;
            $ttp = $tpd + $tpcok + $tpc;
        ?>
    </table>
            <br>
            <div class="halo">
                <p >Today's Income: RM<?php echo $ttprice?> </p>
                <p >Today's Sales Quantity: <?php echo $ttp?> </p>
            </div>
        </div>
   
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
}
else
{
    echo "No session exists or session has expired. Please
    log in again.<br>";
    echo "<a href=login%20page.php> Login </a>";
}
?>