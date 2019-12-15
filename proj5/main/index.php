<?php
    require "../view/header.php";
    require('../model/PDObject.php');
    require('../model/todos_task.php');
    require('../model/buttonFunctions.php');
    global $db;
?>

<!DOCTYPE html>
<html lang="en">
<script src="../functions/deleteFunc.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../css/main2.css" rel="stylesheet">
</head>
<body>
<main>
    <h1 class="title1">Tasks Need to be Completed</h1>
    <div class="links">
        <a href="#"class="tasks">Tasks</a>
        <a href="completed.php" class="tasks2">CompletedTasks</a>
    </div>

<?php
    $ga = new bt();
            if(isset($_POST['delete'])){
                $id = $_POST['id'];
                $sth = $db->prepare("delete from todos where id = :id");
                $sth->bindValue(':id', $id, PDO::PARAM_INT);
                $sth->execute();
            }
            
            if(isset($_POST['complete'])){
                $id1 = $_POST['id'];
                $sth1 = $db->prepare("UPDATE todos SET isdone = 1 WHERE id = :id");
                $sth1->bindValue(':id', $id1, PDO::PARAM_INT);
                $sth1->execute();
            }
    
			$gt = new TasksFunc();
			$completed_tasks = $gt->get_isdone($_SESSION['uemail']);
?>

        <div class='table'>
            <form method="POST">
                <table class='center'border=\1\>
                    <tr class='trhead'>
                        <th style='padding:40px'>Date Created</th>
                        <th style='padding:40px'>Message</th>
                        <th style='padding:40px'>Deadline</th>
                        <th style='padding:40px'>Title</th>
                        <th style='padding:40px'>TaskID</th>
                        <th style='padding:40px'>Buttons</th>
                        <style>table.center{margin-left:auto;margin-right:auto;}</style>
                    </tr>
<?php
                for ($i = 0; $i<count($completed_tasks); $i++)
				{
?>

            <tr>
                <td style='padding:40px'> <?=  $completed_tasks[$i]["createddate"] ?></td>
                <td style='padding:40px' name=check_list[1]> <?= $completed_tasks[$i]["message"] ?> </td>
                <td style='padding:40px'> <?= $completed_tasks[$i]["duedate"] ?> </td>
                <td style='padding:40px'> <?= $completed_tasks[$i]["Title"] ?> </td>
                <td style='padding:40px'> <?= $completed_tasks[$i]["id"] ?> </td>
                <td style='padding:40px'>
                
                <form>
                    <div class="forDelete">
                        <button type="submit" name="delete">Delete</button>
                        <input type="hidden" name="id" value="<?= $completed_tasks[$i]['id'] ?>">
                        <input type="hidden" name="delete" value="true">
                    </div>
                </form>
            <form method="POST">
                <div class="forComplete">
                    <button type="submit" name="complete">Complete</button>
                    <input type="hidden" name="id" value="<?= $completed_tasks[$i]['id'] ?>">
                    <input type="hidden" name="complete" value="true">
                </div>
            </form>
</form>
                </td>
    <?php
			
        }
?>
        </table>
        <div class='button1'>
                <a href='../new/new.php'id='new'  class='new'>New</a>
        </div>
            <style> button{margin-right:10%; margin-left: 10%; margin-top: 5%; display:inline;}</style>
        </form>
        
        

        <p ID="yeah1"></p>

    </main>
</body>

