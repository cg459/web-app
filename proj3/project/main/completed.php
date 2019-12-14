<?php
    require "../view/header.php";
    echo "yeah";
    echo $_SESSION['name'];
?>
<?php 
require('../model/PDObject.php');
require('../model/todos_task.php');
?>
<main>
	<aside>
		<h1>Tasks that are already completed</h1>
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
			echo "<div class='table'><form action='../model/completed.php' method='post'><table class='center'border=\"1\"> <tr class='trhead'> <th style='padding:40px'>Date Created</th> <th style='padding:40px'>Message</th> <th style='padding:40px'>Deadline</th> <th style='padding:40px'>Title</th><th style='padding:40px'>choose</th><style>table.center{margin-left:auto;margin-right:auto;}</style></div>";
			if(count($completed_tasks)> 0)
			{
				for ($i = 0; $i<count($completed_tasks); $i++)
				{
					echo "<tr ><td style='padding:40px'>".$completed_tasks[$i]["createddate"]."</td><td style='padding:40px'>".$completed_tasks[$i]["message"]."</td><td style='padding:40px'>".$completed_tasks[$i]["duedate"]."</td><td style='padding:40px'>" .$completed_tasks[$i]["Title"]. "</td> <td style='padding:40px'><label> <input type='checkbox' name='yeah' value='1'> </label></td>";
				}
			}else{
					echo 'you have no tasks that you already completed';
			}
        echo "</table>";
        echo "<div class='button1'><a href='../edit/edit.php' id='edit'>Edit</a><a id='delete' href='#'>Delete</a><input href='../model/completed.php' id='edit' type='submit' value='Uncomplted' name='submit'></div><style> button{margin-right:10%; margin-left: 10%; margin-top: 5%; display:inline;} #new{margin: 10;}</style>";
        echo "</form>"
			
		
		?>
	</aside>
</main>
