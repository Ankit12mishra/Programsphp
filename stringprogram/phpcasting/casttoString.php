<!-- Cast to String -->

<?php

$a = 5;  //integer
$b = 5.34; //float
$c = "hello"; //string
$d = true;   //boolean
$e = NULL;  //null


$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);


?>