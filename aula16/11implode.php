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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode(" ",$vetor);// podemos usar a palavra JOIN no lugar do IMPLODE
        echo($texto);
    ?>
</div>
</body>
</html>
 