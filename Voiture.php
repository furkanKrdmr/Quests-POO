<?php

class Voiture
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 10;


    public function __construct(int $nbWheels, string $color, string $energy, int $nbSeats)
    {
        $this->nbWheels = $nbWheels;
        $this->color = $color;
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;
    }



    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }
}
