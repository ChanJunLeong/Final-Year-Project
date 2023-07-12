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
          <a href="product.php">
            <i class='bx bxs-cake' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="team.php" class="active">
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
        <span class="dashboard">Staff</span>
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
          <div class="title">Team Member</div>
          <div class="sales-details">
             <ul class="details">
            <li class="topic">Name</li>
                <?php
                    include 'database.php';
                    $sql = "SELECT * FROM staff WHERE ST_status = 'Active'";
                    $result7 = mysqli_query($conn, $sql);
                    $result7Check = mysqli_num_rows($result7);
                    while($row = $result7->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["ST_Name"]; ?></li>
                <?php
                    }
                ?>
          </ul>
            <ul class="details">
            <li class="topic">ID</li>
                <?php
                    include 'database.php';
                    $sqla = "SELECT * FROM staff WHERE ST_status = 'Active'";
                    $result1 = mysqli_query($conn, $sqla);
                    $result1Check = mysqli_num_rows($result1);
                    while($row = $result1->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["ST_ID"]; ?></li>
                <?php
                    }
                ?>
          </ul>
            <ul class="details">
                <li class="topic">Phone Number</li>
                <?php
                    include 'database.php';
                    $sqlb = "SELECT * FROM staff WHERE ST_status = 'Active'";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);
                    while($row = $result2->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["ST_Phone_num"]; ?></li>
                <?php
                    }
                ?>
            </ul>
            <ul class="details">
                <li class="topic">Email</li>
                <?php
                    include 'database.php';
                    $sqlb = "SELECT * FROM staff WHERE ST_status = 'Active'";
                    $result2 = mysqli_query($conn, $sql);
                    $result2Check = mysqli_num_rows($result2);
                    while($row = $result2->fetch_assoc())
                    {
                ?>
            <li><?php echo $row["ST_Email"]; ?></li>
                <?php
                    }
                ?>
            </ul>
          </div>
          <div class="button">
            <a href="addstaff.php">Add Member</a> 
            <a href="dstaff.php">Delete Member</a>
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
