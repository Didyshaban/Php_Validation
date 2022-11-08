<?php
$conn=mysqli_connect("localhost","root","","FORM");
if(isset($_POST["register"])){
$user=$_POST["user"];
    $pass=$_POST["pass"];
   
    $sql="INSERT INTO loginDB(user,pass) VALUES ('$user','$pass')";

    if(mysqli_query($conn,$sql)){
        echo "signup success";
    }else{
        echo "failed";
    }
}

?>