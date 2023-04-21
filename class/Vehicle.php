<?php
  // Classe genérica
  class Vehicle {
    public $model; 
    public $color;
    public $brand;

    public function StartVehicle() {
      echo "</br></br>start vehicle OK!";
    }

    public function TurnOffTheVehicle() {
      echo "</br></br>turn off the vehicle OK!</br></br>";
    }
  }

  // Classe Carro
  class Car extends Vehicle {}

  // Classe Moto
  class Motorbike extends Vehicle {}
