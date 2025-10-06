<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especie = $_POST['especie'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $raca = $_POST['raca'];
    $descricao = $_POST['descricao'];

    echo "<h2>Animal cadastrado:</h2>";
    echo "Espécie: $especie <br>";
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Raça: $raca <br>";
    echo "Descrição: $descricao <br>";

    // upload de foto
    if (!empty($_FILES['foto']['name'])) {
        $pasta = "uploads/";
        if (!file_exists($pasta)) {
            mkdir($pasta, 0777, true);
        }

        $nomeArquivo = uniqid() . "-" . basename($_FILES["foto"]["name"]);
        $caminho = $pasta . $nomeArquivo;

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho)) {
            echo "Foto enviada com sucesso! <br>";
            echo "<img src='$caminho' width='200'>";
        } else {
            echo "Erro ao enviar foto.";
        }
    }
}
?>

<h2>Cadastro de Animais</h2>
<form method="post" enctype="multipart/form-data">
    <label>Espécie:</label><br>
    <select name="especie" required>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
    </select><br><br>

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Idade:</label><br>
    <input type="text" name="idade" required><br><br>

    <label>Raça:</label><br>
    <input type="text" name="raca" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"></textarea><br><br>

    <label>Foto:</label><br>
    <input type="file" name="foto" accept="image/*" required><br><br>

    <button type="submit">Cadastrar Animal</button>
</form>
