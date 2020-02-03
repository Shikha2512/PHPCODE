<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Manipulation functions</title>
</head>
<body>
    <?php

    $string="pHP string manipulation Functions";
    $string1="            Applying trimming functions            ";
    $string2="Shikha";
    echo strtolower($string);
    echo "<hr/>";
    echo strtoupper($string);
    echo "<hr/>";
    echo ucfirst($string);
    echo "<hr/>";
    echo ucwords($string);
    echo "<hr/>";
    echo "$string1";
    echo "<hr/>";
    echo ltrim($string1);
    echo "<hr/>";
    echo rtrim($string1);
    echo "<hr/>";
    echo trim($string1);
    echo "<hr/>";
    echo str_word_count($string);
    echo "<hr/>";
    echo substr_count($string,"i");
    echo "<hr/>";
    echo str_replace("i","I",$string);
    echo "<hr/>";
    echo strlen($string);
    echo "<hr/>";
    echo strrev($string);
    echo "<hr/>";
    echo str_shuffle($string2);
    echo "<hr/>";
    echo strpos($string, "ion");

    ?>  
</body>
</html>
