<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre - SkillMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">SkillMatch</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastrar</a></li>
          <li class="nav-item"><a class="nav-link active" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="hero">
    <div class="container">
      <h1 class="mb-3">Sobre o SkillMatch</h1>
      <p class="lead">Conectando oportunidades, serviços e produtos em um só lugar.</p>
    </div>
  </section>

  <section class="container my-5">
    <h2 class="text-center mb-4">Nossa Missão</h2>
    <div class="card shadow p-4">
      <p class="text-center">
        O <strong>SkillMatch</strong> nasceu para facilitar a vida de quem procura e de quem oferece.  
        Criamos uma plataforma simples, dinâmica e confiável que conecta usuários a 
        <strong>prestadores de serviços</strong> e <strong>fornecedores de produtos</strong> de forma rápida e segura.  
      </p>
    </div>
  </section>


  <section class="container my-5">
    <h2 class="text-center mb-4">O que o SkillMatch proporciona?</h2>
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <i class="fa-solid fa-bolt fa-3x mb-3 text-primary"></i>
        <h5>Praticidade</h5>
        <p>Pesquise o que precisa em segundos, sem necessidade de cadastro.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-handshake fa-3x mb-3 text-primary"></i>
        <h5>Conexão Direta</h5>
        <p>Entre em contato com o profissional ou fornecedor pelo próprio perfil.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-thumbs-up fa-3x mb-3 text-primary"></i>
        <h5>Confiabilidade</h5>
        <p>Veja avaliações reais de outros usuários antes de escolher.</p>
      </div>
    </div>
  </section>


  <footer class="text-center py-4 mt-5">
    <p class="mb-0">&copy; 2025 SkillMatch - Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
