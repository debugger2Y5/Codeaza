<?php 
require_once("config.php"); //configure the connection with database before login
if(isset($_POST['sublogin'])){ 
    $login = $_POST['login_var'];
    $password = $_POST['password']; 
    // checks database "users" to match entered username and password
    $query = "select * from users where ( username='$login' OR email = '$login')";
    //runs this query on the database
    $res = mysqli_query($dbc,$query);
    //finds the no. of columns that return in result
    $numRows = mysqli_num_rows($res);
    //if no. of columns is one meaning there is an entry that matched the login/pass 
    if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
            $_SESSION["login_sess"]="1"; 
            $_SESSION["login_email"]= $row['email'];
            header("location:account.php");
            }
        else{ 
            header("location:login.php?loginerror=".$login);
            }
    }
    else{
        header("location:login.php?loginerror=".$login);
        }
}
?>