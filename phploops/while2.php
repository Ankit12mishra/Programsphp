<!-- with the break statement we can stop the loop even if the condition is dtill true. -->

<?php

$i = 1;

while($i < 6)
{
    if($i == 5)break;
    echo $i;
    $i++;
}

?>