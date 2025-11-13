<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "codestart";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso ao banco!";
?>
