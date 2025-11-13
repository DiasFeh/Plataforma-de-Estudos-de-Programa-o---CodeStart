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
  <title>CodeStart - Nível Intermediário</title>
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
    <h2>Nível Intermediário ⚙️</h2>
    <p class="text-muted">Aprofunde seus conhecimentos em CSS e introdução ao PHP.</p>

    <div class="row justify-content-center mt-4">
      <!-- CSS -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>CSS - Estilizando páginas com elegância</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/yfoY53QXEnI" allowfullscreen></iframe>
        </div>
      </div>

      <!-- PHP -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3 video-card">
          <h5>Introdução ao PHP - Primeiros Passos</h5>
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/OK_JCtrrv-c" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center text-muted mt-5 mb-3">
    <p>© 2025 CodeStart | Nível Intermediário 💻</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</
