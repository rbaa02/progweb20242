<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Relatório</title>
</head>

<body>
    <h1>Resultado Relatório de Clientes:</h1>
    <table border='1'>
        <tr id='titulo_table'>
            <td>Código</td>
            <td>NOME</td>
        </tr>
        
        <?php
        $pessoas = array(
            "001" => "João Silva",
            "002" => "Maria Oliveira",
            "003" => "Carlos Pereira",
            "004" => "Ana Santos",
            "005" => "Lucas Lima",
            "006" => "Eduardo Santana"
        );
        foreach($pessoas as $codigo => $nome) {
            echo "<tr>
            <td>$codigo</td>
            <td>$nome</td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>