<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do cliente</title>
</head>
<style>
    body {
        margin: 3vh;
    }

    div {
        background-color: lightgrey;
        padding: 2vh;
        border-radius: 10px;
    }
</style>
<body>
    <?php
        // If success
        if (!$_POST) return;

        // Define variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        date_default_timezone_set('America/Sao_Paulo');
        $request_time = $_SERVER['REQUEST_TIME'];
        $time = date('d\/m\/o h:i:s', $request_time);

        $validate_blank = $name === '' || $email === '' || $cpf === '';
        $validate_cpf = strlen($cpf) !== 11;

        // Validade methods
        if ($validate_blank) {
            echo "<h1>Todos os dados devem ser informados!</h1>";
            return;
        }
        if ($validate_cpf) {
            echo "<h1>Informe CPF válido!</h1>";
            return;
        }
        
        // Echo Result 
        echo "
        <h1>Dados Cadastrados!</h1>
        <p>Dados do cliente</p>
        <div>
            <h1>Nome: $name</h1>
            <h1>Email: $email</h1>
            <h1>Cpf: $cpf</h1>
            <p>horário de cadastro: $time</p>
        </div>";
    ?>
</body>
</html>