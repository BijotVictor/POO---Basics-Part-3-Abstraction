<?php

    require 'Vehicle.php';

    class Bike extends Vehicle
    {
        public function __construct(string $color, int $seatsNumber)
        {
            parent::__construct($color, $seatsNumber);
        }

        
    }