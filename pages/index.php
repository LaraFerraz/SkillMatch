<?php
// index.php - Página inicial SkillMatch

// Simulação de resultados iniciais (em produção, viriam do banco)
$prestadores = [
    [
        "nome" => "João Silva",
        "tipo" => "serviço",
        "descricao" => "Eletricista - Instalações e reparos",
        "avaliacao" => 4
    ],
    [
        "nome" => "Maria Oliveira",
        "tipo" => "serviço",
        "descricao" => "Pintora profissional para interiores",
        "avaliacao" => 5
    ],
    [
        "nome" => "Loja ABC",
        "tipo" => "produto",
        "descricao" => "Materiais de Construção",
        "avaliacao" => 3
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillMatch - Conectando Você aos Melhores Serviços e Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">SkillMatch</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastrar</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="hero">
    <div class="container">
      <h1 class="mb-3">Bem-vindo ao SkillMatch</h1>
      <p class="lead">Conectando você aos melhores prestadores de serviços e fornecedores de produtos.</p>
    </div>
  </section>


  <section id="guia" class="container my-5">
    <h2 class="text-center mb-4">Como o SkillMatch Funciona?</h2>
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <i class="fa-solid fa-user-plus fa-3x mb-3 text-primary"></i>
        <h5>Cadastro de Profissionais</h5>
        <p>Prestadores e fornecedores se cadastram informando seus serviços ou produtos.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-magnifying-glass fa-3x mb-3 text-primary"></i>
        <h5>Pesquisa Inteligente</h5>
        <p>Usuários pesquisam facilmente o que precisam sem necessidade de cadastro.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-star fa-3x mb-3 text-primary"></i>
        <h5>Avaliações Reais</h5>
        <p>Os mais bem avaliados aparecem primeiro, garantindo mais confiança.</p>
      </div>
    </div>
  </section>

 
  <section class="container my-5">
    <h2 class="text-center mb-4">Encontre agora o que você precisa</h2>
    <form action="pesquisa.php" method="GET" class="d-flex justify-content-center">
      <input type="text" name="q" class="form-control w-50 me-2" placeholder="Digite serviço ou produto..." required>
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
  </section>


  <section class="container my-5">
    <h3 class="mb-4 text-center">Alguns dos melhores avaliados</h3>
    <div class="row g-4">
      <?php foreach ($prestadores as $p): ?>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($p["nome"]) ?></h5>
              <p class="card-text"><?= htmlspecialchars($p["descricao"]) ?></p>
              <div class="mb-2 text-warning">
                <?php for ($i=1; $i<=5; $i++): ?>
                  <?php if ($i <= $p["avaliacao"]): ?>
                    <i class="fa-solid fa-star"></i>
                  <?php else: ?>
                    <i class="fa-regular fa-star"></i>
                  <?php endif; ?>
                <?php endfor; ?>
              </div>
              <a href="pesquisa.php?q=<?= urlencode($p['nome']) ?>" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>


  <footer class="text-center py-4 mt-5">
    <p class="mb-0">&copy; 2025 SkillMatch - Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
