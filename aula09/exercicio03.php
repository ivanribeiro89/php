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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $med = ($n1+$n2)/2;
    echo "A média entre $n1 e $n2 é igual a $med<br/>";

    if ($med >= 7) {
        $resultado = "APROVADO";
    }
        elseif ($med > 5 && $med < 7){
            $resultado = "RECUPERAÇÃO";
        }
        else {
            $resultado = "REPROVADO";
        }

    echo "Situação do aluno: $resultado";

    ?>
</div>
</body>
</html>
 