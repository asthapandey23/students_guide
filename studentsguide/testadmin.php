<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="studentsguide"; // Database name
$tbl_name="admin"; // Table name
// Connect to server and select databse.
$con= mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");
// Define $myusername and $mypassword
		$myusername=$_POST['usm'];
		$mypassword=$_POST['psw'];

		    $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
			$result=mysqli_query($con,$sql);
		// Mysql_num_row is counting table row
			$count=mysqli_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row

				if($count==1)
					{
					  session_start();
					  $_SESSION['logged']=true;
					  $_SESSION ['username']=$myusername;
					  header("refresh:1;url=faculty.php");
					}
				else
				    {
					$_SESSION['logged']=false;
					header("refresh:2;url=admin.php");
					echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
                    
					}
?>
