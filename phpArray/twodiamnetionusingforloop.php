<?php

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Oddy",5,2),
    array("Land Rover",17,15)
);

for($row = 0; $row < 4; $row++)
{
    echo "<p><h1> Row number $row</h1> </p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++)
    {
        echo "<li>" .$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

?>