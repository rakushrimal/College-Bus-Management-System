<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	
	<title>Login Page</title>
</head>
<body>
	
	<div class="Signup-form">
		<img src="user.webp">
		<form action="process2.php" method="post">
			<input type="text" placeholder="User Name or Email" class="txt" name="UserName">
			<input type="password" placeholder="Password" class="txt" name="Password">
			<input type="submit" value="Admin Login" class="btn" name="btn-login">
		
		</form>
		

		<form action="userprocess.php" method="post">
		<input type="text" placeholder="Name" class="txt" name="Name">
			
			<input type="submit" value="User Login" class="btn" name="btn-login">
		</form>
	</div>
	
</body>
</html> 
