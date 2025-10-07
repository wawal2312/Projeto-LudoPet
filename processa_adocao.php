<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $animal = $_POST['animal'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // exemplo: marcar o animal como "adotado"
    $sql = "UPDATE doacoes SET status='adotado' WHERE nome='$animal'";
    $conn->query($sql);

    echo "<h2>🎉 Pedido de adoção enviado com sucesso!</h2>";
    echo "<p>Entraremos em contato no e-mail <strong>$email</strong> para confirmar a adoção de <strong>$animal</strong>.</p>";
    echo "<a href='adocao.php'>Voltar à lista</a>";
}
?>
