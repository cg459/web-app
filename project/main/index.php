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
        
		?>
        

	</aside>
</main>
