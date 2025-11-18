<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];

        header("Location: ../home.php");
        exit;

    } else {
        echo "<script>
                alert('Senha incorreta!');
                window.location.href = '../index.html';
              </script>";
        exit();
    }
} else {
    echo "<script>
            alert('Usuário não encontrado!');
            window.location.href = '../index.html';
          </script>";
    exit();
}

$conn->close();
?>
