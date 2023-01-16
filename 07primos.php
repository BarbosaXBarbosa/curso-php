<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/style.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

    <div class="back-button " >
        <a href="index.html"><button>Voltar</button></a>
    </div>
    <div class="content-page">
        <?php
            $v = isset($_GET["valor"])?$_GET["valor"]: "O campo não foi preenchido corretamente";
            $i = 1;

            echo "Valores múltiplos: ";
            while ($i <= $v) {
                if ($v % $i == 0){
                    echo "$i ";
                    $multiplos ++;
                }
                $i ++;
            }
            echo "<br />Total de múltiplos: $multiplos <br />";
            echo "Resultado: $v ";
            if ($multiplos > 2) {
                echo "Não é primo!";
            }else {
                echo "É primo!";
            }

        ?>
    </div>
</body>

</html>