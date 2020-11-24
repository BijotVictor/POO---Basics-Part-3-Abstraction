<?php

    abstract class HighWay
    {

        /* @var array */

        protected $currentVehicles = [];

        /* @var int */

        protected $nbLane;

        /* @var int */

        protected $maxSpeed;

        //Getters

        public function getCurrentVehicles()
        {
            return $this->currentVehicles;
        }
        public function getNbLane()
        {
            return $this->nbLane;
        }
        public function getMaxSpeed()
        {
            return $this->maxSpeed;
        }


        //Setters

        public function setCurrentVehicles($currentVehicles): void
        {
            $this->currentVehicles[] = $currentVehicles;
        }
        public function setNbLane(int $nbLane)
        {
            $this->nbLane = $nbLane;
        }
        public function settMaxSpeed(int $maxSpeed)
        {
            $this->maxSpeed = $maxSpeed;
        }
        

        abstract public function addVehicle(Vehicle $vehicle);

    }