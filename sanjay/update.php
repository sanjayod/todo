<?php
	$con = mysqli_connect('localhost','root','','todo');
	$id = $_GET['id'];
	$qry = "SELECT * FROM task WHERE id = '$id'";
	$run = mysqli_query($con,$qry);
	$result = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Todo using php mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="container-fluid">

	<div class="container-fluid text-center text-light bg-dark" style="border-radius: 20px; margin-top: 5px; padding-top: 30px;">
		<h1>TODO LIST USING PHP AND MYSQL</h1>
	</div>

	<div class="container">
	<div class="form text-center ">
		<form action="updatedata.php" method="POST">
			<label>Update Your Task Here</label><br>
			<input class="form-control" type="text" name="task" value="<?php echo $result['task']; ?>"><input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			<br><br>
			<input class="btn-lg btn-primary" type="submit" name="submit" value="ADD">
		</form>
	</div>
	</div>
</body>
</html>

