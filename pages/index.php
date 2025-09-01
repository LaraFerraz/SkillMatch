<?php

$prestadores = [
    [
        "nome" => "João Silva",
        "tipo" => "serviço",
        "descricao" => "Eletricista - Instalações e reparos",
        "avaliacao" => 4,
        "localizacao" => "Campo Mourão - PR",
        "contato" => "(44) 99999-9999"
    ],
    [
        "nome" => "Loja ABC",
        "tipo" => "produto",
        "descricao" => "Materiais de Construção",
        "avaliacao" => 3,
        "localizacao" => "Maringá - PR",
        "contato" => "(44) 98888-8888"
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillMatch</title>
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
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero d-flex align-items-center text-center">
    <div class="container">
      <h1 class="fw-bold mb-4">Encontre o serviço ou produto ideal</h1>
      <form class="row justify-content-center" method="GET" action="pesquisa.php">
        <div class="col-md-6">
          <input type="text" name="q" class="form-control form-control-lg" placeholder="O que você procura?">
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary btn-lg w-100">Buscar</button>
        </div>
      </form>
    </div>
  </section>

  <section class="container my-5">
    <h2 class="mb-4 text-center">Resultados</h2>
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
              <button class="btn btn-outline-primary" 
                      data-bs-toggle="modal" 
                      data-bs-target="#detalhesModal" 
                      data-nome="<?= htmlspecialchars($p["nome"]) ?>"
                      data-desc="<?= htmlspecialchars($p["descricao"]) ?>"
                      data-loc="<?= htmlspecialchars($p["localizacao"]) ?>"
                      data-contato="<?= htmlspecialchars($p["contato"]) ?>">
                Ver mais
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <div class="modal fade" id="detalhesModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detalhes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p><strong>Descrição:</strong> <span id="modal-desc"></span></p>
          <p><strong>Localização:</strong> <span id="modal-loc"></span></p>
          <p><strong>Contato:</strong> <span id="modal-contato"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center py-4 mt-5">
    <p class="mb-0">&copy; 2025 SkillMatch - Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const detalhesModal = document.getElementById('detalhesModal');
    detalhesModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      document.querySelector('#modal-desc').textContent = button.getAttribute('data-desc');
      document.querySelector('#modal-loc').textContent = button.getAttribute('data-loc');
      document.querySelector('#modal-contato').textContent = button.getAttribute('data-contato');
      document.querySelector('.modal-title').textContent = button.getAttribute('data-nome');
    });
  </script>
</body>
</html>
