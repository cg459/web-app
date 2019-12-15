<?php
    $servername =  "localhost";
    $username = "root";
    $password = "";
    $database = "cc675";
    try{
        $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    }catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo "seems like their was an error";
    }
?>
