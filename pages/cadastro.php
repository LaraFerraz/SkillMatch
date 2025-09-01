<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $tipo = $_POST["tipo"] ?? "";
    $descricao = $_POST["descricao"] ?? "";
    $localizacao = $_POST["localizacao"] ?? "";
    $contato = $_POST["contato"] ?? "";
    $horario = $_POST["horario"] ?? "";

    
    $mensagem = "Cadastro realizado com sucesso para <strong>" . htmlspecialchars($nome) . "</strong>!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - SkillMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
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
          <li class="nav-item"><a class="nav-link active" href="cadastro.php">Cadastrar</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5 pt-5">
    <h2 class="mb-4 text-center">Cadastro de Prestador / Fornecedor</h2>

    <?php if ($mensagem): ?>
      <div class="alert alert-success text-center"><?= $mensagem ?></div>
    <?php endif; ?>

    <form method="POST" action="cadastro.php" class="card p-4 shadow">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome / Nome da Empresa</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-select" id="tipo" name="tipo" required>
          <option value="">Selecione...</option>
          <option value="servico">Prestador de Serviço</option>
          <option value="produto">Fornecedor de Produto</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
      </div>

      <div class="mb-3">
        <label for="localizacao" class="form-label">Localização</label>
        <input type="text" class="form-control" id="localizacao" name="localizacao" required>
      </div>

      <div class="mb-3">
        <label for="contato" class="form-label">Contato</label>
        <input type="text" class="form-control" id="contato" name="contato" required>
      </div>

      <div class="mb-3">
        <label for="horario" class="form-label">Horário de Atendimento</label>
        <input type="text" class="form-control" id="horario" name="horario">
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

  <footer class="text-center py-4 mt-5">
    <p class="mb-0">&copy; 2025 SkillMatch - Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
