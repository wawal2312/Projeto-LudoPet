<?php
session_start();
include("header.php"); 
?>

<style>
.titulo-principal {
  font-family: 'Poppins', Arial, sans-serif;
  font-weight: 700;
}

footer {
  background: #fff;
  border-top: 1px solid #e0e4e2;
  padding: 20px 0;
  text-align: center;
  color: #333;
}

.duas-cores {
  background-color: #f8f9fa;
}
</style>

<!-- Cards -->
<section class="container mt-5" style="margin-bottom: 80px;">
  <div class="text-center mb-5">
    <h1 class="titulo-principal">Bem-vindo ao <span class="text-primary">LudoPet</span> 🐾</h1>
    <p>Nosso objetivo é conectar pessoas que desejam adotar ou doar animais. 🐶🐱</p>
  </div>

  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/2469bdd5-e890-4e2a-8b70-6f80847dc08d.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Rex</h5>
          <p class="card-text">Um cão dócil e brincalhão, 2 anos de idade. Adora correr!</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/dfb8c7ed-cb5d-411d-99a1-698ccf6112fa.jpg" class="card-img-top" alt="Gato para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Mia</h5>
          <p class="card-text">Gatinha carinhosa, 1 ano e meio. Já vacinada e castrada.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/e3f35fea-56e9-4c8b-92e6-47f1f3aa35ef.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Bob</h5>
          <p class="card-text">Um verdadeiro amigo fiel, ideal para famílias com crianças.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/Dash II by gatiodaniel on DeviantArt Check more at….jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Caramelo</h5>
          <p class="card-text">Uma linda princesa de 3 anos, adora brincar com suas bolinhas.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 5 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/03773f36-4914-4b1e-96a3-5b68ef0e8981.jpg" class="card-img-top" alt="Gata para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Chanel</h5>
          <p class="card-text">Uma linda gatinha super carinhosa.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 6 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/51204f75-a9b2-4ef4-a694-96a5d1a2001e.jpg" class="card-img-top" alt="Gata para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Marrie</h5>
          <p class="card-text">Uma linda gatinha de 2 anos, muito carinhosa.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 7 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/2469bdd5-e890-4e2a-8b70-6f80847dc08d.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Ariel</h5>
          <p class="card-text">Uma linda cadela de 4 anos, muito carinhosa.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 8 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/dfb8c7ed-cb5d-411d-99a1-698ccf6112fa.jpg" class="card-img-top" alt="Gato para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Judite</h5>
          <p class="card-text">Uma linda princesa de 1 ano e 5 meses.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Card 9 -->
    <div class="col-md-4 mb-4 d-flex">
      <div class="card h-100">
        <img src="img/e3f35fea-56e9-4c8b-92e6-47f1f3aa35ef.jpg" class="card-img-top" alt="Cachorro para adoção" style="width:100%; height:300px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title">Floquinho</h5>
          <p class="card-text">Um príncipe para a sua casa.</p>
          <a href="adocao.php" class="btn btn-primary">Adotar</a>
        </div>
      </div>
    </div>
    <!-- Continue com mais cards se quiser -->
  </div>
</section>

<!-- Início da segunda cor -->
<section class="duas-cores">
  <!-- Conteúdo que ficará com a segunda cor de fundo -->
  <div class="container py-5">
    <h2>Segunda parte do site</h2>
    <p>Este conteúdo está na área com a segunda cor de fundo.</p>
  </div>
</section>

<?php include("footer.php"); ?>

