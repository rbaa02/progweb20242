<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $texto = '';
    $url_imagem = '';

    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format("H");

    if (0 <= $hora && $hora <= 12) {
        $texto = 'Bom dia!';
        $url_imagem = 'images/ceu-manha.jpg';
    } elseif ($hora > 12 && $hora < 18) {
        $texto = "Boa tarde!";
        $url_imagem = 'images/ceu-tarde.jpg';
    } elseif ($hora >= 18 && $hora <= 24) {
        $texto = "Boa noite!";
        $url_imagem = 'images/ceu-noite.jpg';
    }

    echo "<h1>$texto</h1> <br> <img src='$url_imagem' alt='' width='300px' height='300px'>";

    ?>
</body>

</html>