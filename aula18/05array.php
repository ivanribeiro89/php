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
        $v = array(
                "nome"=>"Ivan",
                "idade"=>28,
                "peso"=>80.5
        );
        foreach ($v as $l=>$z){
            echo "O campo $l possui o conteudo $z </br>";
        }

    ?>

    </pre>
</div>
</body>
</html>
 