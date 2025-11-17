<?php
session_start();

// Se não estiver logado, redireciona
if (!isset($_SESSION['usuario'])) {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeStart - Início</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"> <!--chama o aquivo style-->
</head>

<body class="bg-light">

  <!-- navbar copiada e colada -->
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid px-4">
      <!-- logo -->
      <a class="navbar-brand fw-bold" href="home.php">
        <img src="images/logo.png" alt="CodeStart">
      </a>

      <!-- LINKS -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link fw-semibold" href="home.php">Tela Inicial</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="iniciante\iniciante.php">Iniciante</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="intermediario\intermediario.php">Intermediário</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="avancado\avancado.php">Avançado</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="planejamento/listar.php">Planejamento</a></li>
        </ul>

        <!-- Usuário e Sair -->
        <div class="d-flex align-items-center">
          <span class="navbar-text me-3">
            💙 Olá, <strong><?php echo $_SESSION['usuario']; ?></strong>!
          </span>
          <a href="php/logout.php" class="btn btn-outline-danger btn-sm">Sair</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- SEÇÃO DE INTRODUÇÃO -->
  <div class="container mt-5 pt-4">
    <h2 class="fw-bold text-center mb-3">Bem-vindo ao CodeStart 🚀</h2>
    
    <div class="row">
      <div class="col-5" >
        <p class="text-center text-muted mb-4" id="texto">
          <strong>Primeiro Passo</strong><br>
          Antes de começar sua jornada na programação, você precisa de um ambiente de desenvolvimento.<br>
          Esse ambiente é chamado de <strong>IDE</strong> (Ambiente de Desenvolvimento Integrado).<br>  
          Uma IDE serve para escrever códigos, organizar arquivos e testar seus projetos.<br>
          Para este curso, recomendamos o <strong>Visual Studio Code (VSCode)</strong>, por ser leve, simples e muito utilizado no mercado.
        </p>

      </div>

      <div class=col-4 >
        <img src="images/vs.png" alt="VsCode" id="vs">
      </div>
    </div>

    <!--carrosel inicial-->
    <div id="carouselExampleCaptions" class="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images\2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Planejamento</h5>
                <p>Crie uma rotina de estudos e defina seu objetivo!</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images\3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Planejamento</h5>
                <p>Foque na linguagem que você quer aprende e se dedique!</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images\1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Planejamento</h5>
                <p>O seu foco agora te levara ao seu objetivo.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="row" id="nivel">
      
        <h4 >📚 O que você vai aprender em cada nível:</h4>
        <div>
        <ul >
          <li class="item"><strong>🤓Nível Iniciante:</strong> HTML básico, primeiros passos em CSS e Lógica de Programação.</li>
          <li class="item"><strong>😎Nível Intermediário:</strong> Estilização com Bootstrap e introdução ao PHP.</li>
          <li class="item"><strong><strong>💀Nível Avançado:</strong> Operações completas de CRUD e desafios extras para praticar.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- CONTEÚDO PRINCIPAL -->
  <div class="container mt-4 text-center">
   
</div>
  <footer>
    <p>© 2025 CodeStart | Desenvolvido por Maria Fernanda 💻</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
