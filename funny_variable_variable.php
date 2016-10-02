<?php 

/*This code were collected from here http://stackoverflow.com/questions/746224/are-there-pointers-in-php*/
/*I was searching for if there is anyting like pointer in c is present in php then i found this qa*/


$a="b";
$b="c";
$c="d";
$d="e";
$e="f";

echo $a."-";
echo $$a."-";   //Same as $b
echo $$$a."-";  //Same as $$b or $c
echo $$$$a."-"; //Same as $$$b or $$c or $d
echo $$$$$a;    //Same as $$$$b or $$$c or $$d or $e

?>