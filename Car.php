<?php


require_once 'Vehicle.php';

class Car extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */

    private $hasParkBrake;


    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake() : bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function changePositionParkBrake() {
        if ($this->hasParkBrake == false) {
            return 'Park brake : off';
        } else {
            $this->hasParkBrake = true;
            return 'Park brake : on';
        }
    }

    public function start()
    {
        if ($this->hasParkBrake == true) {
            throw new Exception('Be careful ! Release your park brake!');
        }
        $this->currentSpeed;
    }

}


