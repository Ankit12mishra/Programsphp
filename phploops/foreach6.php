<!-- By default, changing an array item will not affect the original array -->
<pre>
<?php

$color = array("red", "blue", "green", "yellow");

foreach($color as $x){
    if($x == "blue") $x = "pink";
}

var_dump($color);

?>
</pre>