<?php
 include "config.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $username=$_POST['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $select= "select * from users where username='$username'";
    $sql = mysqli_query($dbc,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];
    if($res === $username)
    {
       $update = "UPDATE users SET fname='$fname',lname='$lname',email='$email' where username='$username'";
       $sql2=mysqli_query($dbc,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:account.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:profile_edit_form.php');
    }
 }
?>