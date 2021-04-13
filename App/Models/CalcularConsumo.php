<?php


namespace App\Models;


trait CalcularConsumo
{
    public function calculoLuz($totalVoltios, $costoVoltio)
    {
        echo "El consumo fue de: ".($totalVoltios * $costoVoltio);
    }
}