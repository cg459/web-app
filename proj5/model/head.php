<?php
    require('PDObject.php');
    include '../SignIn/login.php';
    $func = "SELECT * FROM accounts where email = :username";
    $username = $_POST["loginName"];
    
    $statement6 = $db->prepare($func);
    $statement6->bindValue('!', $username);
    $statement6->execute();
    $statement7 = $statement4->fetchall();
    $name4 =$statement7[0][fname];
    
?>
