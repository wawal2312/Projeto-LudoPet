<?php
//waleska part
include 'config.php'; // conexão com o banco de dados la no myslq

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto']; // pode ser URL ou upload

    $sql = "INSERT INTO doacoes (nome, idade, descricao, foto) 
            VALUES ('$nome', '$idade', '$descricao', '$foto')";

    if ($conn->query($sql) === TRUE) {
        echo "Doação adicionada com sucesso!";
        header(header: "Location: doacao.php"); // redireciona p/ lista
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    Descrição: <textarea name="descricao"></textarea><br>
    Foto (URL): <input type="text" name="foto"><br>
    <button type="submit">Adicionar</button>
</form>
