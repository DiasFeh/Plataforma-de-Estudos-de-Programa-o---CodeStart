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
  <title>CodeStart - Nível Avançado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { 
      padding-top: 90px; 
      background: #d11f1f;
      background: linear-gradient(90deg,rgba(209, 31, 31, 1) 0%, rgba(47, 42, 199, 1) 51%, rgba(0, 0, 0, 1) 100%); 
    }
    h2 { 
      color: #0d1b2a; 
      font-weight: bold; 
    }
    .video-card iframe { 
      border-radius: 12px; 
    }
    footer{
    color: rgb(222, 218, 218);
    background-color: black;
    width: 100%;
    height: 20vh;
    display: flex;
    align-items: center;
    justify-content: center}
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
    <h2>Nível Avançado 💾</h2>
    <p class="text-muted">Aprenda a conectar seu site ao banco de dados MySQL.</p>

    <div class="row justify-content-center mt-4">
      <!-- Conexão com MySQL -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>Conexão PHP + MySQL</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/Ln7lqyWJPUE?si=-hyRUTUDhjjV9tIK" allowfullscreen></iframe>
        </div>
      </div>

      <!-- ex 2 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>CRUD Completo com PHP e MySQL</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/BSqtIw_hW8M?si=CVY1ZTmT397HbYYk" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
    <div class="row justify-content-center mt-4">
  <!-- ex 3 -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>Descomplicando o CRUD</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/Je1zgZSK9l4?si=b9wfOXRYcPm5OrbT" allowfullscreen></iframe>
        </div>
      </div>

      <!-- CRUD no PHP -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>CRUD Rápido</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/cdAMARZK_CM?si=JQHwA7EwHJoPCuZb" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>© 2025 CodeStart | Nível Avançado 💻</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
