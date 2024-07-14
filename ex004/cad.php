<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
      // variavel global $_GET ou $_POST ou $_COOKIE ou $_REQUEST
      // $_REQUEST pega tanto get quanto post
      $nome = $_GET["nome"] ?? "Não informado";
      $sobrenome = $_GET["sobrenome"] ?? "Não informado";

      echo "<p>É um grande prazer te conhecer <strong>$nome $sobrenome</strong></p>"
    ?>
    <p>
      <a href="javascript:history.go(-1)">
        Voltar para a página anterior
      </a>
    </p>
  </main>

</body>

</html>