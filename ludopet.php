<?php
echo "Sobre o Ludo Pet";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Ludo Pet - Sobre o Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #b2ffb2;
      font-family: 'Poppins', Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #2c3e50;
    }

    .container-sobre {
      max-width: 1000px;
      margin: 60px auto;
      background-color: #ffffffd9;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #27ae60;
      margin-bottom: 30px;
      font-weight: 700;
    }

    p {
      line-height: 1.7;
      font-size: 1.05rem;
      margin-bottom: 20px;
    }

    .funcionalidades {
      margin-top: 30px;
    }

    .funcionalidades h3 {
      color: #27ae60;
      margin-bottom: 15px;
    }

    .funcionalidades ul {
      list-style-type: none;
      padding-left: 0;
    }

    .funcionalidades li {
      margin-bottom: 10px;
      font-size: 1.05rem;
    }

    .funcionalidades li::before {
      content: "🐾 ";
    }

    .banner {
      text-align: center;
      margin-bottom: 30px;
    }

    .banner img {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
      border-radius: 15px;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      background-color: #27ae60;
      color: white;
      border-radius: 0 0 15px 15px;
      font-weight: 500;
    }
  </style>
</head>

<body>

  <div class="container-sobre">
    <div class="banner">
      <img src="img/banner-ludopet.jpg" alt="Banner do Ludo Pet">
    </div>

    <h1>🐶 Sobre o Ludo Pet</h1>

    <p>
      O <strong>Ludo Pet</strong> é um site desenvolvido para facilitar e incentivar a adoção responsável de animais.
      Criado com o objetivo de conectar pessoas e pets, o portal oferece um ambiente digital simples, acessível e seguro
      para quem deseja adotar ou doar um animal.
    </p>

    <p>
      Acreditamos que a tecnologia pode ser uma grande aliada no cuidado e proteção dos animais. 
      Por isso, o Ludo Pet funciona como uma ponte entre protetores, abrigos e adotantes — 
      tornando o processo de adoção mais transparente e acolhedor.
    </p>

    <div class="funcionalidades">
      <h3>✨ O que você encontra no Ludo Pet:</h3>
      <ul>
        <li>Cadastro de animais disponíveis para adoção.</li>
        <li>Busca rápida com fotos, idades e informações de cada pet.</li>
        <li>Formulário para solicitar adoção de forma prática e segura.</li>
        <li>Espaço para doadores divulgarem animais resgatados.</li>
        <li>Seção de animais perdidos para ajudar reencontros.</li>
        <li>Conteúdos educativos sobre adoção e cuidados com os pets.</li>
      </ul>
    </div>

    <p>
      O Ludo Pet foi criado para todos que acreditam que cada animal merece uma nova chance. 
      Nosso site é mais do que um espaço de adoção — é um projeto de amor, empatia e transformação. 💚
    </p>

    <footer>
      Ludo Pet © 2025 — Conectando pessoas e pets com amor 🐾
    </footer>
  </div>

</body>
</html>
