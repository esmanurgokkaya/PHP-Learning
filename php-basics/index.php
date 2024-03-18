
    
<!-- we can use php in the html  -->
 <!-- we can display the strings, numbers, data etc. with echo 
 -->
<!-- we also can use the html tags in echo  to make our page more interactive and attractive -->
<!-- string together with dot
 -->

 <!-- converted  -->


 <!-- we can write types the variables with gettype() function  -->
 <!-- var_dump() use for return  all information about a variable value and length and type 
 -->
<!-- we can check the variables with functions is_string is_int is_bool is_double 
 -->

 <!-- if declared and have a value return true with isset  -->

 <!-- constants is declaring with define() function  -->

 <!-- this is php built-in constants that are sort_asc php_int_max etc (write with uppercase) -->

 <!-- declaring numbers 
 -->
 <!-- aritmetic  operations: + - * / % ++ -- += -= *= /= %= <<= >>  -->
 <!-- assignment with operation  =     +=  -= *= /= %= .= .= []=   &= ^= | = <<= >>= **= .=  -->

 <!-- increment and decrement operations ++$a $a++ --$a $a-- 
 -->

 <!-- number checking functions is check the type of number is_float is_double etc.(is_numeric, )
 -->
 <!-- conversion is using for changing the vars type $var = (type)$change; type might be float int string etc  
and can use floatval, intval funcs -->
<!-- 
number funcs is abs() mutlak, round() yuvarlama, pow(base, exponent)kuvvet, sqrt()kök, log(), exp(), pi(), degrees(), radians()
max() min() floor() ceil() -->

<!-- formatting  number is  number_format($var ,decimal num, decimal show style, thousand show style); // -->

<!-- difference is double and single quotes: in the single quotes we cant add a var like $name we have to close single quotes, add dot and var like 'a string' . $name 

but in the double quotes we can use vars in string like "a string $name "  -->

<!-- for string concatenation using dot      like 'a sting '.'a string '  -->

<!-- string funcs  php_eol
strlen(string), strpos(), substr(), strtoupper(), strtolower(), ucwords(), ltrim(), rtrim(), trim() 
str_word_count() strrev() ucfirst() lcfirst() stripos() str_replace()  str_ireplace() strcmp() str_split() 
-->

<!-- if a string is multiline  it will be one line without nl2br(); and we can use html tags in string and
 its work like a html tag but if we dont want to act like html tag, have to use htmlentities() func  -->

<!-- arrays  -->

<!-- for declare array 
$name = [];
$name = array();  using this  -->
<!-- 
print the whole array using var_dump($array)  or print_r($array); 
i can be use pre tags for the array look neat
echo '<pre>'
    var_dump($array)
echo '</pre>' -->

<!-- reaching the elements in the array by index -> $array[index] 
we can set and get value by index -->

<!-- with isset we can check the array have a element that index  or not.
isset($array[5]) -->
<!-- 
append a element for the end  of the array    
$arr[]=value;  -->

<!-- count() function is count the elements of the array  -->


<!-- add a element at the end of the array with function   
array_push($array,'element') -->

<!-- remove a element from the end of the array with function   
array_pop($array) and this return the deleted element  -->

<!-- add element at the beginning  of the array  with function   
array_unshift -->

<!-- 
remove element from the beginning of the array with function    
array_shift -->



<!-- remove an element from the array  with function   
unset($array[0]);    -->
<!-- 
split the string into an array   
$string='hello world';  and can be use  with comma 
$explode= explode(' ', $string);   //it will give ['hello','world'] as output
 -->
<!-- 
 combine array elements into string  using implode function
 implode("a sign", $array) ->  like banana&apple ....

-->

<!-- check if element exist in the  array or not
in_array('banana',$fruits) return true or false  -->

<!-- search element index in the array 
array_search( 'banana' , $fruits ); returns element index -->

<!-- merge two array  
 array_merge($arr1, $arr2); -->



<!-- sorting of the array by alphabetic
sor($array)
reverse sort is rsort($array) -->

<!-- associative arrays  are used when we need to store key value pair data.
$array = [
    'key ' => 'value',
    'key ' => 'value',
    'key ' => 'value'..
    ] -->

 <!-- get element $array[key]  
 set element  $array[key]=value; -->
