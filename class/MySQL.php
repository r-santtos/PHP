<?php
  class MySQL {
    // Mock Banco de Dados
    private $mock_user = "rsanttos.dev@gmail.com";
    private $mock_password = "123456";

    // Atributos da classe MySQL
    private $user;
    private $pass;

    // Método construtor da classe MySQL
    //-------------------------------------------------
    public function __construct($user, $password) {
      $this->setUser($user);
      $this->setPass($password);
    }

    // GET & SET do USER
    //-------------------------------------------------
    public function getUser() {
      return $this->user;
    }
    public function setUser($parameter) {
      $this->user = $parameter;
    }

    // GET & SET do PASSWORD
    //-------------------------------------------------
    public function getPass() {
      return $this->pass;
    }
    public function setPass($parameter) {
      $this->pass = $parameter;
    }

    // Método da classe Connections
    //-------------------------------------------------
    public function Connections() {
      if($this->user == $this->mock_user and $this->pass == $this->mock_password) {
        echo "Successful connections!";
      } else {
        echo "Connection error";
      }
    }
  }