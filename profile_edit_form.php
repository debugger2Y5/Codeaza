<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style_prof.css">

</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-8">
<form action="editprofile.php" method="post" id="form_submission_ajax">
    <div class="form-table">
    <label>Username:</label> 
    <input type="text" name="username" placeholder="username"><br>

    <label>First Name:</label> 
    <input type="text" name="fname" placeholder="fname"><br>
    
    <label>Last Name:</label>  
    <input type="text" name="lname" placeholder="lname"><br>
 
    <label>Email:</label>  
    <input type="email" name="email" placeholder="email"><br>
    </div>
   <input type="submit" name="edit" class="btn btn-primary btn-group-lg form_btn">
</form>
</div>
</div>
</div>

<!--
<div class="container">
	<div class="row">
		<div class="col-sm-4">
            <div class="form-table">
                <form action="editprofile.php" method="post">
                <div class="form-table">
                    <label>Username:</label>
		            <div class="form-group pass_show"> 
                        <input type="text" placeholder="Username"> 
                    </div>
                    <label>First name:</label>
		            <div class="form-group pass_show"> 
                        <input type="text" placeholder="Fname"> 
                    </div>
                    <label>Last name:</label>
		            <div class="form-group pass_show"> 
                        <input type="text" placeholder="Lname"> 
                    </div>
                    <label>Email:</label>
		            <div class="form-group pass_show"> 
                        <input type="text" placeholder="Email"> 
                    </div>
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-group-lg form_btn">Update</button>
                </form>
            </div> 
		</div>  
	</div>
</div> -->
</body>
</html>