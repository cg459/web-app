<?php
    require('PDObject.php');
    class bt
    {
        function updateAll($tid, $dd, $message, $title)
        {
            global $db;

            
            $statement = "UPDATE todos SET duedate = :dd, message = :message, Title = :title WHERE id= :id";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":dd" , $dd);
            $statement2->bindValue(":message" , $message);
            $statement2->bindValue(":title" , $title);
            $statement2->bindValue(":id" , $tid);
            $statement2->execute();
        }
        function updatedd($tid, $dd)
        {
            global $db;

            $statement = "UPDATE todos SET duedate = :dd WHERE id = :id";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":dd" , $dd);
            $statement2->bindValue(":id" , $tid);
            $statement2->execute();
        }
        function updateMessage($tid, $message)
        {
            global $db;

            
            $statement = "UPDATE todos SET message = :message WHERE id = :id";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->bindValue(":id" , $tid);
            $statement2->execute();
        }
        
        function updatetitle($tid, $title)
        {
            global $db;

            
            $statement = "UPDATE todos SET Title = :title WHERE id = :id";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":title" , $title);
            $statement2->bindValue(":id" , $tid);
            $statement2->execute();
        }
        
        function delete($id)
        {
            global $db;

            $statement = "DELETE FROM todos WHERE id = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $id);
            $statement2->execute();
        }
        function insert($dd, $message, $email, $id, $time, $title1)
        {
            global $db;

            $statement = "INSERT INTO todos(owneremail, ownerid, duedate, message, createddate, Title) VALUES (:email, :id, , :dd, :message, :cd, :title)";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":dd" , $dd);
            $statement2->bindValue(":message" , $message);
            $statement2->bindValue(":email" , $email);
            $statement2->bindValue(":id", $_SESSION['id']);
            $statement2->bindValue(":cd", time());
            $statement2->bindValue(":title", $title);
            $statement2->execute();
        }
        
    function done($id)
        {
            global $db;
            $statement = "UPDATE todos SET isdone = 1 WHERE message = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->execute();
        }
    
    function undoDone($message)
        {
                global $db;

            $statement = "UPDATE todos SET isdone = 0 WHERE message = :message";
            $statement2 = $db->prepare($statement);
            $statement2->bindValue(":message" , $message);
            $statement2->execute();
        }
    function checkDone($message)
    {
            global $db;

        global $db;
        $statement = "SELECT isdone FROM todos WHERE message=:message";
        $statement2 = $db->prepare($statement);
        $statement2->bindValue(":message" , $message);
        $statement2->execute();
        $statement3 = $statement2->fetchall();
        $statement4 = $statement3[0]['isdone'];
    }
        
}

?>