<!-- 
 null coalescing assignment operator
 $array[key] = $array[key] ??= 'value' if key does not exist  it assign value otherwise keep its old value
 -->

 <!-- check if array has specific key  -->

 <!-- print the keys of array 
 array_key($array) -->

 <!-- print the values 
 array_values($array) -->

<!-- 
 sorting array by value
 asort($array)
ksort($array) this sorting by key -->
<!-- 
 two dimensional arrays using like this 
$array = [
    ['key ' => 'value',
    'key ' => 'value'],
    ['key ' => 'value',
    'key ' => 'value'],
    ['key ' => 'value',
    'key ' => 'value']
    ] -->

    <!-- conditionals  -->

    <!-- sample if if(age===20){echo 1} 
    without circle braces  you can write just age==20 echo 1 
sample if else they are basic -->
<!-- 
difference  between == and === in php 
- when comparing strings, PHP will convert them to numbers first before comparison. So "3" is equal to "3a".
- When comparing numeric values, PHP doesn't need conversion. So "3" is not equal to "3a".
- The strict equality operator (===) checks both type and value whereas the equality operator (==) only checks the value. -->

<!-- using and or  xor operators with conditions  -->

<!-- ternary if  else statement 
$value  = ($condition) ? 'true':'false'; -->

<!-- short ternary  operator   
$value= $condition?:'false';   //if true then assigns nothing , otherwise false if the value exist and not null true -->

<!-- null coalescing  operator   
$value = isset($var)? $var : 'a name'; 
$var ?? 'a name ' if exist and not null -->


<!-- switch($var){
    case 'a value':
        something;
        break;
    default:
    something;
    break;     
} -->



<!-- loops  -->

<!-- while  -->

<!-- loop with $counter 

while loop count for the end -->



<!-- do while  
differences while and this  are that  
the condition of a while loop is checked after each iteration,  whereas the condition of a do...while loop is tested at the beginning of the loop.
1. The condition of a while loop is tested at the beginning of each pass through the loop whereas the condition of a do...while loop is
--> 

<!-- for  

-->

<!-- foreach 

using with array 
 foreach(array as key => value) { }
 foreach(array as value) { }

-->

<!-- iterate over associative array 
person array name surname age and hobbies array 
for the print this using if inside the foreach if(is_array) 

 foreach (new ArrayIterator($arr) as $key=>$val) {}

foreach ($it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $file) {
    echo "$file\n";
}l
-->


<!-- functions 

-->

<!-- function keyword name and () using 
for the call name()  -->


<!-- function with argument (argument) { return "this is an argument" + argument; }
echo with argument("hello"); -->

<!-- create sum of two function add($a, $b){return $a+$b;} 
add 5 and 10 
echo add(5,10); -->


<!-- create function to sum all  elements in array  
function sumArray($arr){
	$sum=0;
	foreach($arr as $element){
		$sum+=$element;
	}
	return $sum;
}

echo sumArray([2,4,6,8]);  

OR

function sum( ...$args ) { 
     return array_sum($args); 
     OR 
     $sum=0;
	foreach($args as $element){
		$sum+=$element;
	}
}  

echo sum(3,4,5);
-->



<!-- arrow functions  
function sum(...$num){
    array_reduce ($num, fn($carry , $n) => $carry +  $n);
} -->

<!-- dates  -->


<!-- print current date 
date("d-m-Y");
or 
date('Y-m-d H:i:s'); -->

<!-- print yesterday

date('Y-m-d H:i:s', time()-60*60*24); -->


<!-- different format 
date('F j Y, H:i:s') -->


<!-- print current timestamp
time();  -->

<!-- parse date 
date_parse('2020-10-12 09:00:00');
print with var_dump -->


<!-- parse date from format
date_parse_from_format('j/n/Y H:i', '12/10/2020 09:00');
print with var_dump -->









<?php
//  $a = 4;
//  echo ++$a; this is add  one to the number of $a
//  echo $a++;  this is print the number of $a and add  one to it but do not print
// echo $a++;  print 4 and add 1
// echo ++$a; add 1 and print 6 



 ?>
