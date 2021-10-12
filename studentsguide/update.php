		<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Update</title>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div>
			<nav>
				<ul>
					<li><a href="home.php">Home</a>	
					<li><a href="About.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="adminlogout.php">Logout</a>
				</ul>
			</nav>
		</div><br>
		<div class="contact-title">
		<h1>Admin</h1>
		<h2>Update Faculty List</h2>
	</div>
		<?php
require('db.php');
$fname=$_REQUEST['facname'];
$query = "SELECT * from faculty where facname='".$fname."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
			<?php
			$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
					$id=$_REQUEST['id'];
					$fname =$_REQUEST['facname'];
			        $email= $_REQUEST['email_id'];
					$update="update faculty set facname='".$fname."', email_id='".$email."' where id='".$id."'";
				mysqli_query($con, $update) or die(mysqli_error($con));
			$status ="<button><a>View Updated list</a></button>";
				echo '<p style="color:#fff;">'.$status.'</p>';
				}else {
			?>
			<div class="login-form">
			<div class="form">
				<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
				<p><input type="text" name="facname" placeholder="Enter Faculty Name" required value="<?php echo $row['facname'];?>" /></p>
				<p><input type="text" name="email" placeholder="Enter Email Id" required value="<?php echo $row['email_id'];?>" /></p>
				<button>Update</button>
				<!-- <p><input name="submit" type="submit" value="Update" /></p> -->
				</form>
			<?php } ?>
			</div>
		</div>
	</body>
	</html>
