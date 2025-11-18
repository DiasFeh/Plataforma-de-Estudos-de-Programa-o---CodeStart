<?php
$servidor = "localhost"; //Onde o banco está
$usuario = "root"; //nome do usuário
$senha = "";
$banco = "codestart"; //nome do banco

$conn = new mysqli($servidor, $usuario, $senha, $banco); //objeto que cria a conexão do banco

if ($conn->connect_error) { //se erro
  die("Conexão falhou: " . $conn->connect_error);
}
?>
