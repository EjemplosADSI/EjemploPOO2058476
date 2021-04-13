<?php
namespace App\Models;
include "Electrodomestico.php";
include "MaquinaDigital.php";
include "CalcularConsumo.php";
use App\Models\Electrodomestico;

class Lavadora extends Electrodomestico implements MaquinaDigital, \JsonSerializable
{
    use CalcularConsumo;

    /* Propiedades - Atributos */
    private float $capacidad;
    private String $estado; // PHP 8 ENUM

    /* Acciones - Metodos */
    /**
     * Lavadora constructor.
     * @param float $capacidad
     */
    public function __construct(
        string $color = "",
        string $marca = "",
        string $modelo = "",
        int $numeroSerie = 0,
        float $capacidad = 0.0,
        string $fechaLanzamiento = "",
        float $voltaje = 0.0,
        float $consumoWatts = 0.0,
        string $estado = "Activa"
    )
    {
        parent::__construct();
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numeroSerie = $numeroSerie;
        $this->capacidad = $capacidad;
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->voltaje = $voltaje;
        $this->consumoWatts = $consumoWatts;
        $this->estado = $estado;
    }

    public function __destruct()
    {
        echo "El objeto fue destruido";
    }

    public function __toString(): string
    {
        return parent::__toString()."\n"."Capacidad: ".$this->getCapacidad()."\n".
            "Estado: ".$this->getEstado()."\n";
    }

    /**
     * @return float
     */
    public function getCapacidad(): float
    {
        return $this->capacidad;
    }

    /**
     * @param float $capacidad
     */
    public function setCapacidad(float $capacidad): void
    {
        $this->capacidad = $capacidad;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @param
     * @return bool
     */
    public function create(): bool
    {
        if($this->getMarca() != null){
            echo "Se inserto la lavadora: ".$this->getMarca()."\n";
            return true;
        }else{
            echo "No se encontraron datos de la lavadora"."\n";
            return false;
        }
    }

    /**
     * @param
     * @return bool
     */
    public function edit(): bool
    {
        if($this->getMarca() != null){
            echo "Se actualizo la lavadora: ".$this->getMarca()."\n";
            return true;
        }else{
            echo "No se encontraron datos de la lavadora"."\n";
            return false;
        }
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function search(String $campo, String $valor): ?array
    {
        if(!empty($campo) && !empty($valor)){
            echo "Se busco la cadena: ".$valor." en la columna: ".$campo."\n";

            return array();
        }else{
            echo "No se enviaron parametros de busqueda"."\n";
            return null;
        }
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function searchAll(): ?array
    {
        $query = "SELECT * FROM TABLA";
        echo "Se realizo la busqueda con el query: ".$query." se devolvieron los resultados"."\n";
        return array();
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function searchForId(int $Id): ?Lavadora
    {
        $query = "SELECT * FROM TABLA WHERE id = ".$Id;
        echo "Se realizo la busqueda con el ID: ".$Id." y se devolvio el objeto"."\n";
        return null;
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function deleted(int $IdLavadora): ?bool
    {
        $lavadoraEliminar = $this->searchForId($IdLavadora);
        if(!empty($lavadoraEliminar)){
            $lavadoraEliminar->setEstado("Inactiva");
            echo "Se cambio el estado de la lavadora con ".$IdLavadora." a inactivo"."\n";
            return true;
        }else{
            echo "NO se encontro la lavadora con el ID: ".$IdLavadora."\n";
            return false;
        }
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function agregarRopa(int $numeroPrendas, float $peso): ?bool
    {
        echo "se agrego ropa a la lavadora"."\n";
        return null;
    }

    protected function encendido()
    {
        // TODO: Implement encendido() method.
    }

    protected function apagado()
    {
        // TODO: Implement apagado() method.
    }

    public function mostrarResultado(string $cadena)
    {
        // TODO: Implement mostrarResultado() method.
    }

    public function reiniciarSistema($boton):bool
    {
        return true;
    }

    public function oprimirPanelTactil()
    {
        // TODO: Implement oprimirPanelTactil() method.
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}