<?php

namespace App\Models;

class Lavadora
{
    /* Propiedades - Atributos */
    private string $color = "Blanco";
    private string $marca;
    private int $numeroSerie;
    private float $capacidad;
    private string $fechaLanzamiento; //Carbon
    private float $voltaje;
    private String $estado; // PHP 8 ENUM

    /* Acciones - Metodos */
    /**
     * Lavadora constructor.
     * @param string $color
     * @param string $marca
     * @param int $numeroSerie
     * @param float $capacidad
     * @param string $fechaLanzamiento
     * @param float $voltaje
     */
    public function __construct(
        string $color = "",
        string $marca = "",
        int $numeroSerie = 0,
        float $capacidad = 0.0,
        string $fechaLanzamiento = "",
        float $voltaje = 0.0,
        string $estado = "Activa"
    )
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->numeroSerie = $numeroSerie;
        $this->capacidad = $capacidad;
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->voltaje = $voltaje;
        $this->estado = $estado;
    }

    public function __destruct()
    {
        echo "El objeto fue destruido";
    }

    public function __toString(): string
    {
        return "\n"."Color: ".$this->getColor()."\n".
            "Marca: ".$this->getMarca()."\n".
            "Numero de Serie: ".$this->getNumeroSerie()."\n".
            "Capacidad: ".$this->getCapacidad()."\n".
            "Fecha Lanzamiento: ".$this->getFechaLanzamiento()."\n".
            "Voltaje: ".$this->getVoltaje()."\n".
            "Estado: ".$this->getEstado()."\n";
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return int
     */
    public function getNumeroSerie(): int
    {
        return $this->numeroSerie;
    }

    /**
     * @param int $numeroSerie
     */
    public function setNumeroSerie(int $numeroSerie): void
    {
        $this->numeroSerie = $numeroSerie;
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
    public function getFechaLanzamiento(): string
    {
        return $this->fechaLanzamiento;
    }

    /**
     * @param string $fechaLanzamiento
     */
    public function setFechaLanzamiento(string $fechaLanzamiento): void
    {
        $this->fechaLanzamiento = $fechaLanzamiento;
    }

    /**
     * @return float
     */
    public function getVoltaje(): float
    {
        return $this->voltaje;
    }

    /**
     * @param float $voltaje
     */
    public function setVoltaje(float $voltaje): void
    {
        $this->voltaje = $voltaje;
    }

    /**
     * @return String
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param String $estado
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

}