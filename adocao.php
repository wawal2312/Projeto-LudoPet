<?php
include 'config.php'; 
$sql = "SELECT * FROM doacoes"; 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adoção - Ludo Pet</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(to right, #ffffff, #b2e6ff);
    }
    .animal-card {
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      transition: transform 0.2s ease;
    }
    .animal-card:hover {
      transform: scale(1.02);
    }
    img {
      border-radius: 12px 12px 0 0;
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
  </style>
</head>
<body class="container py-5">

  <h1 class="text-center mb-5">🐶🐱 Animais Disponíveis para Adoção</h1>

  <div class="text-end mb-4">
    <a href="add_doacao.php" class="btn btn-primary">+ Cadastrar Novo Animal</a>
  </div>

  <div class="row">
    <?php if ($result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="<?= htmlspecialchars($row['foto']) ?>" alt="<?= htmlspecialchars($row['nome']) ?>">
            <div class="card-body">
              <h4 class="card-title"><?= htmlspecialchars($row['nome']) ?></h4>
              <p><strong>Idade:</strong> <?= htmlspecialchars($row['idade']) ?> anos</p>
              <p><strong>Descrição:</strong> <?= htmlspecialchars($row['descricao']) ?></p>
              <div class="d-flex justify-content-between">
                <a href="edit_doacao.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="delete_doacao.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este registro?')">Excluir</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-center">Nenhum animal cadastrado no momento.</p>
    <?php endif; ?>
  </div>

</body>
</html>
