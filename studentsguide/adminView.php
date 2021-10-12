<?php
require('db.php');
// include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
	<body>
		<div>
			<nav>
				<ul>
					<li><a href="home.php">Home</a>
					<li><a href="About.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="home.php">Logout</a></li>
				</ul>
			</nav>
		</div>
		<br>
		<div class="contact-title">
		 <h1>Admin</h1>
		 <h2>Faculty</h2>
		</div>
		<div class="form">
		<table style="background-color: gray;" width=100% border="1" style="border-collapse:collapse;">
				<thead>
					<tr>
					<th><strong>Sr.No</strong></th>
					<th><strong>Name</strong></th>
					<th><strong>Email-Id</strong></th>
					</tr>
					</thead>
					<tbody>
						<?php
						$count=1;
						$sel_query="Select * from `faculty` ORDER BY id ASC;";
						$result = mysqli_query($con,$sel_query);
						while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
									<td align="center"><?php echo $count; ?></td>
									<td align="center"><?php echo $row["facname"]; ?></td>
									<td align="center"><?php echo $row["email_id"]; ?></td>
							</tr>
						<?php $count++; } ?>
			    </tbody>
			</table>
		</div>
	</body>
</html>