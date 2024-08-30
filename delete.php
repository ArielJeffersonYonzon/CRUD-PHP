<?php

	include('connect.php');

	$entry_no =$_GET['entry_no'];
	$stud_no = $_GET['stud_no'];
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
    $course = $_GET['course'];

	$query = "DELETE from record WHERE entry_no = $entry_no";

	if(mysqli_query($conn, $query))
	{
		header("Location:view.php ");
	}
	else
	{
		echo("Error");
	}


?>