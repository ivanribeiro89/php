<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("A","J","M","X","K");
        array_shift($v); // unshift ou shift
        print_r($v);
        /*
         array_shift - elimina os dados no inicio do vetor
         array_unshift - coloca dados no inicio do vetor
         array_pop - elimina os dados no final do vetor
         array_push - coloca dados no final do vetor
        */
    ?>
    </pre>
</div>
</body>
</html>
 