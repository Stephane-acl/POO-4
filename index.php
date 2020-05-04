<?php

require_once 'Car.php';

require_once 'Bicycle.php';

require_once 'Truck.php';

require_once 'HighWay.php';

require_once 'SkateBoard.php';


/* Quest POO 1 ET 2 */

$truck = new Truck('red', 3, 'fuel', 80);

$truck->setNbWheels(8);
$truck->setCurrentSpeed(3);

$truck->setCapacity(150);
echo $truck->getCapacity();
$truck->setLoading(100);
var_dump($truck);
echo "<br>";
echo $truck->getLoading();
echo "<br>";
echo $truck->forward();
echo "<br>";
echo $truck->brake();
echo "<br>";
echo $truck->currentCapacity($truck->getCapacity(), $truck->getLoading());
echo "<br>";
$truck->setLoading(300);
echo "<br>";
echo $truck->currentCapacity($truck->getCapacity(), $truck->getLoading());
var_dump($truck);


$bicycle = new Bicycle('blue', 1);

$bicycle->setNbWheels(2);
$bicycle->setCurrentSpeed(1);


echo $bicycle->start();
echo '<br> Start of the bicycle : ' . $bicycle->getCurrentSpeed() . 'km/h' . '<br>';

echo $bicycle->forward();
echo '<br> Speed of the bicycle : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';

echo $bicycle->brake();
echo '<br> Speed of bicycle : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();

var_dump($bicycle);

$peugeot = new Car('green', 5, 'electric');
$peugeot->setNbWheels(4);
$peugeot->setCurrentSpeed(3);
$peugeot->setEnergyLevel(60);

echo $peugeot->start();
echo '<br> Start of car : ' . $peugeot->getCurrentSpeed() . 'km/h' . '<br>';

echo $peugeot->forward();
echo '<br> Speed of car : ' . $peugeot->getCurrentSpeed() . ' km/h' . '<br>';

echo $peugeot->brake();
echo '<br> Speed of car : ' . $peugeot->getCurrentSpeed() . ' km/h' . '<br>';
echo $peugeot->brake();



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
$milhouseBike = new Bicycle('orange', 1);
$flandersSkate = new  SkateBoard('red', 0);

$pavement = new PedestrianWay();

$pavement-> setNbLane(1);
$pavement->setMaxSpeed(10);
$pavement->addVehicle($bartBike);
$pavement->addVehicle($milhouseBike);
$pavement->addVehicle($flandersSkate);

$milhouseBike->setNbWheels(2);
$milhouseBike->setCurrentSpeed(8);



var_dump($pavement);



//QUEST POO 4

CONST BR ='</br>';

$porsche->setParkBrake(true);

try {
    $porsche->start();
    echo BR;
} catch (Exception $e) {
    echo 'Be careful ! Release your park brake!';
    echo $porsche->changePositionParkBrake();
    echo $porsche->setParkBrake(false);
    echo BR;
} finally {
    echo 'Ma voiture roule comme un donut';
    echo BR;
}
echo $porsche->getCurrentSpeed();

var_dump($peugeot);


//QUEST POO 6

require_once 'Speedometer.php';

echo Speedometer::convertKmToMiles(10);

echo Speedometer::convertMilestoKm(10);

