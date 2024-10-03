<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $result = '';
    $url = '';
    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format("H");

    if (0 <= $hora && $hora <= 12) {
        $result = 'Bom dia!';
        $url = 'images/ceu-manha.jpg';
    } elseif ($hora > 12 && $hora < 18) {
        $result = "Boa tarde!";
        $url = 'images/ceu-tarde.jpg';
    } elseif ($hora >= 18 && $hora <= 24) {
        $result = "Boa noite!";
        $url = 'images/ceu-noite.jpg';
    }

    echo "<h1>$result</h1> <br> <img src='$url' alt='' width='300px' height='300px'>";

    ?>
</body>

</html>