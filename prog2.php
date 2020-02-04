<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	//defining a variable
	$mark = "60";
	if($mark === 60){
		echo "you have an A Grade";
	}
	else {
		echo "you have an B Grade";	
	}
 // With the if statement your code only executes only 
 // when the condition is true.  
 echo "<br>";
 $gender = 'FF';
    if ($gender == 'F'){
        echo "FEMALE";
    }
    else { 
        echo "MALE";
    } 

    echo "<br>";
    $marks = 55;
    
    if ($marks>79){
        echo "A";
    }
    elseif($marks<=79 and  $marks>60) { 
        echo "B";
    }
    elseif($marks<=60 && $marks>50) { 
        echo "C";
    }
    elseif($marks=50) { 
        echo "D";
    }
    else{
        echo "F";
    }

    echo "<br>";
$number1 = 40;
$number2 = 12;

if ($number1 != $number2) {
    echo 'number1 is different from number2';
    echo '<br>';
    if ($number1 > $number2) {
        echo 'number1 is greater than number2';
    } else {
        echo 'number2 is greater than number1';
    }
} else {
    echo 'number1 is equal to number2';
}
?>
</body>
</html>