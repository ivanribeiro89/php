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
        $a = 3;
        $b = &$a; // quando usa o & o valor da variavel fica igual ...
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/> A varial B vale $b";
    ?>
</div>
</body>
</html>
 