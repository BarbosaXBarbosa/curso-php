<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/style.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
</head>
<body>
    <div class=content-page>
    <?php 
        $idade = isset($_GET["idade"])?$_GET["idade"]: "Campo não foi preenchido corretamente.";
        if ($idade > 17) {
            echo "<span class='texto'>Você tem $idade anos, parabéns você já pode votar!</span>";
        }else {
            echo "<span class='texto'>Você ainda não pode votar, tem apenas $idade anos</span>";
        }
    ?>
    </div>
</body>
</html>