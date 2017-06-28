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
        krsort($v);
        //sort($v);
        print_r($v);
        /*
            sort - organizar em ordem crescente
            rsort - organizar em forma decrescente
            asort - organizar em ordem crescente e mantem a posição do indice
            arsort - organizar em forma decrescente e mantem a posição do indice
            ksort - organizar o indice em ordem
            krsort - organizar em ordem decrescente o indice
         */

    ?>
    </pre>
</div>
</body>
</html>
 