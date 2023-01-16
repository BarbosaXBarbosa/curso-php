<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/style.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

    <div class="back-button">
        <a href="index.html"><button>Voltar</button></a>
    </div>
    <div class="content-page">
        <h2>Calculadora de Fatorial</h2>
        <?php
            $v = isset($_GET["valor"])?$_GET["valor"]: "O campo não foi preenchido corretamente!";
            $mult = $v ;
            $fat = 1;
            while ($mult >= 1) {
                $fat = $fat * $mult;
                $mult--;
            }
            echo "<h3>$v! = $fat </h3>";
        ?>
    </div>
</body>

</html>