<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet">
<?php require("../SignIn/login.php"); ?>
</head>
<body>
    <div class="welcome">
        <div class="title">
        <?php
            if(isset($_SESSION['uemail']))
            {
                echo '<p class="login-status">You are logged in!</p>';
            }
            else{
                echo '<p class="login-status"> You are not logged in!</p>';
            }
            ?>
        </div>
    </div>

</body>
</html>
