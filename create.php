<?php
/*
include('connect.php');
if (isset($_POST['create'])){
    $stud_no = mysqli_real_escape_string($conn, $_POST['stud_no']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$mname = mysqli_real_escape_string($conn, $_POST['mname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $sql = "INSERT INTO record (stud_no, fname, mname, lname, course) VALUES ('$stud_no', '$fname', '$mname', '$lname', '$course')";
    if(mysqli_query($conn, $sql)){
        echo "Record Inserted";
    }else{
        die("Something went wrong");
    }
}
*/
	include('connect.php');

	$stud_no = $_POST['stud_no'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
    $course = $_POST['course'];

	$query = "INSERT INTO record (stud_no, fname, mname, lname, course) VALUES ('$stud_no', '$fname', '$mname','$lname','$course')";

	if(mysqli_query($conn, $query))
	{
		header("Location:success.html ");
	}
	else
	{
		echo("Error");
	}

	mysqli_close($conn); 
?>