
<?php
    require('../model/PDObject.php');
    require ('../model/buttonFunctions.php');
    session_start();
    
    $title = $_POST['title'];
    $dd = $_POST['deadline'];
    $message = $_POST['message'];
    $email = $_SESSION['uemail'];
    $time = date('Y-m-d H:i:s');
    $id = $_SESSION['id'];
    
    $gt = new bt();
    if(strlen($title) > 0 && strlen($dd) > 0 && strlen($message) ==  0 )
    {
        $gt->updatedd($dd , $email);
        $gt->updatetitle( $title, $email);
    }
    elseif(strlen($title) > 0 && strlen($dd) ==  0 && strlen($message) > 0 )
    {
        $gt->updatetitle( $title, $email);
        $gt->updateMessage($message, $email);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) > 0 )
    {
        $gt->updateMessage($message, $email);
        $gt->updatedd($dd , $email);
    }
    elseif(strlen($title) == 0 && strlen($dd) == 0 && strlen($message) > 0 )
    {
        $gt->updateMessage($message, $email);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) == 0 )
    {
        $gt->updatedd($dd , $email);
    }
    elseif(strlen($title) > 0 && strlen($dd) == 0 && strlen($message) == 0 )
    {
        $gt->updatetitle( $title, $email);
    }
    else{
        $gt->updateAll($dd, $message, $title, $email)
    }
    header("Location: ../main/completed.php")
?>
