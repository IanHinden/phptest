<?php

	include_once 'dbh.inc.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$age = $_POST['age'];
	
	$sql = "INSERT INTO users (First_Name, Last_Name, Age) VALUES ('$first', '$last', '$age');";
	mysqli_query($con, $sql);

	header("Location: ../connect.php?signup=success");
	mysqli_close($db_handle);
?>