<?php

	include('connect.php');

	$entry_no =$_GET['entry_no'];
	$stud_no = $_GET['stud_no'];
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
    $course = $_GET['course'];

	$query = "UPDATE record SET stud_no = '$stud_no', fname = '$fname' , mname = '$mname', lname = '$lname', course = '$course' WHERE entry_no = '$entry_no' ";

	if(mysqli_query($conn, $query))
	{
		header("Location:editsuc.html ");
	}
	else
	{
		echo("Error");
	}


?>