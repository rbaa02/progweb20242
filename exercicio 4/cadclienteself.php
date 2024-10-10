<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<style>
    body {
        margin: 3vh;
    }

    div {
        background-color: rgb(208, 228, 245);
        padding: 2vh;
        border-radius: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
        margin: 5vh;
    }

    input {
        width: 60vh;
        height: 4vh;
        margin: 1.4vh 0.5vh;
        border: 1px solid rgb(204, 204, 204);
        border-radius: 10px;
    }

    button {
        width: 15vh;
        height: 5vh;
        border: 1px solid rgb(204, 204, 204);
        border-radius: 10px;
        margin-top: 2vh;
        background-color: rgb(208, 228, 245);
    }
</style>
<body>
    <?php
        // Verifica se os dados foram enviados
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['cpf'])) {

            // Define variaveis
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];

            date_default_timezone_set('America/Sao_Paulo');
            $request_time = $_SERVER['REQUEST_TIME'];
            $time = date('d/m/Y H:i:s', $request_time); 

            // Validações
            $validate_blank = $name === '' || $email === '' || $cpf === '';
            $validate_cpf = strlen($cpf) !== 11;

            // Validar se todos os campos foram preenchidos
            if ($validate_blank) {
                echo "<h1>Todos os dados devem ser informados!</h1>";
                return;
            }

            // Validar CPF com 11 dígitos
            if ($validate_cpf) {
                echo "<h1>Informe CPF válido! O CPF deve conter 11 dígitos.</h1>";
                return;
            }
            
            // Exibir Resultado do Cadastro
            echo "
            <h1>Dados Cadastrados com Sucesso!</h1>
            <p>Dados do cliente</p>
            <div>
                <h1>Nome: $name</h1>
                <h1>Email: $email</h1>
                <h1>CPF: $cpf</h1>
                <p>Horário de cadastro: $time</p>
            </div>";

        } else {
            // Exibir formulario 
            echo '<form action="" method="POST">
            <h1>Cadastro de Cliente</h1>
    
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required>
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" id="cpf" required>
    
            <button type="submit">Cadastrar</button>
        </form>';
        }
    ?>
    
</body>
</html>
