<?php     
  class SignIn {
    // Mock Banco de Dados
    private $mock_email = "rsanttos.dev@gmail.com";
    private $mock_password = "123456";
      
    // Atributos da classe Sign In
    private $email;
    private $pass;

    //--------------------------------------------------------
    // GET & SET DE EMAIL
    public function getEmail() {
      return $this->email;
    }
    public function setEmail(string $parameter) {
      $this->email = $parameter;
    }

    //--------------------------------------------------------
    // GET & SET DE PASS
    public function getPass() {
      return $this->pass;
    }
    public function setPass(string $parameter) {
      $this->pass = $parameter;
    }

    //--------------------------------------------------------
    // Método da classe SignIn
    public function Login() {
      if($this->email == $this->mock_email and $this->pass == $this->mock_password) {
        echo "Login successful!";
      } else {
        echo "Login error";
      }
    }
  }