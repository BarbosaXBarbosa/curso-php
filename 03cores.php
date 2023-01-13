<!DOCTYPE html>
<html>
<head>
    
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"
    ?>
  <link rel="stylesheet" href="_css/style.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      span.texto {
          font-size: <?php echo $tam; ?>;
          color: <?php echo $cor; ?>;
      }
  </style>
</head>
<body>
    <div class="back-button">
        <a href="index.html"><button>Voltar</button></a>
    </div>

    <div class="content-page">
        <?php
       echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>
 