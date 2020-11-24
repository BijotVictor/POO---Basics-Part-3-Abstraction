<?php
    require 'Bike.php'; require 'Car.php'; require 'HighWay.php'; require 'MotorWay.php';
    require 'PedestrianWay.php'; require 'ResidentialWay.php'; require 'Skateboard.php';
    require 'Truck.php';

    $bike = new Bike('Blue', 2);
    $car = new Car('White', 5, 'fuel');
    $skateboard = new Skateboard('Black', 1);


    $pedestrian = new PedestrianWay();
    $pedestrian->addVehicle($bike);
    $pedestrian->addVehicle($car);

    var_dump($pedestrian);

    $residential = new ResidentialWay();
    $residential->addVehicle($bike);
    $residential->addVehicle($car);

    var_dump($residential);

    $motor = new MotorWay();
    $motor->addVehicle($bike);
    $motor->addVehicle($car);

    var_dump($motor);



