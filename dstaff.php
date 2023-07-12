<?php
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))){
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="teama.css">
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
      <div class="sales-boxes">
        
    <form method="POST">
      <h1>Delete Staff</h1>
      <label for="name">Staff ID:</label>
      <input type="text" name="sid"  placeholder="Enter staff ID to be delete" required/><br><br>

      <label for="email">Name:</label>
      <input type="text" name="sname" placeholder="Enter staff name to be delete" required/><br><br>

      <input type="submit" value="Delete Staff" name="submit">
        <br>
        <br>
       <td>Go back to staff page click <a href="team.php">here.</a></td>
    </form>
      </div>
    </div>
  </section>



</body>
</html>

<?php
        function button1()
        {
            $Sname = $_POST['sname'];
            $Sid = $_POST['sid'];
            
            include 'database.php';
            
            $sql = "UPDATE staff SET ST_status = 'RS' WHERE ST_ID = '".$Sid."'";
            if ($conn->query($sql) === TRUE) 
            {
              echo '<script>alert("New record created successfully")</script>';
            } 
            else
            {
              echo "Error";
            }   
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