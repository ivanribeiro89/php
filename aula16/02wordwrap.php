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
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwarp";
        $r = wordwrap($t, 5, "<br/>\n", true); // esse wordwrap serve para quebrar grandes textos
        echo $r;
    ?>
</div>
</body>
</html>
 