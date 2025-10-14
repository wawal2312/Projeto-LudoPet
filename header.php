<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LudoPet</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Seu CSS -->
  <link rel="stylesheet" href="style.css">

  <style>
    /* Navbar com imagem de fundo */
    .navbar-custom {
      /* Remova ou comente a linha abaixo */
      /* background-image: url('img/fundo_nav.jpg'); */
      background-color: #fff !important; /* Garante fundo branco */
    }

    .navbar-custom .navbar-brand img {
      height: 100px; /* tamanho da logo */
    }

    .navbar-custom .nav-link {
      color: #333 !important; /* Cor escura para links */
      font-weight: bold;
    }

    .navbar-custom .nav-link:hover {
      color: #7fbfa0 !important; /* cor ao passar o mouse */
    }

    /* Ajuste do toggler (hamburger) */
    .navbar-toggler {
      border-color: rgba(0,0,0,.2);
    }

    .navbar-toggler-icon {
      filter: none; /* deixa o ícone na cor original */
    }
  </style>
</head>
<body>

<!-- Navbar fixa no topo -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo principal@4x.png" alt="Logo LudoPet" style="height:80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="adocao.php">Adoção</a></li>
        <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        <li class="nav-item"><a class="nav-link" href="doacao.php">Doação</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="cadastro_usuario.php">Cadastrar-se</a></li>
        <li class="nav-item"><a class="nav-link" href="nossotrabalho.php">Nosso Trabalho</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Espaço para não sobrepor o conteúdo devido ao fixed-top -->
<div style="margin-top: 120px;"></div>

<!-- Conteúdo da página -->


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

