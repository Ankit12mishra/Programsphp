<!-- The break statement can be used to jump out of a do...while loop. -->

<?php

$i = 1;

do{
    if($i == 3) break;
    echo $i . "<br>";
    $i++;
}while($i < 6);

?>