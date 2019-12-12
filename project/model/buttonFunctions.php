<?php
    class bt
    {
        function update($dd, $message, $email)
        {
            
            $statement = "UPDATE todos SET duedate = :dd, message = :message WHERE owneremail = :email";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":dd" , $dd);
            $statement2->bindValue(":message" , $message);
            $statement2->bindValue(":email" , $email);
            $statement2->execute();
            $statement->closeCursor();
        }
        function delete($message)
        {
            $statement = "DELETE FROM todos WHERE message = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->execute();
            $statement->closeCursor();
        }
        function insert($dd, $message, $email, $id)
        {
            $statement = "INSERT INTO todos(owneremail, ownerid, createddate, duedate, message) VALUES (:email, :id, , :dd, :message)";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":dd" , $dd);
            $statement2->bindValue(":message" , $message);
            $statement2->bindValue(":email" , $email);
            $statement2->bindValue(":id", $id);
            $statement2->execute();
            $statement->closeCursor();
        }
        
    function done($message)
        {
            $statement = "UPDATE todos SET isdone = 1 WHERE message = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->execute();
            $statement->closeCursor();
        }
    
    function undoDone($message)
        {
            $statement = "UPDATE todos SET isdone = 0 WHERE message = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->execute();
            $statement->closeCursor();
        }
    function checkDone($message)
    {
        global $db;
        $statement = "SELECT isdone FROM todos WHERE message=:message";
        $statement2 = $db->prepare($statement);
        $statement2->bindValue(":message" , $message);
        $statement2->execute();
        $statement3 = $statement2->fetchall();
        $statement4 = $statement3[0]['isdone'];
        $statement2->closeCursor();
    }
        
}

?>
