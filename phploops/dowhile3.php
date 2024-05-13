<!-- With the break statement we can stop the loop even if the condition is still true: -->

<?php

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

?>