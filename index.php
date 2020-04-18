<?php

require_once 'Car.php';

require_once 'Bicycle.php';

require_once 'Truck.php';

require_once 'HighWay.php';



//QUEST POO 3

$porsche = new Car('red',2,'fuel');

$porsche->setNbWheels(4);
$porsche->setCurrentSpeed(130);
$porsche->setEnergyLevel(20);

$volvo = new Car('blue', 5, 'electric');



require_once 'MotorWay.php';

$autoroute = new MotorWay();

$autoroute->setNbLane(4);
$autoroute->setMaxSpeed(130);
$autoroute->addVehicle($porsche);

$autoroute->addVehicle($volvo);

var_dump($autoroute);


require_once 'ResidentialWay.php';

$homerTruck = new Vehicle('green', 3);

$homerTruck->setNbWheels(8);
$homerTruck->setCurrentSpeed(30);


$residentialRoad = new ResidentialWay();

$residentialRoad->setNbLane(2);
$residentialRoad->setMaxSpeed(50);
$residentialRoad->addVehicle($homerTruck);

var_dump($residentialRoad);


require_once 'PedestrianWay.php';

$bartBike = new Bicycle('yellow', 1);

$bartBike->setNbWheels(2);
$bartBike->setCurrentSpeed(10);

$pavement = new PedestrianWay();

$pavement-> setNbLane(1);
$pavement->setMaxSpeed(10);
$pavement->addVehicle($bartBike);

$milhouseBike = new Bicycle('orange', 1);

$milhouseBike->setNbWheels(2);
$milhouseBike->setCurrentSpeed(8);

$pavement->addVehicle($milhouseBike);

var_dump($pavement);



//QUEST POO 4

CONST BR ='</br>';

$porsche->setParkBrake(true);

try {
    $porsche->start();
    echo BR;
} catch (Exception $e) {
    echo 'Be careful ! Release your park brake!';
    echo $porsche->setParkBrake(false);
    echo BR;
} finally {
    echo 'Ma voiture roule comme un donut';
    echo BR;
}
echo $porsche->getCurrentSpeed();