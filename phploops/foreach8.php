<!-- The foreach loop syntax can also be written with the endforeach statement -->

<?php

$colors = array("red", "green", "blue", "red");

foreach ($colors as $x):
    echo "$x <br>";
endforeach;

?>