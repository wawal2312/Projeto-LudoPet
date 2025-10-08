<?php
include('config.php');
include('header.php'); // Inclui o menu principal
?>

<div class="container py-5">

  <h1 class="text-center mb-5">🐾 Animais Disponíveis para Adoção 🐾</h1>

  <div class="text-end mb-4">
    <a href="add_doacao.php" class="btn btn-success">+ Cadastrar Novo Animal</a>
  </div>

  <div class="row">
    <?php
    $sql = "SELECT * FROM doacoes WHERE status='disponivel'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0):
      while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
          <div class="card animal-card shadow-sm">
            <img src="<?= htmlspecialchars($row['foto']) ?>" alt="<?= htmlspecialchars($row['nome']) ?>" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title"><?= htmlspecialchars($row['nome']) ?></h4>
              <p><strong>Espécie:</strong> <?= htmlspecialchars($row['especie']) ?></p>
              <p><strong>Raça:</strong> <?= htmlspecialchars($row['raca']) ?></p>
              <p><strong>Idade:</strong> <?= htmlspecialchars($row['idade']) ?></p>
              <p><strong>Descrição:</strong> <?= htmlspecialchars($row['descricao']) ?></p>
              <div class="d-flex justify-content-between">
                <a href="edit_doacao.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="delete_doacao.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este registro?')">Excluir</a>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#adotarModal" data-nome="<?= htmlspecialchars($row['nome']) ?>">Adotar</button>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;
    else: ?>
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
            <label>Mensagem (opcional):</label>
            <textarea name="mensagem" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Enviar Pedido</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
body {
  background: linear-gradient(to right, #ffffff, #b2e6ff);
}
.animal-card {
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.15);
  margin-bottom: 20px;
  overflow: hidden;
  transition: transform 0.2s ease;
}
.animal-card:hover {
  transform: scale(1.02);
}
.card-img-top {
  width: 100%;
  height: 250px;
  object-fit: cover;
}
</style>

<script>
  const modal = document.getElementById('adotarModal');
  modal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const nomeAnimal = button.getAttribute('data-nome');
    modal.querySelector('#adotarModalLabel').textContent = `Adotar ${nomeAnimal}`;
    modal.querySelector('#animalNomeInput').value = nomeAnimal;
  });
</script>

<?php include('footer.php'); ?>
