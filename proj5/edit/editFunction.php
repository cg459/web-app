
<?php
    require('../model/PDObject.php');
    require ('../model/buttonFunctions.php');
    session_start();
    
    $title = $_POST['title1'];
    $message = $_POST['message1'];
    $dd = $_POST['deadline1'];
    $id4 =  $_SESSION["taskID3"];
    
    $gt = new bt();
    if(strlen($title) > 0 && strlen($dd) > 0 && strlen($message) ==  0 )
    {
        $gt->updatedd( $id4 , $dd);
        $gt->updatetitle(  $id4, $title);
    }
    elseif(strlen($title) > 0 && strlen($dd) ==  0 && strlen($message) > 0 )
    {
        $gt->updatetitle(  $id4, $title);
        $gt->updateMessage( $id4, $message);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) > 0 )
    {
        $gt->updateMessage( $id4, $message);
        $gt->updatedd( $id4, $dd);
    }
    elseif(strlen($title) == 0 && strlen($dd) == 0 && strlen($message) > 0 )
    {
        $gt->updateMessage( $id4, $message);
    }
    elseif(strlen($title) == 0 && strlen($dd) > 0 && strlen($message) == 0 )
    {
        $gt->updatedd( $id4, $dd);
    }
    elseif(strlen($title) > 0 && strlen($dd) == 0 && strlen($message) == 0 )
    {
        $gt->updatetitle( $id4, $title);
    }
    else{
        $gt->updateAll( $id4, $dd, $message, $title);
    }
    header("Location: ../main/index.php")
?>
