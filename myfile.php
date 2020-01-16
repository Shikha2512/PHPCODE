<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="color: green">
THIS IS PHP<br>
    
</body>
</html>
<?php

echo "This is my first PHP code.  " ;
print "This is second line" ;

#Variables are case sensitive
$ABC=25;
echo $ABC; 

#Constant are not case sensitive

define("$ABC",50);

$ABC=40;
echo "<br>";
echo $ABC;
#Datatypes is PHP.PHP is loosely types language.
$var1="Shikha Bansal";
$var2=25;
$var3=12.0;
$var4=true;
$var5=null;
$var6=array(1,2,3);

#var_dump()- it gives the type of the variable and also abot the content

var_dump($var1);
echo $var2;
echo $var3;
echo $var4;
echo $var5;
var_dump($var6);



?>
</html>