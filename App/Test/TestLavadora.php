<?php

include "../Models/Lavadora.php";
use App\Models\Lavadora;

$lavadoraLG = new Lavadora();
$lavadoraLG->setMarca("LG");
$lavadoraLG->setColor("Negro");

echo "La lavadora ".$lavadoraLG->getMarca()." es de color: ".$lavadoraLG->getColor();