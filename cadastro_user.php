<?php
echo "Você está na página de cadastro!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css2.css">
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    echo "<h2>Dados recebidos:</h2>";
    echo "Nome: $nome <br>";
    echo "CPF: $cpf <br>";
    echo "Data de Nascimento: $data_nascimento <br>";
    echo "Telefone: $telefone <br>";
    echo "E-mail: $email <br>";
}
?>

<h2>Formulário de Cadastro</h2>

<form method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>CPF:</label><br>
    <input type="text" name="cpf" required><br><br>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required><br><br>

    <label>E-mail:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Cadastrar</button>
</form>
