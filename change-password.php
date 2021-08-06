<?php 
$valid = true;
$error = [];
$form_data = [];
if(!empty($_POST['username']))
{
    $username = $_POST['username'];
}

if(!empty($_POST['username']))
{
    $username = $_POST['username'];
    $username_data = array("username" => $username);
    $form_data = array_merge($form_data, $username_data);
    $username_error = array("username_error" => "");
    $error = array_merge($error, $username_error);
}
else
{
    $valid = false;
    $username = "";
    $username_data = array("username" => $username);
    $form_data = array_merge($form_data, $username_data);
    $username_error = array("username_error" => "* Username is required.");
    $error = array_merge($error, $username_error);
}




if(!empty($_POST['old_password']))
{
    $old_password = $_POST['old_password'];
    $old_password_data = array("old_password" => $old_password);
    $form_data = array_merge($form_data, $old_password_data);
    $old_password_error = array("old_password_error" => "");
    $error = array_merge($error, $old_password_error);
}
else
{
    $valid = false;
    $old_password = "";
    $old_password_data = array("old_password" => $old_password);
    $form_data = array_merge($form_data, $old_password_data);
    $old_password_error = array("old_password_error" => "* Old password is required.");
    $error = array_merge($error, $old_password_error);
}
 
if(!empty($_POST['new_password']))
{
    $new_password = $_POST['new_password'];
    $new_password_data = array("new_password" => $new_password);
    $form_data = array_merge($form_data, $new_password_data);
    $new_password_error = array("new_password_error" => "");
    $error = array_merge($error, $new_password_error);
}
else
{
    $valid = false;
    $new_password = "";
    $new_password_data = array("new_password" => $new_password);
    $form_data = array_merge($form_data, $new_password_data);
    $new_password_error = array("new_password_error" => "* New password is required.");
    $error = array_merge($error, $new_password_error);
}
 
if(!empty($_POST['confirm_password']))
{
    $confirm_password = $_POST['confirm_password'];
    $confirm_password_data = array("confirm_password" => $confirm_password);
    $form_data = array_merge($form_data, $confirm_password_data);
    $confirm_password_error = array("confirm_password_error" => "");
    $error = array_merge($error, $confirm_password_error);
}
else
{
    $valid = false;
    $confirm_password = "";
    $confirm_password_data = array("confirm_password" => $confirm_password);
    $form_data = array_merge($form_data, $confirm_password_data);
    $confirm_password_error = array("confirm_password_error" => "* Confirm password is required.");
    $error = array_merge($error, $confirm_password_error);
}
 
if($new_password != '' && $confirm_password != '')
{
    if($new_password != $confirm_password)
    {
        $valid = false;
        $confirm_password_error = array("confirm_password_error" => "* Confirm password is same as new password.");
        $error = array_merge($error, $confirm_password_error);
    }
 
    if($new_password == $confirm_password)
    {
        $confirm_password_error = array("confirm_password_error" => "");
        $error = array_merge($error, $confirm_password_error);
    }
}
 
if($valid==true)
{
     include 'config.php';
    $db_name = 'codeaza'; // database name
    mysqli_select_db($dbc, $db_name);
    $check_data = "SELECT * FROM users WHERE username = '$username' ";
    $check_query = mysqli_query($dbc, $check_data);
    $numRows = mysqli_num_rows($check_query);
    $user_data = mysqli_fetch_assoc($check_query);
 
    if($numRows == 1)
    {
        $check_old_password = password_verify($old_password,$user_data['password']);
        if($check_old_password)
        {
            $new_password_encrypt = password_hash($new_password,PASSWORD_DEFAULT);
            $username = $form_data['username'];
            $sql = "UPDATE users SET password = '$new_password_encrypt' WHERE username = '$username' ";
            $query = mysqli_query($dbc, $sql);
            // $row = mysqli_affected_rows($query);
            // if($row == 1)
            // {
            //     echo "Your password is successfully changed.";
            //      // die;

            // }
        }
        else
        {
            echo "Please try again!";
            // die;
        }
    }
    else
    {
        echo "No database record matched with your data.";
        // die;
    }
}
else
{
    $_SESSION['error'] = $error;
    $_SESSION['form_data'] = $form_data;
    header('Location:index.php');
}
?>
