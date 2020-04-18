<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{

    public function addVehicle($bike)
    {
        if ($bike instanceof Bicycle) {

            $this->currentVehicles[] = $bike;
        }
    }
}