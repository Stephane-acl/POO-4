<?php

require_once 'Vehicle.php';
require_once 'RechargeableInterface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{

    private $energyLevel;

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct('Purple', 1);

    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function charge(int $percentage): int
    {
        $charge = $this->getEnergyLevel();
        $this->energyLevel += $percentage;
    }

    public function unLoad(int $percentage): int
    {
        $charge = $this->getEnergyLevel();
        $this->energyLevel -= $percentage;
    }

}