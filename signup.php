<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    <body>
        <div class="backg">
            <div class="form">
                <h1>Sign Up</h1>
                <form class="sinput" name="input" method="post">
                    <input type="text" class="input-field" name="Uname" placeholder="Username"  required/>
                    <input type="email" class="input-field" name="mail" placeholder="Gmail" required/>     
                    <input type="text" class ="input-field" name="phonenum" placeholder="Phone number" required/> <input type="text" class="input-field" name="address" placeholder="Address" required/>    
                    <input type="password" class="input-field" name="pass1" placeholder="Password" required/>
                    <input type="submit" value="Submit" name="submit" class="sbtn"/>
                    <td>Go back login page click <a href="login%20page.php">here.</a></td>
                </form>
            </div>
        </div>
    </body>
</html>

<?php

    if(array_key_exists('submit', $_POST)) 
    {
        button1();
    }
    function button1()
    {
        $Mname = $_POST['Uname'];
        $Memail = $_POST['mail'];
        $Mphonum = $_POST['phonenum'];
        $Maddress = $_POST['address'];
        $Mpass = $_POST['pass1'];
        
       include 'database.php';

        $sql = "INSERT INTO member (MB_Name, MB_Email, MB_Password, MB_Phone_number, MB_Address)
        VALUES ('".$Mname."','".$Memail."','".$Mpass."','".$Mphonum."','".$Maddress."')";

        if ($conn->query($sql) === TRUE) 
        {
          echo '<script>alert("New record created successfully")</script>';
        } 
        else
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }
?>