<?php
$con = mysqli_connect('localhost','root','','todo');
if (isset($_POST['submit'])) {

	$task = $_POST['task'];
	$id = $_POST['id'];
	$qry = "UPDATE task SET  task = '$task' WHERE id = '$id'";

	$run = mysqli_query($con,$qry);

	if ($run) {
		header('location:index.php');
	}else
	{
		print_r(mysqli_error_list($run));
	}
}
?>