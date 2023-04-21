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

  // Instanciando classes Car e Motorbike
  $car = new Car();
  $motorbike = new Motorbike();

  // Verificando os atributos estendidos disponíveis da classe genérica Vehicle
  var_dump($car);

  // Chamando os métodos de carro e moto
  $car->StartVehicle();
  $motorbike->TurnOffTheVehicle();
