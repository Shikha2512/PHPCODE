<!DOCTYPE html>
<html lang="en">
<head>
   <style>
   td{
       padding:10px;
   }
   </style>
</head>
<body>
    
<?php
require_once 'connection.php';

$query = "select * from Student";

$data = mysqli_query($conn,$query);     // Execute 

$total = mysqli_num_rows($data);

// echo "Total no of Records: $total";
// $result = mysqli_fetch_assoc($data);
// echo $result;
// echo $result['rollno']." ".$result['name']." ".$result['class']."<br>;


if($total!=0)
{
?>
    <table>
    <thead>
        <tr>
            <th>FNAME</th>
            <th>LNAME</th>
            <th>SID</th>
        </tr>
    </thead>
    

    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['FNAME']."</td>
                <td>".$result['LNAME']."</td>
                <td>".$result['SID']."</td>
                
            </tr>";
    }
}
else
{
    echo "No record found";
}

?>
</table>
</div>
</body>
</html>