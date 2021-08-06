<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Display Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Codeaza Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>   
            <th>First Name</th>  
            <th>Last Name</th>  
            <th>User Name</th>  
            <th>User E-mail</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("config.php");  
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($dbc,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $fname=$row[0];  
            $lname=$row[1];  
            $username=$row[2];  
            $email=$row[3];  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $fname;  ?></td>  
            <td><?php echo $lname;  ?></td>  
            <td><?php echo $username;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><a href="deleteuser.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
  
</html> 