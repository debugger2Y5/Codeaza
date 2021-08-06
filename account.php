<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
}
 ?> 
<html>
<head>
    <title> Account Details: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
<style>
    .btn-primary {
    color: #fff;
    background-color: #897799;
    border-color: #fafcff;
    margin: 2px -10px 5px 0px;}

</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
  <button type="button" class="btn btn-primary"><a href="logout.php"><span style="color:black; font-weight:bold; font-size: 14px;">Logout</span> </a></button>
  <button type="button" class="btn btn-primary"><a href="signup.php"><span style="color:black; font-weight:bold;font-size: 14px;">Add User</span> </a></button>
  <button type="button" class="btn btn-primary"><a href="profile_edit_form.php"><span style="color:black; font-weight:bold;font-size: 14px;">Edit Profile</span></a></button>
  <button type="button" class="btn btn-primary"><a href="index.php"><span style="color:black; font-weight:bold;font-size: 14px;">Change Password</span></a></button>
  <button type="button" class="btn btn-primary"><a href="displayusers.php"><span style="color:black; font-weight:bold;font-size: 14px;">Display Users</span></a></button>

     <!-- <p><a href="logout.php"><span style="color:red; margin-left:5px;">Logout</span> </a></p>
     <p><a href="signup.php"><span style="color:red; margin-left:5px ;">Add User</span> </a></p> -->
     <!-- <p><a href="profile_edit_form.php"><span style="color:red; margin-left:5px;">Edit Profile</span></a></p>
     <p><a href="index.php"><span style="color:red; margin-left:5px;">Change Password</span></a></p>
     <p><a href="displayusers.php"><span style="color:red; margin-left:5px;">Display Users</span></a></p>
     <p><a href="sessionmgt.php"><span style="color:red; margin-left:5px;">Session Management</span></a></p> -->

          <h1 style="margin-left: 35px">Dashboard</h1>
          <p> Welcome <span class="user"><?php echo $username; ?></span> ! </p>
          <table class="table">
          <tr>
              <th>First Name: </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name: </th>
              <td><?php echo $lname; ?></td>
          </tr>
          <tr>
              <th>Username: </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email: </th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
