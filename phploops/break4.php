<!-- The break statement can be used to jump out of a foreach loop. -->

<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

?>