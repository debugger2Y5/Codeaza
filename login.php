<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head><br>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process.php" method="POST">
   <img src="icon.png" class="icon"/>

  <div class="form-group">
<!-- <h1>Codeaza</h1> -->
    <!-- <label class="label_txt">Username or Email </label> -->
    <input type="text" name="login_var" placeholder="username/email" class="form-control" required="">
  </div>
  <div class="form-group">
    <!-- <label class="label_txt">Password </label> -->
    <input type="password" name="password" placeholder="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
   <br> 
    <p class="para">Don't have an account? <a href="signup.php">Add User</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 
</body>
</html>