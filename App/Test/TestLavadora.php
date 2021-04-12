<?php

include "../Models/Lavadora.php";
use App\Models\Lavadora;

echo "<pre>";

$lavadoraLG = new Lavadora();
$lavadoraLG->setMarca("LG");
$lavadoraLG->setColor("Negro");
echo "La lavadora ".$lavadoraLG->getMarca()." es de color: ".$lavadoraLG->getColor();
$lavadoraSamsung = new Lavadora("Verde","Samsung",123456, 32.5,"2021-01-01",300, "Activa");
$lavadoraLG->create();
$lavadoraLG->edit();
$lavadoraLG->search("Nombre", "Diego");
$lavadoraLG->searchAll();
$lavadoraLG->searchForId(1);
$lavadoraLG->deleted(1);
$lavadoraLG->agregarRopa(5,35.6);
//echo $lavadoraSamsung;

echo "</pre>";