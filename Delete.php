<?php
include 'connection.php';
$roll = $_GET['rn'];

$query = "DELETE FROM Student WHERE SID='101'";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script> alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost/phpcode/data.php">

    <?php
}
else
{
    echo "Record not Deleted";
}

?>