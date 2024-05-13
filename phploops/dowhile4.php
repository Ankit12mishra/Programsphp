<!-- With the continue statement we can stop the current iteration, and continue with the next: -->

<?php

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);


?>