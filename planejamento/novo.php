<?php
session_start();
include '../php/conexao.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Buscar ID do usuário pelo nome armazenado na sessão
    $nomeUsuario = $_SESSION['usuario'];
    $busca = $conn->query("SELECT id FROM usuarios WHERE nome = '$nomeUsuario' LIMIT 1");
    $user = $busca->fetch_assoc();
    $usuario_id = $user['id'];

    $titulo = $_POST['titulo']; //recebe do usuário - formulário
    $objetivo = $_POST['objetivo'];
    $status = $_POST['status'];
        
    $sql = "INSERT INTO planejamentos (titulo, objetivo, status, usuario_id) 
        VALUES ('$titulo', '$objetivo', '$status', $usuario_id)"; //cria um novo registro na tabela


    $conn->query($sql); //inserindo no banco

    header("Location: listar.php"); //redirecionando
    exit(); //impede qualquer execução extra
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Novo Planejamento</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

<h2>Adicionar Planejamento</h2>

<form method="POST">

    <div class="mb-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>

    <label class="form-label">Objetivo (tempo ou anotação):</label>
    <input type="text" name="objetivo" class="form-control mb-3">


    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pendente">Pendente</option>
            <option value="em_andamento">Em andamento</option>
            <option value="concluido">Concluído</option>
        </select>
    </div>

    </div>

    <button class="btn btn-success">Salvar</button>
    <a href="listar.php" class="btn btn-secondary">Voltar</a>

</form>

</body>
</html>
