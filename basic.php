<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>BASICS OF PHP WITH SYNTAX</h1>

<?php



//PRINT IN PHP
//how to print in php
// echo "hello world";
// echo 5+98;

//COMMENTS
//This is how you can comment in PHP( SINGLE LINE COMMENT);

/*  Multi 
    Line 
    Comment
*/ 

//VARIABLES

$name="tushar";
$income=2000000;

echo "my name is $name & income is $income <br>";
echo "This is how variable is used in php <br>";



//More on PHP Variables
//Rules for creating variables in php
// -Starts with a $ sign
// -Cannot starts with a number
// -Must starts with a letter or underscore character
// -Can only contains alphanumeric charcters or underscores
// -Vraiables in php are case sensitive


//DATA TYPES IN PHP
//String - sequence of characters

$myname = "Tushar";
$freind = "harry";

echo "$myname is freind of $freind <br>";

//Integer - Non-decimal numbers

$n1=400;
$n2=300;

echo $n1-$n2;
echo "<br>";


//Float - Decimal numbers

$n1 =45.5;
$n2 = 55.5;
echo $n1+$n2;
echo "<br>";

//Boolean
$true = true;
$false = false;

echo $true;
echo "<br>";
echo var_dump($false);
echo "<br>";

//NOTE var_dump() function is used to print type & value of an variable

//Object - It is an instance of an class

//Array  - It can store multiple value in a single variable
$freinds =  array("tushar",1,"akshay",true);
echo var_dump($freinds);
echo "<br>";



//NOTE :- (.) operator is used to concat string in PHP

//STRING FUNCTIONS IN PHP
$input = "Tushar is a Software developer";
//1) strlen() - Returns length of an string 
echo strlen($input) . "<br>";

//2) str_word_count() - Returns word counts of an string
echo str_word_count($input) . "<br>";

//3) str_rev() - Reverse the string 
echo strrev($input) . "<br>";

//4) strpos() - Returns the index of an first character of an word
echo strpos($input,"a ") . "<br>";

//5) str_replace() - Replace a character form input string
echo str_replace("is","was",$input) . "<br>"; 

//6) str_repeat() - return the string with the enter number of times
echo str_repeat($input,5) . "<br>";

//7) ltrim() - Trims the given string from the left side
//   rtrim() - Trims the given string from the right side 
echo "<pre>";
$trimstring = "   This is PHP language   ";
echo ltrim($trimstring) . "<br>";
echo rtrim($trimstring);
echo "</pre>";

// NOTE :- <pre></pre> tag  is used to display text exactly as it appears in the HTML code, preserving whitespace and line breaks. This makes it useful for displaying code snippets or any text where the exact spacing and formatting are essential.

//OPERATORS IN PHP
//1) Arthimetic opertors

//    + - Addition
//    - - Substraction
//    / - Division
//    % - Modulo
//    * - Multiplication
//    ** -  Powerto

//2) Assignment Operators

// ==  
// +=
// -=
// /=
// *=
// %=

//3) Comparison Operators

// == double equal to
// >= greater than equal to
// <= less than equal to
// != not equal to
// > greater than
// < less than

//4) Logical Operators

// && and Logical and
// || or  Logical or
// !  not Logical not

//CONDITIONALS IN PHP

//1) If else in php

$a=45;
$b=18;

if($a < 50){
    echo "$a is greater than 50";
}
else{
    echo "$a is not  greater than 50 ";
}

echo "<br>";

//2) Switch case in pHp
$number = 1;

switch($number){
    case 1:
        echo "Monday <br>";
    break;    

    case 2:
        echo "Tuesday <br>";
    break;  

    case 3:
        echo "Wednesday <br>";
    break; 
    
    case 4:
        echo "Thursday <br>";
    break;    

    case 5:
        echo "Friday <br>";
    break;    

    case 6:
        echo "Saturday <br>";
    break;  
    
    case 7:
        echo "Sunday <br>";
    break;

    default:
       echo "Not an day";
    break;   
}

//3) while in php 
 
  $i = 0;

  while($i < 10){
    echo "$i <br>";
    $i+=1; 
  }

// 4) For loop in PHP 

  for($i=0;$i<=10;$i++){
    echo $i . "<br>";
  }

//5) do while loop in php
 
 $n=0;
 do{
  echo "$n <br>";
  $n += 1;
 }
 while($n<20);

//6) For each loop in php

$arr = array("Value1","Value2","Value3","Value4","Value5");

foreach($arr as $value){
    echo ("$value <br>");
}

//FUNTIONS IN PHP

$marks = array(75,86,78,79,55,56);


function calculatePercentage($arr){
    $sum = 0;
    $percentage = 0;

    foreach($arr as $value){
       $sum += $value;
    }

    echo "Sum is $sum <br>";

    $percentage = $sum/600*100;

    return $percentage;
 
}

$percentageOfMarks = calculatePercentage($marks);
echo "Percentage is $percentageOfMarks";
echo "<br>";


//ASSOCIATIVE ARRAY : Collection of key-value pairs.You can create it using array() or shorthand syntax [] 
$person = array('name' => 'Tushar','age' => 24, 'city' => 'Pune');
echo $person['name'] . "<br>";

$person1 = ['name' => 'Harry','age' => 24, 'city' => 'Pune'];
echo $person1['city'] . "<br>";

foreach($person as $key => $value){
 echo"$key -- $value <br>";
}

//MULTI-DIMENSIONAL ARRAY : In PHP

//Declaration of multi-dimensional array in PHP
$multiDimArray = array(
                      array(1,2,4),
                      array("a","b","c"),
                      array(true,false,true)
);

//Accessing value of multi-dimensional array in php

echo $multiDimArray[0][1] . "<br>"; // o/p: 2
echo $multiDimArray[1][2] . "<br>"; // o/p: c
echo $multiDimArray[2][0] . "<br>"; // o/p: true



//SCOPE,LOCAL & GLOBAL VARAIABLES in PHP

$x = 100; // Global variable
$y = 200;

function printValue(){
    $x=10; // Local variable
    global $y; //Syntax to access global variables inside scope 
    echo "LOCAL VARIABLE X $x <br>";
    echo "LOCAL VARIABLE y $y <br>";
}

echo "GLOBAL VARIABLE X $x <br>";
printValue();

echo var_dump($GLOBALS);// USED TO PRINT ALL GLOBAL VARIABLES USED IN THIS FILES
echo var_dump($GLOBALS["y"]); // USED TO PRINT VALUE OF SPECIFC GLOBAL VARIABLE




?>


</body>
</html>
