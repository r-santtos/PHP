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