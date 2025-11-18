<?php //aqui é a tela inicial do planejamento
session_start();
include '../php/conexao.php';

// Verifica login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
}

// Pega o nome salvo na sessão
$usuario_nome = $_SESSION['usuario'];

// Busca o ID real do usuário no banco
$sqlUser = "SELECT id FROM usuarios WHERE nome = '$usuario_nome' LIMIT 1";
$resultUser = $conn->query($sqlUser); //Resultado da pesquisa

if ($resultUser->num_rows == 0) {
    echo "Erro: usuário não encontrado no banco!";
    exit(); //Interrompe
}

$userData = $resultUser->fetch_assoc();
$usuario_id = $userData['id'];

// lista apenas os planejamentos deste usuário
$sql = "SELECT * FROM planejamentos WHERE usuario_id = $usuario_id ORDER BY criado_em DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Meu Planejamento</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    #tela { padding-top: 80px; background-color: #f8f9fa; }
</style>
</head>

<body class="bg-light p-4">
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

  <div class="container mt-5" id="tela">

    <h2 class="mb-4">📘 Meu Planejamento</h2>

    <a href="novo.php" class="btn btn-primary mb-3">+ Adicionar Novo</a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Título</th>
          <th>Objetivo</th>
          <th>Status</th>
          <th>Criado em</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?= $row['titulo'] ?></td>
          <td><?= $row['objetivo'] ?></td>
          <td><span class="badge 
            <?php 
              if ($row['status'] == 'pendente') echo 'bg-secondary';
              if ($row['status'] == 'em_andamento') echo 'bg-warning text-dark';
              if ($row['status'] == 'concluido') echo 'bg-success';
            ?>
        ">
            <?= ucfirst($row['status']) ?></span></td>

          <td><?= $row['criado_em'] ?></td>
          <td>
            <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir este item?')">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>

</body>
</html>
