<?php
session_start();

$conn=mysqli_connect("localhost","root","","FORM");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
  <?php
  $_SESSION['user']='$user';
  echo "welcome".'   '. $_SESSION["user"];
  if(!isset($_SESSION['user'])){
    echo "you are not logged in";
  }else{
    echo "you are logged in ";
  }
  ?>
</body>
</html>