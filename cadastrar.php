<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form action="" method="post">
        <div class="Login">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder = "Informe o nome do aluno">
            <label for="rm">RM</label>
            <input type="text" name="RM" id="RM" placeholder = "Informe o RM do aluno">
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" id="CPF" placeholder = "Informe o CPF do aluno">
        </div>
        <button name="cadastrar">Cadastrar</button>
    </form>
</body>
</html>