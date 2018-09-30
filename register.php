<?php include('server.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
     <title> User Registration </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
     <div class="header">
	 <h2>Register</h2>
	 </div>
    <form method="post" action="register.php">
		<!-- Displaying errors here -->
		<?php include('errors.php'); ?>
	 <div class="input-group">
	      <label>Username</label>
	      <input type="text" name="username" placeholder="Username">
	 </div>
     <div class="input-group"> 
	      <label>Email</label>
	      <input type="text" name="email" placeholder="Email" required  >
	 </div>
	 <div class="input-group">
	      <label>Password</label>
		  <input type="password" name="password_1" placeholder="Password">
	</div>
	<div class="input-group">
	     <label>Confirm Password</label>
		 <input type="password" name="password_2" placeholder="Password">
    </div>
	<div class="input-group">
	     <button type="submit" name="register" class="btn">Register</button>
	 </form>
	 <p>
		 Already a member? <a href="login.php">Sign in</a>
     </p>
</body>
</html>