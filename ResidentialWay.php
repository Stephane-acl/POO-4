<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{

    public function addVehicle($vehicles)
    {
        if($vehicles instanceof Vehicle) {

           $this->currentVehicles[] = $vehicles;

        }
    }
}