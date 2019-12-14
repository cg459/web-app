<?php
    //start with error checking
    //most of the error checking was done in the js file
    //we are going to check if the email already exsit
    //if it does then we send an error message telling the user to go sign in
    require "PDObject.php";
    $email1 = $_POST['email'];
    $fname1 = $_POST['fname'];
    $lname1 = $_POST['lname'];
    $major = $_POST['major'];
    $college = $_POST['college'];
    $password = $_POST['password1'];


    $statement = "SELECT email FROM accounts where email = :email";
    $statement1 = $db->prepare($statement);
    $statement1->bindValue(':email', $email1, PDO::PARAM_STR);
    $statement1->execute();
    $statement2 = $statement1->fetchall();
    if (count($statement2) > 0 )
    {
        header("Location: ../SignUp/signup.php?error=nameTaken&fname".$fname1."&lname".$lname1."&phone".$phone1."&bday".$bday1."&gender".$gender1);
        echo "that email was already used for an account";

    }
    else{
        $statement4 = "INSERT INTO accounts (email, fname, lname, password, Major , College ) VALUES (:email, :fname, :lname, :password, :major, :college)";
        $statement5 = $db->prepare($statement4);
        $statement5->bindValue(':email', $email1, PDO::PARAM_STR);
        $statement5->bindValue(':fname', $fname1, PDO::PARAM_STR);
        $statement5->bindValue(':lname', $lname1, PDO::PARAM_STR);
        $statement5->bindValue(':password', $password, PDO::PARAM_STR);
        $statement5->bindValue(':major', $major, PDO::PARAM_STR);
        $statement5->bindValue(':college', $college, PDO::PARAM_STR);
        $statement5->execute();
        $statement5->closeCursor();
        header("Location: ../SignUp/signup.php?success");
    }
    
    
    
?>
