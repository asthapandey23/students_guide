<?php 
require('db.php');
// include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$fname =$_REQUEST['facname'];
$email = $_REQUEST['email_id'];

$ins_query="insert into faculty (`facname`,`email_id`) values ('$fname','$email')";
mysqli_query($con,$ins_query) or die(mysqli_error($con));
$status = "<a href='adminView.php'><button>View Record</button></a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New faculty</title>
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
	</div>
		<div class="contact-title"><br><br>
			<h1>Admin</h1>
		
<div class="form">
<h2>Insert New Faculty</h2>
<form name="form" method="post" action=""> 
					<input type="hidden" name="new" value="1" />
					<input type="text" name="facname" placeholder="Enter Faculty Name" required />
					<input type="text" name="email_id" placeholder="Enter Faculty email_id" required />
					<button>Add</button>
					<!-- <p><input name="submit" type="submit" value="Submit" /></p> -->
					</form>
					<p><?php echo $status;?></p>
</form>
</div>
</div>
</body>
</html>
