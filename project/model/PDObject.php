<?php
    $servername =  "localhost";
    $username = "root";
    $password = "";
    $database = "test5";
    try{
        $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        echo "you connected to the database!". "<br>";
    }catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo "seems like their was an error";
    }
