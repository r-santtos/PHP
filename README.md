# Revisando o conhecimento em PHP

## Criando classes e métodos
* Por questões de padronização dos projetos, toda class php tem que começar com a primeira letra maiúscula.

* O nome do arquivo PHP deve ser igual ao nome da classe, neste caso o nome da classe é 'People' e seu arquivo é 'People.php'.

* O nome do arquivo segue o mesmo padrão do nome da classe, deve começar com letra maiúscula.

```
  // Classe People
  ------------------------------
  class People {
    public $name;
    public $age;

    // Método da classe People
    ------------------------------
    public function ToSpeak() {
      echo "to speak";
    }
  }

  // Instanciar classe People
  ------------------------------
  $class_people = new People();
  $class_people->ToSpeak();
```
```
  // Instanciar classe People
  ------------------------------
  $class_people = new People();
  $class_people->ToSpeak();
```
***
## Criando GET & SET
GET e SET é uma forma de adicionar uma camada de segurança ao código, impedindo que atributos privados se tornem públicos, além de permitir validações, por exemplo, verificando se o e-mail enviado é realmente um e-mail válido.
```
  // Simulando à resposta do banco de dados
  
  private $mock_email = "rsanttos.dev@gmail.com";
  private $mock_password = "123456";
```
* Criando o GET e SET do EMAIL
```
  public function getEmail() {
    return $this->email;
  }
  public function setEmail(string $parameter) {
    $this->email = $parameter;
  }
```
* Criando o GET e SET do PASS
```
  public function getPass() {
    return $this->pass;
  }
  public function setPass(string $parameter) {
    $this->pass = $parameter;
  }
```
* Método Login da classe SignIn
```
  public function Login() {
    if($this->email == $this->mock_email and $this->pass == $this->mock_password) {
      echo "Login successful!";
    } else {
      echo "Login error";
    }
  }
```
* Instanciar classe SignIn
```
  $signin = new SignIn();
  $signin-> setEmail("rsanttos.dev@gmail.com");
  $signin-> setPass("123456");
  $signin->Login();
```
* Código completo
```
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

  $signin = new SignIn();
  $signin-> setEmail("rsanttos.dev@gmail.com");
  $signin-> setPass("123456");
  $signin->Login();
```