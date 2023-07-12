<?php
    ob_start();
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))&&($_SESSION["coid"])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teama.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      .tbox
      {
            width: 300px;
            height: 40px;
            margin-bottom: 30px;
      }
      .logo2 img
      {
          width:258px;
          height: 68px;
      }
      .ci
      {
        font-weight: bold;      
      }
      .image1
      {
        width: 300px; 
        height: 400px;
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


<div class="container">
    <?php
        include 'database.php';
        $sql = "SELECT Flavor, Cok_price, Cok_description, Cok_image, Cok_name FROM cookies WHERE Cok_ID = '".$_SESSION["coid"]."'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0)
        {
            $row = $result->fetch_assoc();
    ?>
    <form method="POST" enctype="multipart/form-data">
      <h1>Edit Cookies</h1>
      <label for="name">Name:</label>
      <input type="text" name="coname" value="<?php echo $row["Cok_name"];?>" required/><br><br>

      <label for="email">Flavor:</label>
      <input type="text" name="coflavor" value="<?php echo $row["Flavor"];?>" required/><br><br>

      <label for="password">Price:</label>
      <input type="text" name="coprice" value="<?php echo $row["Cok_price"];?>" required/><br><br>      
      
      <label for="password">Description:</label>
      <input type="text" name="codes" value="<?php echo $row["Cok_description"];?>" required/><br><br>           
        
      <a class="ci">Current Image:</a><br>
      <img src="image/<?php echo $row["Cok_image"]; ?>" class="image1"/>
      <input type="file" name="cimg" accept= ".jpg, .jpeg, .png"/><br><br>
      <input type="hidden" name="Crimg" value="<?php echo $row["Cok_image"]; ?>"/> 

        



      <input type="submit" value="Edit" name="submit1">
        <br>
        <br>
       <td>Go back to Product page click <a href="productcookies.php">here.</a></td>
    </form>
    <?php
        }
        else
        {
            echo "error";
        }
    ?>
      </div>

    </section>
</body>
</html>
<?php
        function button1()
        {
            $COname = $_POST['coname'];
            $COprice = $_POST['coprice'];
            $COdes = $_POST['codes'];
            $COimg = $_POST['Crimg'];
            $COflavor = $_POST['coflavor'];
        
            if($_FILES["cimg"]["error"]===4)
            {
                include 'database.php';
            
                $sqle = "UPDATE cookies SET Cok_name='".$COname."',Cok_price='".$COprice."', Cok_description='".$COdes."', Cok_image='".$COimg."', Flavor='".$COflavor."' WHERE Cok_ID = '".$_SESSION["coid"]."'";
                $conn->query($sqle);
            }
            else
            {
                $fileName = $_FILES["cimg"]["name"];
                $fileSize = $_FILES["cimg"]["size"];
                $tmpName = $_FILES["cimg"]["tmp_name"];
                
                $validImageEXtension = ['jpg', 'jpeg', 'png'];
                $imageEXtension = explode('.', $fileName);
                $imageEXtension = strtolower(end($imageEXtension));
                if(!in_array($imageEXtension, $validImageEXtension))
                {
                    echo '<script>alert("Invalid Image Extension")</script>';
                }
                else if($fileSize > 10000000)
                {
                    echo '<script>alert("Image size too big")</script>';
                }
                else
                {
                    include 'database.php';
            
                    $sqla = "UPDATE cookies SET Cok_name='".$COname."',Cok_price='".$COprice."', Cok_description='".$COdes."', Cok_image='".$fileName."', Flavor='".$COflavor."' WHERE Cok_ID = '".$_SESSION["coid"]."'";
                    $conn->query($sqla);
                    move_uploaded_file($tmpName, 'image/'.$fileName);  
                }
            }  
        }    
    if(array_key_exists('submit1', $_POST)) 
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
