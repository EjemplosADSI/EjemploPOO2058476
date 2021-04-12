<?php

include "../Models/Lavadora.php";
use App\Models\Lavadora;

echo "<pre>";

$lavadoraLG = new Lavadora();
$lavadoraLG->setMarca("LG");
$lavadoraLG->setColor("Negro");
echo "La lavadora ".$lavadoraLG->getMarca()." es de color: ".$lavadoraLG->getColor();
$lavadoraSamsung = new Lavadora("Verde","Samsung",123456, 32.5,"2021-01-01",300, "Activa");
echo $lavadoraSamsung;

echo "</pre>";