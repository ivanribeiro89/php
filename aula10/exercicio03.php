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
        $us = isset($_GET["us"])?$_GET["us"]:0;
        switch ($us) {
            case 1:
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "Você mora na Região Norte";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 18:
            case 20:
            case 15:
            case 17:
            case 26:
                echo "Você mora na Região Nordeste";
                break;
            case 11:
            case 12:
            case 7:
            case 9:
                echo "Você mora na Região Centro-Oeste";
                break;
            case 13:
            case 25:
            case 19:
            case 8:
                echo "Você mora na Região Sudeste";
                break;
            default:
                echo "Você mora na Região Sul";
        }
    ?>
</div>
</body>
</html>
 