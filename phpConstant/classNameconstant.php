<?php
namespace myArea;

class Vehcles {
    public function ourVehcle(){
        return Vehcles::class;
    }
}

?>

<!DOCTYPE html>
<html>
    <body>

    <?php
$Cars = new Vehcles();
echo $Cars->ourVehcle();

?>
