<!-- With the continue statement we can stop the current iteration, and continue with the next: -->

<?php

for($i = 0; $i <= 10; $i++){
    if($i == 3)continue;
    echo "the number is : $i  <br>";
}

?>