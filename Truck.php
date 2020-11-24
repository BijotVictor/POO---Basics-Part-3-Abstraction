<?php

    class Truck extends Vehicle
    {
        protected $storageCapacity;
        protected $load;
        protected $energy;
        protected $energyLevel;
        const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];

        public function __construct(string $color, int $seatsNumber, string $energy, int $storageCapacity)
        {
            parent::__construct($color, $seatsNumber);
            $this->load = 0;
            $this->setStorageCapacity($storageCapacity);
            $this->setEnergy($energy);
        }
        public function full(){
            if($this->load === $this->storageCapacity){
                return "full";
            }
            else{
                return "in filling";
            }
        }
        //Setter 

        public function setStorageCapacity(int $storageCapacity){
            $this->storageCapacity = $storageCapacity;
        }
        public function setEnergy(string $energy){
            if (in_array($energy, self::ALLOWED_ENERGIES)){
                $this->energy = $energy;
            } else {
                return $this->energy = 'Invalid energy';
            }
        }
        public function setLoad($load){
            $this->load = $load;
        }

        //Getter

        public function getLoad(){
            return $this->load;
        }
        public function getStorageCapacity(){
            return $this->storageCapacity;
        }
        public function getEnergy(){
            return $this->energy;
        }

        

    }