<?php
    
    require ('../model/buttonFunctions.php');
    require('../model/PDObject.php');
    session_start();
    $title = $_POST['title'];
    $dd = $_POST['deadline'];
    $message = $_POST['message'];
    $email = $_SESSION['uemail'];
    $time = date('Y-m-d H:i:s');
    $id = $_SESSION['id'];
    
    $statement = "INSERT INTO todos(owneremail, ownerid, duedate, message, createddate, Title) VALUES (:email, :id, :dd, :message, :cd, :title)";
    
    $statement2 = $db->prepare($statement);
    $statement2->bindValue(":email" , $email);
    $statement2->bindValue(":id", $id);
    $statement2->bindValue(":dd" , $dd);
    $statement2->bindValue(":message" , $message);
    $statement2->bindValue(":cd", $time);
    $statement2->bindValue(":title", $title);
    $statement2->execute();
    header("Location: ../main/index.php?success");
