<?php
    //Os seus dados inseridos seram enviados para o banco de dados do MySQL
    if(isset($_POST['submit'])) {
        include_once('request.php');

        if(isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Envio de dados</title>
    <link rel="stylesheet" href="dist/estilo.css">
</head>
<body>
    <div class="login-container">
        <h1>Envio de dados</h1>
        <form action="index.php" method="POST">
            <div class="input-container">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="input-container">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-container">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <button type="submit" name="submit" id="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
