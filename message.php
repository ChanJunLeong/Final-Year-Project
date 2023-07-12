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
                margin-top: 10px;
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
          <a href="message.php" class="active">
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
        <span class="dashboard">Message</span>
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
            <div class="changep">
                <h1>Customer Message</h1>
            </div>
            <?php
                include 'database.php';
                $sql = "SELECT member.MB_Name, msg1.MS_title, msg1.MS_detail, member.MB_Phone_number, msg1.MS_ID, msg1.ST_ID FROM msg1 JOIN member ON msg1.MB_ID = member.MB_ID";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0)
                {
                    $i=1;
                    while($row = $result->fetch_assoc())
                    { 
                ?>
                <div class="do">
                    <p><strong>Message <?php echo $i; $i++;?></strong></p>
                </div>
              <div class="co">
                  <p><strong>Custome Name: </strong><?php echo $row["MB_Name"]; ?></p>
                  <p><strong>Custome Phone Number: </strong><?php echo $row["MB_Phone_number"]; ?></p>
                  <p><strong>Message Title: </strong></p>
                  <p><?php echo $row["MS_title"]; ?></p>
                  <p><strong>Message: </strong></p>
                  <p><?php echo $row["MS_detail"]; ?></p>
                </div>
                <?php
                        if($row["ST_ID"]=="")
                        {
                ?>
                <form method="post">
                    <input type="submit" class="btncom" value="Comfirm Message" name="submitd"> 
                    <input type="hidden" name="sid" value="<?php echo $_SESSION["UID"]; ?>">
                    <input type="hidden" name="msid" value="<?php echo $row["MS_ID"] ?>">
                </form>
                <?php
                        }
                        else
                        {
                ?>
                <h3 class="com">Message has been Comfirm</h3>
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
        $MSid = $_POST['msid'];
        $Sid = $_POST['sid'];
        include 'database.php';
         
        $sqla = "UPDATE msg1 SET ST_ID='".$Sid."' WHERE MS_ID = '".$MSid."'";
        $conn->query($sqla);
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
