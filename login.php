<?php

    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $conn=mysqli_connect("localhost","root","","FORM");
    
    $sql=mysqli_query($conn,"SELECT * FROM loginDB where user='$user'  and pass='$pass'");
$count=mysqli_num_rows($sql);
if($count==1){
    header("location:dashboard.php");
//   echo "login successfully";
}else{
    echo "login failed!!";
}
?>

