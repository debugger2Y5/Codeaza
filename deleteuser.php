<?php  
include("config.php");  
$delete_username=$_GET['del'];  
$delete_query="delete from users WHERE username='$delete_username'";//delete query  
$run=mysqli_query($dbc,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>