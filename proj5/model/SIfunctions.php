<?php
    require('PDObject.php');
    global $db;
    $username = $_POST["loginName"];
    $password = $_POST["password"];
    
    $statement3 = "SELECT email, password FROM accounts WHERE email = :username and password = :password1";
    $statement4 = $db->prepare($statement3);
    $statement4->bindValue(':username', $username);
    $statement4->bindValue(':password1', $password);
    $statement4->execute();
    $statement5 = $statement4->fetchall();
    $email4 = NULL;
    $pass4 = NULL;
         
    if(count($statement5)> 0)
    {
        $email4=$statement5[0]['email'];
        $pass4=$statement5[0]['password'];
    }
    else{
        header("Location: ../SignIn/login.php?error=accountError");
    }
    if($username == $email4 && $password == $pass4)
    {
        session_start();
        $_SESSION['uemail'] = $statement5[0]['email'];
        
        header("Location: ../main/index.php");
    }
    
    $func = "SELECT * FROM accounts WHERE email = :username";
    $username = $_POST["loginName"];
    
    $statement6 = $db->prepare($func);
    $statement6->bindValue(':username', $username);
    $statement6->execute();
    $statement7 = $statement6->fetchall();
    $name4 = $statement7[0][fname];
    $id7 = $statement7[0][id];
    $_SESSION['name'] = $name4;
    $_SESSION['id'] = $id7;
    
    $statement19 = "SELECT `id` FROM todos WHERE owneremail = :owneremail and ownerid = :numberid";
    $statement20 = $db->prepare($statement19);
    $statement20->bindValue(':username', $_SESSION['uemail']);
    $statement20->bindValue(':numberid', $_SESSION['id']);
    $statement20->execute();
    $statement21 = $statement20->fetchall();
    print_r($statement21);
    


    

    
    ?>
?>
