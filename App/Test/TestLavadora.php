<?php

include "../Models/Lavadora.php";
use App\Models\Lavadora;

echo "<pre>";

$lavadoraLG = new Lavadora();
$lavadoraLG->setMarca("LG");
$lavadoraLG->setColor("Negro");
echo "La lavadora ".$lavadoraLG->getMarca()." es de color: ".$lavadoraLG->getColor();
$lavadoraSamsung = new Lavadora("Verde","Samsung","2021",123456, 32.5,"2021-01-01",500,300, "Activa");
$lavadoraLG->create();
$lavadoraLG->setModelo("2021");
$lavadoraLG->edit();
$lavadoraLG->search("Nombres", "Diego");
$lavadoraLG->searchAll();
$lavadoraLG->searchForId(1);
$lavadoraLG->deleted(1);
$lavadoraLG->agregarRopa(5,35.6);

$lavadoraLG->calculoLuz(123,456);
$lavadoraLG->encender();
$lavadoraLG->apagar();

//echo $lavadoraSamsung;

echo "</pre>";