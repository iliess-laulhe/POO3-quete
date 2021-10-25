<?php
class Bicycle
{
   private  $color;
   private   $nbWheels; 
   private   $nbSeats ;
   private   $currentSpeed ; 
   private   $typeEnergie ;
   private   $fuelLevel ;

   public function __construct($color, $nbSeats)
    {
     $this->color = $color;
     $this->nbSeats = $nbSeats;
     
    }



public function forward(): string
	
 {
$this->currentSpeed = 20;

   return "lets go";
}

public function brake(): string{
$sentence = "";
 while ($this->currentSpeed > 0) {
 $this->currentSpeed-=5;
 $sentence .= "Brake !!!";
 }
 $sentence .= "I'm stopped !";
return $sentence;
}



 public function getColor(): string
{  
  return $this->color;
 }

 public function getCurrentSpeed(): int 
 {
 return $this->currentSpeed;
  }


 public function getNbWheels(): int
 {
  return $this->nbWheels;
 }
	
 public function getNbSeats() : int
 {
  return $this->nbSeats;
 }

 public function getFuelLevel():int {
 return $this->fuelLevel;
 }
        
 public function getTypeEnergie(): string {

   return $this->typeEnergie;
 }
}