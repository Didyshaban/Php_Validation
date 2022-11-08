<?php
$conn=mysqli_connect("localhost","root","","FORM");


$delete=$_GET['delete'];

$sql="DELETE FROM loginDB where user='$delete'";

if (mysqli_query($conn,$sql)){
    echo "data removed";
}else{
    echo "failed to remove";
}


?>