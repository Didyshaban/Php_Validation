
<html>
    <head>
        <style>
            table,th,td{
                border:2px solid black;
                margin-top:-450px;
                margin-left:30px;
                width:300px;
                heigth:500px;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>USERNAME</th>
                <th>PASSWORD</th>
            </tr>



<?php
$conn=mysqli_connect("localhost","root","","FORM");

$sql="SELECT * FROM loginDB";
$result=mysqli_query($conn,$sql);

while($data=mysqli_fetch_array($result)){ ?>
<tr>
<td><?php echo $data['user'];?></td>
<td><?php echo $data['pass'];?></td>
<td><a href="delete.php?delete=<?php echo $data['$user'];?>">delete</a></td>
</tr>
<?php }?>
</table>
<body>
</html>
