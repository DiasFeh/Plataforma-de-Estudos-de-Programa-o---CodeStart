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
      background-color: #f8f9fa; 
    }
    h2 { 
      color: #0d1b2a; 
      font-weight: bold; 
    }
    .video-card iframe { 
      border-radius: 12px; 
    }
  </style>
</head>

<body>

  <div class="container text-center mt-4">
    <h2>Nível Avançado 💾</h2>
    <p class="text-muted">Aprenda a conectar seu site ao banco de dados MySQL.</p>

    <div class="row justify-content-center mt-4">
      <!-- Conexão com MySQL -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>Conexão PHP + MySQL</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/2HVKiz0kL3I" allowfullscreen></iframe>
        </div>
      </div>

      <!-- CRUD no PHP -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>CRUD Completo com PHP e MySQL</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/X9HrmG4A1M0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center text-muted mt-5 mb-3">
    <p>© 2025 CodeStart | Nível Avançado 💻</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
