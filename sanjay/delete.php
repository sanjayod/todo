
<?php
$con = mysqli_connect('localhost','root','','todo');
$id = $_GET['id'];
$qry = "DELETE FROM task WHERE id='$id'";
$run = mysqli_query($con,$qry);

if ($run) {
	header('location:index.php');
}
else
echo "something's wrong";

?>