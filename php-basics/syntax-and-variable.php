<?php

// echo is using for print something on the screen 

use function PHPSTORM_META\type;

echo "Hello World!"; 
echo  "<br>";

$name = 'Esma '; // this  is a variable we can use it later in our code

echo $name; // we can print like this 
echo  "<br>"; // this is used to make a new line
echo 'hello' . ' ' .  $name ; // or we can concatenate strings with variables like this 
echo  "<br>";

$num = 263; // this is a integer variable

// we can print types of variables with this method 
echo gettype($name);
echo  "<br>";

echo gettype($num);
echo  "<br>";

var_dump($name); // this  will give us all information about the variable, type , value ...etc  
echo  "<br>";
var_dump($num);
echo  "<br>";


echo 'is that a string '.is_string($name); // this  will return 1 if the variable is string  otherwise nothing  
echo '<br>';
echo  'is that a integer '.is_int($num); // this  will return 1 if the variable is  Integer  otherwise nothing 
echo '<br>';
echo 'is that a bool '.is_bool(true); // this   will return 1 if the variable is Boolean   otherwise nothing   
echo '<br>';
echo 'is that a double '.is_double(15.08); // this   will return 1 if the variable is Double     otherwise nothing   
echo '<br>';

echo 'result '. isset( $name ); // this will check if there is any thing assigned to that variable  and it will return true or 1 if yes otherwise false or nothing 
// this function return true or false inside  of an IF statement 
echo '<br>'; 

// declare a constants variable
define('PI', 3.14); // it  is not possible to change the value of a constant
// to print  the value of PI
echo PI;
echo '<br>'; 

// SORT_ASC  means that the array will be sorted from smallest to largest values.


 // gives us the maximum size for integers in PHP

