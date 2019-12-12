
<?php
class TasksFunc{
	function get_tasks($id) {
		global $db;
		$query = 'SELECT * FROM todos
				  WHERE todos.id = :id
				  ORDER BY duedate';
		$statement = $db->prepare($query);
		$statement->bindValue(":id", $id);
		$statement->execute();
		$products = $statement->fetchAll();
		$statement->closeCursor();
		return $id;
	}
	function get_owneremail($owneremail) {
		global $db;
		$query = 'SELECT * FROM todos
				  WHERE owneremail = :owneremail
				  ORDER BY duedate';
		$statement = $db->prepare($query);
		$statement->bindValue(":owneremail", $owneremail);
		$statement->execute();
		$product = $statement->fetch();
		$statement->closeCursor();
		return $owneremail;
	}

	function delete_task($id) {
		global $db;
		$query = 'DELETE FROM todos
				  WHERE todos.id = :id';
		$statement = $db->prepare($query);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$statement->closeCursor();
	}
	public function get_isdone($email) {
		global $db;
		$query = 'SELECT `createddate`,`message`,`duedate`,`Title` FROM `todos` WHERE `isdone` = 0 AND `owneremail` = :email';
		$statement = $db->prepare($query);
        $statement->bindValue(':email', $_SESSION['uemail'] );
		$statement->execute();
		$isdone = $statement->fetchAll();
		$statement->closeCursor();
		return $isdone;
	}
	public function get_iscompleted($email) {
		global $db;
		$query = 'SELECT `createddate`,`message`,`duedate`,`Title` FROM `todos` WHERE `isdone` = 1 AND `owneremail` = :email';
		$statement = $db->prepare($query);
        $statement->bindValue(':email', $_SESSION['uemail'] );
		$statement->execute();
		$iscompleted = $statement->fetchAll();
		$statement->closeCursor();
		return $iscompleted;
	}
}
?>

