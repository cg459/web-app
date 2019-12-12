<?php
    require "../view/header.php";
    echo "yeah";
    echo $_SESSION['name'];
?>
<?php 
require('../model/database.php');
require('../model/todos_task.php');
?>
<main>
	<aside>
		<h1>Tasks Need to be Completed</h1>
		<nav>
		<ul>
			<li>
				<a href="index.php">Tasks</a>
			</li>
			<li>
				<a href="#">Completed Tasks</a>
			</li>
		</ul>
	<?php
			$gt = new TasksFunc();
			$completed_tasks = $gt->get_iscompleted($_SESSION['uemail']);
			echo "<table border=\"1\"><tr><th>Date Created</th><th>Message</th><th>Deadline</th>";
			if(count($completed_tasks)> 0)
			{
				for ($i = 0; $i<count($completed_tasks); $i++)
				{
					echo "<tr><td>".$completed_tasks[$i]["createddate"]."</td><td>".$completed_tasks[$i]["message"]."</td><td>".$completed_tasks[$i]["duedate"]."</td>";
				}
			}else{
					echo 'you have no tasks to be completed';
			}
			
		
		?>
	</aside>
</main>
