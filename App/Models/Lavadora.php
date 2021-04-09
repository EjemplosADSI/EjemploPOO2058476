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
        float $voltaje = 0.0
    )
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->numeroSerie = $numeroSerie;
        $this->capacidad = $capacidad;
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->voltaje = $voltaje;
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
            "Voltaje: ".$this->getVoltaje()."\n";
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



}