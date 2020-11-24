<?php

    final class PedestrianWay extends HighWay
    {
        protected $nbLane = 1;
        protected $MaxSpeed = 10;

        public function addVehicle(Vehicle $vehicle)
		{
			if($vehicle instanceof Bike || $vehicle instanceof Skateboard) {

				$this->setCurrentVehicles($vehicle);
			}
		}
    }