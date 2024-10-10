<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>
    <?php
    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format("H");

    if (0 <= $hora && $hora < 12) {
        $result = "<h1>Bom dia!</h1> <img src='images/ceu-manha.jpg' alt=''";
    } elseif ($hora >= 12 && $hora < 18) {
        $result = "<h1>Boa tarde!</h1> <img src='images/ceu-tarde.jpg' alt=''";
    } elseif ($hora >= 18 && $hora <= 24) {
        $result = "<h1>Boa noite!</h1> <img src='images/ceu-noite.jpg' alt=''";
    }

    echo $result;

    ?>
</body>

</html>