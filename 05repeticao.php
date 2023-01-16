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
        <?php 
            $i = isset($_GET["i"])?$_GET["i"]: "Número inicial não foi preeenchido corretamente.";
            $f = isset($_GET["f"])?$_GET["f"]: "Número final não foi preenchido corretamente.";
            $cont = $_GET["cont"];
            

            if ($i < $f) {
                while ($i <= $f) {
                    echo $i . "</br>";
                    $i += $cont;
                }
            }else {
                while ($i >= $f) {
                    echo $i . "</br>";
                    $i -= $cont;
                }
            }
            
        ?>
    </div>
</body>

</html>