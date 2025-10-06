<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Animal para Adoção</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h2>Cadastro de Adoção</h2>
    <form action="cadastro.php" method="POST" enctype="multipart/form-data">
      
      <label for="especie">Espécie:</label>
      <select name="especie" id="especie" required>
        <option value="">Selecione</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
      </select>

      <label for="nome">Nome do Animal:</label>
      <input type="text" name="nome" id="nome" placeholder="Ex: Rex, Luna" required>

      <label for="idade">Idade:</label>
      <input type="text" name="idade" id="idade" placeholder="Ex: 2 anos, Filhote" required>

      <label for="raca">Raça:</label>
      <input type="text" name="raca" id="raca" placeholder="Ex: SRD, Poodle, Siamês" required>

      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" placeholder="Escreva detalhes sobre o animal..."></textarea>

      <label for="foto">Foto:</label>
      <input type="file" name="foto" id="foto" accept="image/*" required>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
