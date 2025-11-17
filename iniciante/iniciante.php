<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: ../index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeStart - Nível Iniciante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { 
      width: 100%;
      height: 100vh;
      padding-top: 100px; 
      background: #6fe3b3;
      background: linear-gradient(90deg,rgba(111, 227, 179, 1) 0%, rgba(47, 42, 199, 1) 65%, rgba(0, 0, 0, 1) 100%); }
    h2 { color: #0d1b2a; font-weight: bold; }
    .video-card iframe { border-radius: 12px; }
    footer{
    color: rgb(222, 218, 218);
    background-color: black;
    width: 100%;
    height: 20vh;
    display: flex;
    align-items: center;
    justify-content: center
}
  </style>
</head>

<body>
  <!-- navbar copiada e colada -->
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid px-4">
      <!-- logo -->
      <a class="navbar-brand fw-bold" href="home.php">
        <img src="../images/logo.png" alt="CodeStart">
      </a>

      <!-- LINKS -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link fw-semibold" href="..\home.php">Tela Inicial</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="..\iniciante\iniciante.php">Iniciante</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="..\intermediario\intermediario.php">Intermediário</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="..\avancado\avancado.php">Avançado</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="..\planejamento/listar.php">Planejamento</a></li>
        </ul>

        <!-- Usuário e Sair -->
        <div class="d-flex align-items-center">
          <span class="navbar-text me-3">
            💙 Olá, <strong><?php echo $_SESSION['usuario']; ?></strong>!
          </span>
          <a href="../php/logout.php" class="btn btn-outline-danger btn-sm">Sair</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container text-center mt-4">
    <h2>Nível Iniciante 🚀</h2>
    <p class="text-muted">Aprenda os primeiros passos: lógica de programação e HTML básico.</p>

    <div class="row justify-content-center mt-4">
      <!-- Dica 1 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>HTML</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/Fhy-5CtVkiM?si=hveTn8KBx4yiEGTa" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Dica 2 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>CSS </h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/AB35iSr1YyA?si=wBLAHEPUtdqbcyuL" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
      <!-- Dica 1 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>HTML + CSS</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/pXAGoP2G2vE?si=8iFYhDh1D9Yym_S_" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Dica 4 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>LÓGICA DE PROGRAMAÇÃO </h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/FF1wTboPbkc?si=h7LrD2PmSVYwNN99" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>© 2025 CodeStart | Nível Iniciante 💻</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
