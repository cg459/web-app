<?php
    require "../view/header.php";
    echo "yeah";
    echo $_SESSION['uemail'];
?>
<?php 
require('../model/database.php');
require('../model/todos_task.php');
require('../model/buttonFunctions.php');
?>
<main>
	<aside>
		<h1>Tasks Need to be Completed</h1>
		<nav>
		<ul>
			<li>
				<a href="#">Tasks</a>
			</li>
			<li>
				<a href="completed.php">Completed Tasks</a>
			</li>
		</ul>
		
		
	<?php
			
			$gt = new TasksFunc();
			$completed_tasks = $gt->get_isdone($_SESSION['uemail']);
        echo "<div class='table'><form method='post' action='../model/buttonFunctions.php'><table class='center'border=\"1\"> <tr class='trhead'> <th style='padding:40px'>Date Created</th> <th style='padding:40px'>Message</th> <th style='padding:40px'>Deadline</th> <th style='padding:40px'>Title</th><th style='padding:40px'>choose</th><style>table.center{margin-left:auto;margin-right:auto;}</style></div>";
			if(count($completed_tasks)> 0)
			{
				for ($i = 0; $i<count($completed_tasks); $i++)
				{
                    echo "<tr><td style='padding:40px'>".$completed_tasks[$i]["createddate"]."</td><td style='padding:40px'>".$completed_tasks[$i]["message"]."</td><td style='padding:40px'>".$completed_tasks[$i]["duedate"]."</td><td style='padding:40px'>" .$completed_tasks[$i]["Title"]. "</td> <td style='padding:40px'><label> <input type='checkbox'> </label></td>";
				}
			}else{
					echo 'you have no tasks to be completed';
			}
        echo "</table>";
        echo "<div class='button1'><button id='edit'>Edit</button><button id='new'>New</button><button id='delete'>Delete</button><button id='edit'>Completed</button></div><style> button{margin-right:10%; margin-left: 10%; margin-top: 5%; display:inline;} #new{margin: 10;}</style>";
        echo "</form>";
        		
	
    $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8","root","");
     if(isset($_POST['submit']) ){
        $Title = $_POST['Title'];
        $sth = $pdo->prepare("INSERT INTO todos (Title) VALUES (:Title)");
        $sth->bindValue(':Title', $Title, PDO::PARAM_STR);
        $sth->execute();
    }elseif(isset($_POST['delete'])){
        $id = $_POST['id'];
        $sth = $pdo->prepare("delete from todos where id = :id");
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }
?>	
		
        

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>

<body class="container">
    <h1>Todo List</h1>
    <form method="post" action="">
        <input type="text" name="Title" value="">
        <input type="submit" name="submit" value="Add">
    </form>
    <h2>Current Todos</h2>
    <table class="table table-striped">
        <therad><th>Task</th><th></th></therad>
        <tbody>
<?php
	

    $sth = $db->prepare("SELECT * FROM todos WHERE ownerid='1' ORDER BY id DESC");
    $sth->execute();
    
    foreach($sth as $row) {
?>
            <tr>
                <td><?= htmlspecialchars($row['Title']) ?></td>
                <td>
                    <form method="POST">
                        <button type="submit" name="delete">Delete</button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="hidden" name="delete" value="true">
                    </form>
                </td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</body>
</html>
	</aside>
</main>