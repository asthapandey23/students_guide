<?php
require('db.php');
if(isset($_POST['new']) && $_POST['new']==1)
{
$fname = $_REQUEST['facname'];
$query = "DELETE FROM faculty WHERE facname='".$fname."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: faculty.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete faculty</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
	<div>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="adminView.php">View Users</a></li>
			<li><a href="About.php">About</a></li>
		    <li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<br>
	<div class="contact-title">
<h1>Delete Faculty</h1>
</div>
<div class="form">
<form name="form" method="post" action="faculty.php"> 
	<input type="hidden" name="new" value="1"/>
	<input type="id" name="id" placeholder="Enter Faculty Id" required/>
	<br><br><br>
	<button>Delete</button><br><br><br>
</form>
<a href='adminView.php'>
	<button>View Record</button></a>
</div>
</div>
</body>
</html>
