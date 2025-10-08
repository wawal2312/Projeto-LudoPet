<?php
session_start();
include("header.php");
?>

<section class="container mt-5">
  <div class="text-center mb-5">
    <h1>Bem-vindo ao <span class="text-primary">LudoPet</span> 🐾</h1>
    <p>Nosso objetivo é conectar pessoas que desejam adotar ou doar animais. 🐶🐱</p>
  </div>

  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/rex.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:200px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Rex</h5>
          <p class="card-text">Um cão dócil e brincalhão, 2 anos de idade. Adora correr!</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/mia.jpg" class="card-img-top" alt="Gato para adoção" style="width:100%; height:200px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Mia</h5>
          <p class="card-text">Gatinha carinhosa, 1 ano e meio. Já vacinada e castrada.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/bob.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:200px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Bob</h5>
          <p class="card-text">Um verdadeiro amigo fiel, ideal para famílias com crianças.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
