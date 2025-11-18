<?php
session_start();
include '../php/conexao.php'; //ativa o php

if (!isset($_SESSION['usuario'])) {//verifica
    header("Location: ../index.html");
    exit();
}

$id = $_GET['id']; //pega o id

$conn->query("DELETE FROM planejamentos WHERE id = $id"); //comando delete

header("Location: listar.php"); //redireciona
exit();
?>
