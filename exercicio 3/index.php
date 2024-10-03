<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Relatório</title>
</head>

<body>
    <h1>Resultado Relatório de Clientes</h1>
    <?php
    $pessoas = array(
        "001" => "João Silva",
        "002" => "Maria Oliveira",
        "003" => "Carlos Pereira",
        "004" => "Ana Santos",
        "005" => "Lucas Lima"
    );
    echo "<table border='1'>
        <tr style='text-align: center;'>
            <td>Código</td>
            <td>NOME</td>
        </tr>
    </table>";
    ?>
</body>

</html>