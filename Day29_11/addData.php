<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="addData.php" method="POST">
		<table>
			<tr>
				<td align="right">Registration Number:</td>
				<td><input type="text" name="reg_no" /></td>
			</tr>
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td><input type="number" name="age" /></td>
			</tr>
			<tr>
				<td align="right">Course:</td>
				<td>
					<select name="course">
						<option value="IT">IT</option>
						<option value="ICT">ICT</option>
						<option value="CSC">CSC</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Add a new student" /></td>
			</tr>
		</table>
	</form>
	<?php
	require_once 'dbconf.php';
	function AddData($connect,$reg_no,$name,$age,$course){
		try {
		//Query
			$sql = "INSERT INTO STUDENTS VALUES('$reg_no','$name',$age,'$course')";
			//echo "$sql";
		//excute the quey
			$result = mysqli_query($connect,$sql);
			if ($result) {
				echo "New student record created sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//echo "Got the POST request from client";
		$reg_no = $_POST['reg_no'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		AddData($connect,$reg_no,$name,$age,$course);
	}
	//display the table
	//echo "Hello";
	//insert data into student table

	?>

</body>
</html>