<pre>
<?php

$a = array (
array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name'  =>  'Griffin',
),

array(
    'id' => 5456,
    'first_name' => 'Ankit',
    'last_name'  =>  'Mishra',
),

array(
    'id' => 4736,
    'first_name' => 'sujeet',
    'last_name'  =>  'verma',
)
);

$first_names = array_column($a, 'first_name');

print_r($first_names);

?>
</pre>