<?php
session_start();
include '../php/conexao.php';

// Verificando se o ID foi enviado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: listar.php");
    exit();
}

$id = $_GET['id'];

// Se enviou o formulário, atualiza
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //ele apretou para enviar? (POST)

    $titulo = $_POST['titulo'];  //pega os dados do usuário
    $objetivo = $_POST['objetivo'];
    $status = $_POST['status'];

    //atualiza um registro na tabela
    $sql = "UPDATE planejamentos
            SET titulo='$titulo', 
                objetivo='$objetivo', 
                status='$status'
            WHERE id=$id"; //define quais campos serão atualizados

    $conn->query($sql); //execulta no banco

    header("Location: listar.php");
    exit();
}

// Carregar item atual
$sql = "SELECT * FROM planejamentos WHERE id = $id";
$item = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Planejamento</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

<h2>Editar Planejamento</h2>

<form method="POST">

    <div class="mb-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="<?= $item['titulo'] ?>" required>
    </div>

    <label class="form-label">Objetivo:</label>
    <input type="text" name="objetivo" value="<?= $item['objetivo'] ?>" class="form-control mb-3">

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pendente" <?= $item['status']=="pendente" ? "selected" : "" ?>>Pendente</option>
            <option value="em_andamento" <?= $item['status']=="em_andamento" ? "selected" : "" ?>>Em andamento</option>
            <option value="concluido" <?= $item['status']=="concluido" ? "selected" : "" ?>>Concluído</option>
        </select>
    </div>

    <button class="btn btn-primary">Atualizar</button>
    <a href="listar.php" class="btn btn-secondary">Cancelar</a>

</form>

</body>
</html>
