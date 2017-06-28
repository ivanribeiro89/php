<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = "   José da Silva   ";
        echo(strlen($nome));
        $novo = trim($nome);
        echo($novo);
        echo(strlen($novo));
        // existe a função ltrim (remover os espaços da esquerda) e o rtrim (remover os espaços da direita)
    ?>
</div>
</body>
</html>
 