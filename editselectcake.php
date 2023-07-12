<?php
    ob_start();
    session_start();
    //check if session exists
    if((isset ($_SESSION["UID"]))&&($_SESSION["cid"])){
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
        $sql = "SELECT Flavor, CK_price, CK_description, CK_type, CK_img, CK_Name, CK_Size FROM cake WHERE CK_ID = '".$_SESSION["cid"]."'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0)
        {
            $row = $result->fetch_assoc();
    ?>
    <form method="POST" enctype="multipart/form-data">
      <h1>Edit Cake</h1>
      <label for="name">Name:</label>
      <input type="text" name="cname" value="<?php echo $row["CK_Name"];?>" required/><br><br>

      <label for="email">Flavor:</label>
      <input type="text" name="cflavor" value="<?php echo $row["Flavor"];?>" required/><br><br>

      <label for="password">Price:</label>
      <input type="text" name="cprice" value="<?php echo $row["CK_price"];?>" required/><br><br>      
      
      <label for="password">Description:</label>
      <input type="text" name="cdes" value="<?php echo $row["CK_description"];?>" required/><br><br>           
        
      <a class="ci">Current Image:</a><br>
      <img src="image/<?php echo $row["CK_img"]; ?>" class="image1"/>
      <input type="file" name="cimg" accept= ".jpg, .jpeg, .png"/><br><br>
      <input type="hidden" name="Crimg" value="<?php echo $row["CK_img"]; ?>"/>   
        
      <label for="password">Cake Size:</label>
      <input type="text" name="csize" value="<?php echo $row["CK_Size"];?>" required/><br><br>
        
      <label for="password">Cake Type:</label>
      <?php $F_type = $row["CK_type"]?>
        <input type="radio" name="ctype" value="Birthday Cake" <?php if($F_type =="Birthday Cake") echo "checked"?> required><i>Birthday Cake<i>
        <input type="radio" name="ctype" value="Normal Cake" <?php if($F_type =="Normal Cake") echo "checked"?> required><i>Normal Cake<i>
        <input type="radio" name="ctype" value="Fruit Cake" <?php if($F_type =="Fruit Cake") echo "checked"?> required><i>Fruit Cake<i>


      <input type="submit" value="Edit" name="submit1">
        <br>
        <br>
       <td>Go back to Product page click <a href="product.php">here.</a></td>
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
            $Cname = $_POST['cname'];
            $Cprice = $_POST['cprice'];
            $Cdes = $_POST['cdes'];
            $Cimg = $_POST['Crimg'];
            $Csize = $_POST['csize'];
            $Ctype = $_POST['ctype'];
            $Cflavor = $_POST['cflavor'];
        
            if($_FILES["cimg"]["error"]===4)
            {
                include 'database.php';
            
                $sqle = "UPDATE cake SET CK_Name='".$Cname."',CK_price='".$Cprice."', CK_description='".$Cdes."', CK_img='".$Cimg."', CK_Size='".$Csize."', CK_type ='".$Ctype."', Flavor='".$Cflavor."' WHERE CK_ID = '".$_SESSION["cid"]."'";
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
            
                    $sqla = "UPDATE cake SET CK_Name='".$Cname."',CK_price='".$Cprice."', CK_description='".$Cdes."', CK_img='".$fileName."', CK_Size='".$Csize."', CK_type ='".$Ctype."', Flavor='".$Cflavor."' WHERE CK_ID = '".$_SESSION["cid"]."'";
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

