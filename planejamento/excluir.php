<?php
session_start();
include '../php/conexao.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
}

$id = $_GET['id'];

$conn->query("DELETE FROM planejamentos WHERE id = $id");

header("Location: listar.php");
exit();
?>
