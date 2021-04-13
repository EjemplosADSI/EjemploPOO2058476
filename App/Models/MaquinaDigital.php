<?php
namespace App\Models;

interface MaquinaDigital
{
    public function mostrarResultado(string $cadena);
    public function reiniciarSistema($boton):bool;
    public function oprimirPanelTactil();

}