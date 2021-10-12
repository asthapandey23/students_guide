<!doctype html>
<html>
<head>
<title> admin-page </title>
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>	
	<div>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="About.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="login-page">
	<div class="form">
	<form class="login-form" method="post" action="testadmin.php">
	<h1>Login</h1>
		<input type="text" name="usm" placeholder="username"/>
		<input type="password" name="psw"placeholder="password"/>
		<button>Login</button>
		<!-- <input type="submit" value="submit"> -->
	</form>
	</div>
	</div>
</body>
</html>