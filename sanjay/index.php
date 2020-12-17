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
		<form action="index.php" method="POST">
			<br><br>
			<input class="form-control" type="text" name="task" placeholder="Enter Your Task Here"><br>
			<input class="btn-lg btn-primary" type="submit" name="submit" value="ADD">
		</form>
	</div>
	</div>

	<?php

	
//connection
	$con = mysqli_connect('localhost','root','','todo');


//checking connetion
	if (!$con) {
		echo "Connection Failed";
	}

if (isset($_POST['submit'])) {
	//getting values from form
$task = $_POST['task'];
//inserting into database
$qry = "INSERT INTO task (task) VALUES ('$task')"; 
$run = mysqli_query($con,$qry);


//check if data inserted or not
	if (!$run) {
		echo "something's wrong";
	}
}

	
	?>


	<table class="table" style="margin: 50px 0">
		<thead class="thead-dark" >
	<tr style="text-align: center;">
		<th >NUMBER</th>
		<th> TASK</th>
		<th> Delete </th>
		<th> Update </th>
	</tr>
	</thead>	

	<?php
	$sql = "select * from task";
	$query = mysqli_query($con,$sql);
	$count = 1;

	while ($res = mysqli_fetch_array($query)) {

		?>

		<tr align="center">
			<td><?php echo $count; ?></td>
			<td> <?php echo $res['task']; ?> </td>
			<td><a class="btn btn-danger text-light" href="delete.php?id=<?php echo $res['id'];?>"> DELETE</a></td>
			<td><a class="btn btn-primary text-light" href="update.php?id=<?php echo $res['id'];?>"> UPDATE</a></td>
		</tr>

		<?php
		$count++;
	}
	?>
</body>
</html>

