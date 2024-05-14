<pre>

<?php

function test_odd($var)
{
    return($var  &  1);
}

$s1 = array(1,3,2,3,4);

print_r(array_filter($s1,"test_odd"));

?>
</pre>