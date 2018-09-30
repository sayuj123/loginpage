<?php include('server.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
     <title> User Login </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="header">
	 <h2>Login</h2>
	 </div>

	 <form method="post" action="login.php">
		 <!-- Displaying errors here -->
		<?php include('errors.php'); ?>
	 <div class="input-group">
	      <label>Username</label>
	      <input type="text" name="username" placeholder="Username">
	 </div>
     
	 <div class="input-group">
	      <label>Password</label>
		  <input type="password" name="password_1" placeholder="Password">
	</div>
	
	<div class="input-group">
	     <button type="submit" name="login" class="btn">Login</button>
	 </form>
	 <p>
		 Not a member? <a href="register.php">Sign Up</a>
     </p>
</body>
</html>