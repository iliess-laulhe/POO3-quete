<?php


abstract class HighWay
{
  protected $currentVehicles;
  protected $nbLane;
  protected $maxSpeed;

      

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
   
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
   
        $this->nbLane = $nbLane;
    }
 
    public function getMaxSpeed(): int
  {
      return $this->maxSpeed;
  }

    public function setMaxSpeed(int $maxSpeed): void
  {
 
      $this->maxSpeed = $maxSpeed;
  }
 
 
  abstract public function addVehicle(Vehicule $vehicule);
}


?>