<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Orientado a Objecto</title>
</head>
<body>
  <?php include './class/People.php' ?>
  <?php include './class/SignIn.php' ?>
  <?php include './class/MySQL.php' ?>

  <?php
    $class_people = new People();
    $class_people->ToSpeak();

    echo "</br></br>";

    $signin = new SignIn();
    $signin-> setEmail("rsanttos.dev@gmail.com");
    $signin-> setPass("123456");
    $signin->Login();

    echo "</br></br>";

    $mysql = new MySQL("rsanttos.dev@gmail.com", "123456");
    $mysql->Connections();
  ?>
</body>
</html>