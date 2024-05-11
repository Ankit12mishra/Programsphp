<?php

class Fruits {
    public function yourValue(){
        return __METHOD__;
    }
}
$apple = new Fruits();
echo $apple->yourValue();

?>