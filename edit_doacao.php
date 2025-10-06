<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM doacoes WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto'];

    $sql = "UPDATE doacoes 
            SET nome='$nome', idade='$idade', descricao='$descricao', foto='$foto' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado!";
        header(header: "Location: doacao.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $row['nome'] ?>"><br>
    Idade: <input type="number" name="idade" value="<?= $row['idade'] ?>"><br>
    Descrição: <textarea name="descricao"><?= $row['descricao'] ?></textarea><br>
    Foto (URL): <input type="text" name="foto" value="<?= $row['foto'] ?>"><br>
    <button type="submit">Salvar</button>
</form>
