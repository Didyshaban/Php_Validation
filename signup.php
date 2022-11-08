<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="index.css">
    <title>REGISTRATION FORM</title>
</head>
<body>
    
    <div class="Signup">
    <h2 style="margin-left:25px;">Signup Form</h2>
        <form method="POST" action="signup.php">
            <label>Username:</label><br>
<form-group><input type="text" placeholder="Username" name="user" class="form-control"></form-group><br>
<label>Password:</label><br>
<form-group><input type="password" placeholder="Password" name="pass" class="form-control"></form-group><br><br>
<button class="btn btn-primary" name="register">Create Account</button>
<button class="btn btn-secondary" name="delete">Delete</button><br>
<a style="text-decoration:none;color:white;margin-left:10px;" href="login.html">Back</a>

        </form>
    </div>
<?php
include("retrieve.php");


?>
<?php

$conn=mysqli_connect("localhost","root","","FORM");
if(isset($_POST["register"])){
$user=$_POST["user"];
    $pass=$_POST["pass"];
   
    $sql="INSERT INTO loginDB(user,pass) VALUES ('$user','$pass')";

    if(mysqli_query($conn,$sql)){
        echo header("location:signup.php");
    }else{
        echo "failed";
    }
}

?>




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

    
</body>
</html>