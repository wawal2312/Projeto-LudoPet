<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ludo Pet - Animais Perdidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: #b2ffb2;
      font-family: Arial, sans-serif;
    }

    .container-perdidos {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      color: #2c3e50;
    }

    .cards-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card-animal {
      background-color: #fff;
      border-radius: 12px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s;
    }

    .card-animal:hover {
      transform: scale(1.05);
    }

    .card-animal img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 15px;
    }

    .card-body h5 {
      margin-bottom: 10px;
      color: #27ae60;
    }

    .card-body p {
      color: #555;
      font-size: 0.95rem;
    }

    @media (max-width: 768px) {
      .card-animal {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container-perdidos">
    <h1>Animais Perdidos 🐾</h1>

    <div class="cards-container">
      <!-- Animal 1 -->
      <div class="card-animal">
        <img src="img/gatoperdido1.jpeg" alt="Gato Perdido-Leo">
        <div class="card-body">
          <h5>Leo</h5>
          <p>Espécie: Gato | Idade: 2 anos</p>
          <p>Última vez visto no bairro Jardim das Flores.Cor: preto com branco, dócil.</p>
        </div>
      </div>

      <!-- Animal 2 -->
      <div class="card-animal">
        <img src="img/gatoperdido2.jpeg" alt="Gato Perdido - Ellisabeth">
        <div class="card-body">
          <h5>Ellisabeth</h5>
          <p>Espécie: Gato | Idade: 3 anos</p>
          <p>Perdido próximo ao Parque Central. Cor:branca com marrom, amigável.</p>
        </div>
      </div>

      <!-- Animal 3 -->
      <div class="card-animal">
        <img src="img/gatoperdido3.jpeg" alt="Gato Perdido - Xane ">
        <div class="card-body">
          <h5>Xane</h5>
          <p>Espécie: Gato | Idade: 3 anos</p>
          <p>Visto na Praça das Américas. Cor:Branco com manchas cinza, tímido.</p>
        </div>
      </div>

      <!-- Animal 4 -->
      <div class="card-animal">
        <img src="img/gatoperdido4.jpeg" alt="Gato Perdido - Kiwi">
        <div class="card-body">
          <h5>Kiwi</h5>
          <p>Espécie: Gato | Idade: 4 anos</p>
          <p>Desapareceu no bairro Vila Verde. Cor:Laranja, adora tirar um cochilo.</p>
        </div>
      </div>

      <!-- Animal 5 -->
      <div class="card-animal">
        <img src="img/cachorroperdido1.jpg" alt="Cachorro Perdido - Lili">
        <div class="card-body">
          <h5>Lili</h5>
          <p>Espécie: Cachorro | Idade: 1 ano</p>
          <p>Visto na Rua das Laranjeiras. Cor:Branca, muito curiosa.</p>
        </div>
      </div>

      <!-- Animal 6 -->
      <div class="card-animal">
        <img src="img/cachorroperdido2.jpg" alt="Cachorro Perdido - Bolt">
        <div class="card-body">
          <h5>Bolt</h5>
          <p>Espécie: Cachorro | Idade: 5 anos</p>
          <p>Perdido na Avenida Central. Cor:Branco, amigável e responde ao nome.</p>
        </div>
      </div>

      <!-- Animal 7 -->
      <div class="card-animal">
        <img src="img/cachorroperdido3.jpg" alt="Cachorro Perdido - Bettoven">
        <div class="card-body">
          <h5>Bettoven</h5>
          <p>Espécie: Cachorro | Idade: 2 anos</p>
          <p>Visto na Praça do Sol. Cor:Caramelo, muito tranquilo e dócil.</p>
        </div>
      </div>

      <!-- Animal 8 -->
      <div class="card-animal">
        <img src="img/cachorroperdido4.jpg" alt="Cachorro Perdido - Rex">
        <div class="card-body">
          <h5>Rex</h5>
          <p>Espécie: Cachorro | Idade: 3 anos</p>
          <p>Desapareceu no bairro Vila Nova. Cor:Preto, é curioso, gosta de frutas.</p>
        </div>
      </div>

    </div>
  </div>

</body>
</html>


