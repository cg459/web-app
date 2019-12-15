
<?php
    require('../model/PDObject.php');
    require ('../model/buttonFunctions.php');
    session_start();
    
    $title = $_POST['title1'];
    $message = $_POST['message1'];
    $dd = $_POST['deadline1'];
    $email = $_SESSION['uemail'];
    $_SESSION['taskID3'];
    $id = $_SESSION["taskID3"];
    
    $gt = new bt();
    if(strlen($title) > 0 && strlen($dd) > 0 && strlen($message) ==  0 )
    {
        $gt->updatedd(  $_SESSION['taskID3'], $dd);
        $gt->updatetitle(  $_SESSION['taskID3'], $title);
    }
    elseif(strlen($title) > 0 && strlen($dd) ==  0 && strlen($message) > 0 )
    {
        $gt->updatetitle(  $_SESSION['taskID3'], $title);
        $gt->updateMessage( $_SESSION['taskID3'], $message);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) > 0 )
    {
        $gt->updateMessage( $_SESSION['taskID3'], $message);
        $gt->updatedd( $_SESSION['taskID3'], $dd);
    }
    elseif(strlen($title) == 0 && strlen($dd) == 0 && strlen($message) > 0 )
    {
        $gt->updateMessage( $_SESSION['taskID3'], $message);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) == 0 )
    {
        $gt->updatedd( $_SESSION['taskID3'] , $dd);
    }
    elseif(strlen($title) > 0 && strlen($dd) == 0 && strlen($message) == 0 )
    {
        $gt->updatetitle( $_SESSION['taskID3'], $title);
    }
    else{
        $gt->updateAll( $_SESSION['taskID3'], $dd, $message, $title);
    }
    header("Location: ../main/completed.php")
?>
