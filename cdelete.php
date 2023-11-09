<?php
require("config.php");
$id=$_GET['id'];
$sql="delete from contactus where id=$id";
if(mysqli_query($con,$sql))
{
    echo "Deleted";
}
else{
    echo "Not deleted";
}
?>