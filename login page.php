<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    <body>
        <div class="backg">
            <div class="form">
                <form class="input" name="input" method="post">
                <h1>Login In</h1>
                <p>
                    Account:
                    <input type="radio" id="Uaccount1" name="position" value="1"/>Admin
                    <input type="radio" id="Uaccount2" name="position" value="2"/>Member
                </p>
                    <input type="Email" class="input-field" name="Uname2" placeholder="Email" required/>
                    <input type="password" class="input-field" name="pass2" placeholder="Password" required/>
                    <input type="submit" value="submit" name="submit" class="submit-btn"/>
                    <td>Don`t have Account? <a href="signup.php">Sign Up</a> now</td>
                    <p id="demo"></p>
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
        $userID = $_POST['Uname2'];
        $userPwd = $_POST['pass2'];
        $position = $_POST['position'];

        include 'database.php';

        if($position == "")
        {
            echo '<script>alert("Plesea choose the account type")</script>';
        }
        if($position == 1)
        {
            $queryCheck = "select * from staff where ST_Email = '".$userID."'";
            $resultCheck = $conn->query($queryCheck);
            if ($resultCheck->num_rows == 0) 
            {
                echo '<script>alert("Email does not exists")</script>';
            }
            else
            {
                $row = $resultCheck->fetch_assoc();
                if($row["ST_Password"] == $userPwd ) 
                {
                    session_start();
                    $_SESSION["UID"] = $row['ST_ID'] ;
                    header("Location:orderlist.php");
                } 
                else 
                {   
                    echo '<script>alert("Password is wrong")</script>';
                }
            }
        }
        if($position == 2)
        {
            $queryCheck = "select * from member where MB_Email = '".$userID."'";
            $resultCheck = $conn->query($queryCheck);
            if ($resultCheck->num_rows == 0) 
            {
                echo '<script>alert("Email does not exists")</script>';
            }
            else
            {
                $row = $resultCheck->fetch_assoc();
                if($row["MB_Password"] == $userPwd ) 
                {
                    session_start();
                    $_SESSION["UID"] = $row['MB_ID'] ;
                    header("Location:main.php");
                } 
                else 
                {   
                    echo '<script>alert("Password is wrong")</script>';
                }
            }
        }
    }
?>