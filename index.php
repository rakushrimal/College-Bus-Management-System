<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

	<title>Home Page</title>
</head>
<body>
	
	<div class="Signup-form">
		<img src="user.webp">
		<form action="process.php" method="post">
			<input type="text" placeholder="User Name" class="txt" name="UserName">
			<input type="email" placeholder="Email" class="txt" name="Email">
			<input type="password" placeholder="Password" class="txt" name="Password">
			<input type="password" placeholder="Confirm Password" class="txt" name="Cpass">
			<input type="submit" value="Create a Account" class="btn" name="btn-save">
			<a href="login.php"> Already Have an Account</a>	
		</form>
	</div>
	
</body>
</html> 
