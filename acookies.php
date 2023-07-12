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
      <div class="sales-boxes">
        
    <form method="POST" enctype="multipart/form-data">
      <h1>Add Cookies</h1>
      <label for="name">Name:</label>
      <input type="text" name="coname" required/><br><br>

      <label for="email">Flavor:</label>
      <input type="text" name="coflavor" required/><br><br>

      <label for="password">Price:</label>
      <input type="text" name="coprice" required/><br><br>      
      
      <label for="password">Description:</label>
      <input type="text" name="codes" required/><br><br>           
        
      <label for="password">Image:</label>
      <input type="file" name="coimg" id="password" accept= ".jpg, .jpeg, .png"/><br><br>      
        


      <input type="submit" value="Add Cookies" name="submit">
        <br>
        <br>
       <td>Go back to Product page click <a href="productcookies.php">here.</a></td>
    </form>
      </div>
    </div>
  </section>
</body>
</html>
<?php
        function button1()
        {
            $COname = $_POST['coname'];
            $COflavor = $_POST['coflavor'];
            $COprice = $_POST['coprice'];
            $COdes = $_POST['codes'];
            
            if($_FILES["coimg"]["error"]===4)
            {
                echo '<script>alert("Image does not exist")</script>';
            }
            else
            {
                $fileName = $_FILES["coimg"]["name"];
                $fileSize = $_FILES["coimg"]["size"];
                $tmpName = $_FILES["coimg"]["tmp_name"];
                
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
            
                    $sql = "INSERT INTO cookies (Cok_name, Cok_price, Cok_description, Cok_image, Flavor, Cok_statu) VALUES ('".$COname."', '".$COprice."', '".$COdes."', '".$fileName."', '".$COflavor."', 'Active')";
                    if ($conn->query($sql) === TRUE) 
                    {   
                        move_uploaded_file($tmpName, 'image/'.$fileName);
                        echo '<script>alert("New record created successfully")</script>';
                    } 
                    else
                    {
                        echo "Error";
                    }   
                }
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

