<?php
$conn = mysqli_connect("localhost","root","","db1");

if($conn)
{
    echo "Connection Established";
}
else
{
    echo "Connection Failed";
}

?>