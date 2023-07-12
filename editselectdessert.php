<?php
    ob_start();
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))&&($_SESSION["did"])){
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
      .image1
      {
        width: 300px; 
        height: 400px;
      }
      .ci
      {
        font-weight: bold;      
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
        $sql = "SELECT Flavor, Dst_name, Dst_price, Dst_type, Dst_description, Dst_img FROM dessert WHERE Dst_ID = '".$_SESSION["did"]."'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0)
        {
            $row = $result->fetch_assoc();
    ?>
    <form method="POST" enctype="multipart/form-data">
      <h1>Edit Dessert</h1>
      <label for="name">Name:</label>
      <input type="text" name="dname" value="<?php echo $row["Dst_name"];?>" required/><br><br>

      <label for="email">Flavor:</label>
      <input type="text" name="dflavor" value="<?php echo $row["Flavor"];?>" required/><br><br>

      <label for="password">Price:</label>
      <input type="text" name="dprice" value="<?php echo $row["Dst_price"];?>" required/><br><br>      
      
      <label for="password">Description:</label>
      <input type="text" name="ddes" value="<?php echo $row["Dst_description"];?>" required/><br><br>           
        
      <a class="ci">Current Image:</a><br>
      <img src="image/<?php echo $row["Dst_img"]; ?>" class="image1"/>
      <input type="file" name="cimg" accept= ".jpg, .jpeg, .png"/><br><br>
      <input type="hidden" name="Crimg" value="<?php echo $row["Dst_img"]; ?>"/>

        
      <a class="ci">Dessert Type:</a>
      <?php $F_type = $row["Dst_type"]?>
        <input type="radio" name="dtype" value="Tart" <?php if($F_type =="Tart") echo "checked"?> required><i>Tart<i>
        <input type="radio" name="dtype" value="Macaroon" <?php if($F_type =="Macaroon") echo "checked"?> required><i>Macaroon<i>



      <input type="submit" value="Edit" name="submit1">
        <br>
        <br>
       <td>Go back to Product page click <a href="productdessert.php">here.</a></td>
    </form>
    <?php
        }
        else
        {
            echo "error";
        }
    ?>
    </div>
    </div>
    </div>
    </section>
</body>
</html>
<?php
        function button1()
        {
            $Dname = $_POST['dname'];
            $Dprice = $_POST['dprice'];
            $Ddes = $_POST['ddes'];
            $Dimg = $_POST['Crimg'];
            $Dtype = $_POST['dtype'];
            $Dflavor = $_POST['dflavor'];
            
            if($_FILES["cimg"]["error"]===4)
            {
                include 'database.php';
            
                $sqle = "UPDATE dessert SET Dst_name='".$Dname."',Dst_price='".$Dprice."', Dst_description='".$Ddes."', Dst_img='".$Dimg."', Dst_type ='".$Dtype."', Flavor='".$Dflavor."' WHERE Dst_ID = '".$_SESSION["did"]."'";
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
            
                    $sqla = "UPDATE dessert SET Dst_name='".$Dname."',Dst_price='".$Dprice."', Dst_description='".$Ddes."', Dst_img='".$fileName."', Dst_type ='".$Dtype."', Flavor='".$Dflavor."' WHERE Dst_ID = '".$_SESSION["did"]."'";
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

