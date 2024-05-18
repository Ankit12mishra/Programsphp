<?php

$int = 100;

if(!filter_var($int, FILTER_VALIDATE_INT) ===   false){
    echo("Integer is vald");
}else{
    echo("Integer is not valid");
}
?>