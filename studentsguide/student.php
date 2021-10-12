<!doctype html>
<html>
<head>
<title>student login</title>
<link rel="stylesheet" type="text/css" href="student.css">
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
	<div class="login-page1">
	<div class="form">
		<form class="login-page1" method="post" action="register.php">
			<h1>Register</h1>
				<input type="text" name="firstname" placeholder="First Name" required="please fill this field" />
				<input type="text" name="lastname" placeholder="Last Name" required="please fill this field"/>
					<input type="text" name="username" placeholder="Username" required="please fill this field"/>
					<input type="text" name="password" placeholder="Password" required="please fill this field"/>
					<input type="text" name="email" placeholder="Email id" required="please fill this field"/>
					<input type="text" name="semester" placeholder="Semester"/>
					<input type="text" name="branch" placeholder="Branch"/>
					<button>Create</button>
						<p class="message">Already Resgistered? <a href="#"> Login</a></p>
						</form>
						<form class="login-form" method="post" action="test.php">
							<h1>Login</h1>
							<input type="username" name="usm" placeholder="username"/>
							<input type="password" name="psw" placeholder="password"/>
							<button>Login</button>
						<p class="message">Not Registered?<a href="#">Register</a></p>	
						</form>
					</div>
				</div>
				<script src='C:/xampp/htdocs/studentsguide/lib/jquery-3.4.1.min.js'></script>
				<script>
					$('.message a').click(function(){
						$('form').animate({height:"toggle", opacity:"toggle"}, "slow");
					});
				</script>

</body>
</html>