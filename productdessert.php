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
          <a href="orderlist.php">
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
          <a href="product.php" class="active">
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
        <span class="dashboard">Product</span>
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
        <div class="">
        </div>
        <div class="">
        </div>
        <div class="">
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="changeo">
                <a href="product.php" class="act1">
                    <span class="links_name">Cake</span>
                </a>               
                <a href="productdessert.php" class="act">
                    <span class="links_name">Dessert</span>
                </a>
                <a href="productcookies.php" class="act1">
                    <span class="links_name">Cookies</span>
                </a>
            </div>
          <div class="title">Dessert</div>
          <div class="sales-details">
              
             <ul class="details">
            <li class="topic">Dessert Name</li>
                <?php
                    include 'database.php';
                    $sql = "SELECT * FROM dessert WHERE Dst_statu = 'Active'";
                    $result7 = mysqli_query($conn, $sql);
                    $result7Check = mysqli_num_rows($result7);
                    while($row = $result7->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["Dst_name"]; ?></li>
                <?php
                    }
                ?>
          </ul>
            <ul class="details">
            <li class="topic">Dessert ID</li>
                <?php
                    include 'database.php';
                    $sqla = "SELECT * FROM dessert WHERE Dst_statu = 'Active'";
                    $result1 = mysqli_query($conn, $sqla);
                    $result1Check = mysqli_num_rows($result1);
                    while($row = $result1->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["Dst_ID"]; ?></li>
                <?php
                    }
                ?>
          </ul>
              <ul class="details">
                <li class="topic">Flavor</li>
                <?php
                    include 'database.php';
                    $sqlb = "SELECT * FROM dessert WHERE Dst_statu = 'Active'";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);
                    while($row = $result2->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["Flavor"]; ?></li>
                <?php
                    }
                ?>
            </ul>
            <ul class="details">
                <li class="topic">Dessert Type</li>
                <?php
                    include 'database.php';
                    $sqlb = "SELECT * FROM dessert WHERE Dst_statu = 'Active'";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);
                    while($row = $result2->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["Dst_type"]; ?></li>
                <?php
                    }
                ?>
            </ul>
            
            <ul class="details">
                <li class="topic">Dessert Price</li>
                <?php
                    include 'database.php';
                    $sqlb = "SELECT * FROM dessert";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);
                    while($row = $result2->fetch_assoc())
                    {
                ?>
            <li>RM<?php echo $row["Dst_price"]; ?></li>
                <?php
                    }
                ?>
            </ul>
          </div>
          <div class="button">
            <a href="adessert.php">Add Dessert</a> 
            <a href="edessert.php">Delete Dessert</a>
            <a href="editdessert.php">Edit Dessert</a>
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
