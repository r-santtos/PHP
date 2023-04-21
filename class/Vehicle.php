<?php
  // Classe abstrata
  abstract class Vehicle {
    public $model; 
    public $color;
    public $brand;

    abstract protected function StartVehicle();
    abstract protected function TurnOffTheVehicle();
  }

  // Classe Carro
  class Car extends Vehicle {
    public function StartVehicle() {
      echo "</br></br>start vehicle OK!";
    }
    public function TurnOffTheVehicle() {
      echo "</br></br>turn off the vehicle OK!";
    }
  }

  // Classe Moto
  class Motorbike extends Vehicle {
    public function StartVehicle() {
      echo "</br></br>start vehicle OK!";
    }

    public function TurnOffTheVehicle() {
      echo "</br></br>turn off the vehicle OK!";
    }
  }
