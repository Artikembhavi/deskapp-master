<?php
$con=mysqli_connect("localhost","root","","dashbord");
if($con)
{
    echo "";
}
else
{
    echo "Error".$con->error;
}
?>