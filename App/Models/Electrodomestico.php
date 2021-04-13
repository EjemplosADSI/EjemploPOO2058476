<?php


namespace App\Models;


abstract class Electrodomestico
{
    protected float $voltaje;
    protected float $consumoWatts;
    protected string $color;
    protected string $marca;
    protected int $numeroSerie;
    protected string $fechaLanzamiento; //Carbon
    protected string $modelo;

    abstract protected function encendido();
    abstract protected function apagado();

    /**
     * Electrodomestico constructor.
     * @param float $voltaje
     * @param float $consumoWatts
     * @param string $color
     * @param string $marca
     * @param int $numeroSerie
     * @param string $fechaLanzamiento
     * @param string $modelo
     */
    public function __construct(
        float $voltaje = 0.0,
        float $consumoWatts = 0.0,
        string $color = "",
        string $marca = "",
        int $numeroSerie = 0,
        string $fechaLanzamiento = "",
        string $modelo = ""
    )
    {
        $this->voltaje = $voltaje;
        $this->consumoWatts = $consumoWatts;
        $this->color = $color;
        $this->marca = $marca;
        $this->numeroSerie = $numeroSerie;
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->modelo = $modelo;
    }

    public function __destruct()
    {
        echo "Destructor en Padre";
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
     * @return float
     */
    public function getConsumoWatts(): float
    {
        return $this->consumoWatts;
    }

    /**
     * @param float $consumoWatts
     */
    public function setConsumoWatts(float $consumoWatts): void
    {
        $this->consumoWatts = $consumoWatts;
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
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function __toString(): string
    {
        return "\n"."Voltaje: ".$this->getVoltaje()."\n".
            "Consumo Watts: ".$this->getConsumoWatts()."\n".
            "Color: ".$this->getColor()."\n".
            "Marca: ".$this->getMarca()."\n".
            "Numero de Serie: ".$this->getNumeroSerie()."\n".
            "Fecha Lanzamiento: ".$this->getFechaLanzamiento()."\n".
            "Modelo: ".$this->getModelo()."\n";
    }

    /**
     * @param String $campo
     * @param String $valor
     * @return array|null
     */
    public function apagar(): ?bool
    {
        echo "Se apago la lavadora"."\n";
        return true;
    }

}