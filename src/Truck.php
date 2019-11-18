<?php
require_once 'Vehicle.php';
class Truck extends Vehicle {
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;

    private $energyLevel;
    private $capacity;
    private $load = 0;
    public function __construct(int $capacity,string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    public function getLoad(): string
    {
        $filling = "";
        if ($this->load < $this->capacity) {
            $filling .= "In filling";
        }
        else{
            $filling .= "Full";
        }
        return $filling;
    }
    public function setLoad(string $load){
        $this->load = $load;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}