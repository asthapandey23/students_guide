<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="studentsguide"; // Database name
$tbl_name="register"; // Table name

		// Connect to server and select database.
		$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
		mysqli_select_db($con,"$db_name")or die("cannot select DB");

		// Get values from form
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];
		$email=$_POST['email'];
		$semester=$_POST['semester'];
		$branch=$_POST['branch'];

		// Insert data into mysql
		$sql="INSERT INTO $tbl_name(firstname, lastname, username, password, email, semester, branch )VALUES('$firstname', '$lastname', '$myusername', '$mypassword' ,'$email', '$semester', '$branch')";
		$result=mysqli_query($con,$sql);

		// if successfully insert data into database, displays message "Successful".
		if($result){
			
			include 'department.php';
		}
		else
			{
			echo "ERROR";
			}
?>
