<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */

    private $capacity;
    /**
     * @var integer
     */
    private $loading = 0;


    public function __construct(string $color, int $nbSeats,string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;

    }


    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): int
    {
        return $this->capacity = $capacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): int
    {
        if ($loading <= $this->capacity) {
            return $this->loading = $loading;
        }else {
            return $this->loading = $this ->capacity;
        }
    }

    public function currentCapacity(int $stock, int $load) : string {
        if ($stock > $load) {
            return "in filling";
        } elseif ($stock == $load) {
            return "full";
        }
    }

}
