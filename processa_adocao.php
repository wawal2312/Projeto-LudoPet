<?php
include 'config.php'; // Conecta ao banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $animal = $conn->real_escape_string($_POST['animal']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $mensagem = $conn->real_escape_string($_POST['mensagem']);

    // Atualiza o status do animal para "adotado"
    $sql = "UPDATE doacoes SET status='adotado' WHERE nome='$animal' AND status='disponivel'";

    if ($conn->query($sql) === TRUE) {
        echo "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <title>Pedido de Adoção - LudoPet</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='container py-5'>
            <h1 class='text-center text-success'>🎉 Pedido de adoção enviado com sucesso!</h1>
            <p class='text-center'>Entraremos em contato no e-mail <strong>$email</strong> para confirmar a adoção de <strong>$animal</strong>.</p>
            <div class='text-center mt-4'>
                <a href='adocao.php' class='btn btn-primary'>Voltar à lista de animais</a>
            </div>
        </body>
        </html>";
    } else {
        echo "<p>Erro ao processar o pedido: " . $conn->error . "</p>";
    }
} else {
    // Redireciona para a página de adoção se o acesso não for via POST
    header("Location: adocao.php");
    exit;
}

$conn->close();
?>
