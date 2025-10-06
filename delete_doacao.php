<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM doacoes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluído!";
    header("Location: doacao.php");
} else {
    echo "Erro: " . $conn->error;
}
?>
