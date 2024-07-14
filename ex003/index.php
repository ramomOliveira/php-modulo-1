<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    // $num = 10;
    // echo "A variável num é do tipo: $num <br>";

    // var_dump($num) mostra tudo sobre a variável
    // $v = 300;
    // var_dump($v);

    // $num = 3e2; // 3 x 10(2) tres vezes 10 elevado a 2
    // echo "A variável num é do tipo: $num <br>";

    // $vet = [1, 2, 3, 4, 5];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa();
    var_dump($p);

    // aspas simples não interpreta variáveis
    // aspas duplas interpreta variáveis
    // constante é interpolada "Moro no bairro de " . BAIRRO (obs: e usado com ponto)

    $nome = "Maria";
    $sobreNome = "Silva";
    $apelido = "Má";
    echo "$nome \"$sobreNome\" $apelido <br>";
    // o contra barra escapa o caractere especial
  ?>
</body>

</html>