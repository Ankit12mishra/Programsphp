<?php

$a = array("Volvo","BMW","Toyota");
$b = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

$a = (object) $a;
$b = (object) $b;

var_dump($a);
echo "<br>";
var_dump($b);


?>