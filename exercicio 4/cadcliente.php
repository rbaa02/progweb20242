<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<style>
    form {
    display: flex;
    flex-direction: column;
    margin: 5vh;

    & input {
        width: 60vh;
        height: 4vh;
        margin: 1.4vh .5vh;
        border: 1px solid rgb(204, 204, 204);
        border-radius: 10px;
    }

    & button {
        width: 15vh;
        height: 5vh;
        border: 1px solid rgb(204, 204, 204);
        border-radius: 10px;
        margin-top: 2vh;
        background-color: rgb(208, 228, 245);
    }
}
</style>
<body>
    <form action="dadosform.php" method="POST">
        <h1>Cadastro de Cliente</h1>

        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        
        <label for="cpf">Cpf</label>
        <input type="number" name="cpf" id="cpf">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>