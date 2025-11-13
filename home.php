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
  <style>
    body {
        background: #6fcce3;
    background: radial-gradient(circle,rgba(111, 204, 227, 1) 0%, rgba(47, 42, 199, 1) 28%, rgba(0, 0, 0, 1) 100%);
      padding-top: 80px; /* Espaço para a navbar fixa */
    }
    .navbar {
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    #nivel {
        
        width: 100%;
        height: 100vh; /* altura total da tela */
        display: flex;
        align-items: center;   /* centraliza verticalmente */
        justify-content: center; /* centraliza horizontalmente */
    }

  </style>
</head>

<body class="bg-light">

  <!-- NAVBAR FIXA -->
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid px-4">
      <!-- LOGO -->
      <a class="navbar-brand fw-bold" href="home.php">
        <img src="images/logo.png" alt="CodeStart">
      </a>

      <!-- BOTÃO MENU MOBILE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link fw-semibold" href="home.php">Tela Inicial</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="iniciante\iniciante.php">Iniciante</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="intermediario\intermediario.php">Intermediário</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="avancado\avancado.php">Avançado</a></li>
        </ul>

        <!-- Usuário e Sair -->
        <div class="d-flex align-items-center">
          <span class="navbar-text me-3">
            👋 Olá, <strong><?php echo $_SESSION['usuario']; ?></strong>!
          </span>
          <a href="php/logout.php" class="btn btn-outline-danger btn-sm">Sair</a>
        </div>
      </div>
    </div>
  </nav>
    <!--carrosel inicial-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images\2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images\3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images\1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
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
  <!-- CONTEÚDO PRINCIPAL -->
  <div class="container mt-4 text-center">
   
  
    <!--card de níveis-->
    <div class="container mt-4" id="nivel">
        <div class="row justify-content-center">
        <h2>Escolha seu nível de aprendizado 🚀</h2>
        <p class="text-muted">Avance no seu ritmo e aprenda programação do zero ao avançado.</p>
 
        <div class="col-md-3">
            <div class="card shadow-sm mb-4 text-center">
            <div class="card-body">
                <h4 class="card-title">Iniciante</h4>
                <p class="card-text">Lógica e HTML básico.</p>
                <a href="iniciante.php" class="btn btn-primary w-100">Acessar</a>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm mb-4 text-center">
            <div class="card-body">
                <h4 class="card-title">Intermediário</h4>
                <p class="card-text">CSS e introdução ao PHP.</p>
                <a href="intermediario.php" class="btn btn-success w-100">Acessar</a>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm mb-4 text-center">
            <div class="card-body">
                <h4 class="card-title">Avançado</h4>
                <p class="card-text">Banco de dados MySQL.</p>
                <a href="avancado.php" class="btn btn-danger w-100">Acessar</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
  <footer class="text-center mt-5 text-muted">
    <p>© 2025 CodeStart | Desenvolvido Maria Fernanda 💻</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
