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
        $idade = _GET["idade"];
        
        if ($idade > 18) {
            echo "<span class='texto'>Parabéns você já pode votar!</span>";
        }else {
            echo "<span class='texto'>Você ainda não pode votar!</span>";
        }
    ?>
    </div>
</body>
</html>