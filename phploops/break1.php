<!-- The break statement can be used to jump out of a for loop. -->
<!-- Jump out of the loop when $x is 4: -->
<?php

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

?>