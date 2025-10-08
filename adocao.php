<?php
include 'config.php'; // Conecta ao banco de dados

$sql = "SELECT * FROM doacoes WHERE status='disponivel'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adoção - Ludo Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="projeto.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: linear-gradient(to right, #ffffff, #b2e6ff);
    }
    .animal-card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      margin-bottom: 20px;
      transition: transform 0.2s ease;
    }
    .animal-card:hover {
      transform: scale(1.02);
    }
    .animal-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">🐾 LudoPet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-nowrap" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap active" href="adocao.php">Adoção</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="doacao.php">Doação</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="quemsomos.php">Quem Somos</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="ludopet.php">Sobre o LudoPet</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="nossotrabalho.php">Nosso Trabalho</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="objetivo.php">Nosso Objetivo</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="perdidos.php">Animais Perdidos</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="parceiros.php">Parceiros</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="forum.php">Fórum</a></li>
          <li class="nav-item"><a class="nav-link text-nowrap" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fim da Navbar -->

  <div class="container py-5">
    <h1 class="text-center mb-5">🐾 Animais Disponíveis para Adoção 🐾</h1>

    <div class="row">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="<?= htmlspecialchars($row['foto']) ?>" alt="<?= htmlspecialchars($row['nome']) ?>">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['nome']) ?></h5>
                <p><strong>Espécie:</strong> <?= htmlspecialchars($row['especie']) ?></p>
                <p><strong>Raça:</strong> <?= htmlspecialchars($row['raca']) ?></p>
                <p><strong>Idade:</strong> <?= htmlspecialchars($row['idade']) ?></p>
                <p><?= htmlspecialchars($row['descricao']) ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adotarModal" data-nome="<?= htmlspecialchars($row['nome']) ?>">Adotar</button>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="text-center">Nenhum animal disponível no momento 😿.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Modal de Adoção -->
  <div class="modal fade" id="adotarModal" tabindex="-1" aria-labelledby="adotarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="processa_adocao.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title" id="adotarModalLabel">Formulário de Adoção</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="animal" id="animalNomeInput">
            <div class="mb-3">
              <label>Seu nome:</label>
              <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Email:</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Data de Nascimento:</label>
              <input type="date" name="nascimento" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Idade:</label>
              <input type="number" name="idade" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Enviar Pedido</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    const modal = document.getElementById('adotarModal');
    modal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget;
      const nomeAnimal = button.getAttribute('data-nome');
      modal.querySelector('#adotarModalLabel').textContent = `Adotar ${nomeAnimal}`;
      modal.querySelector('#animalNomeInput').value = nomeAnimal;
    });
  </script>
</body>
</html>
