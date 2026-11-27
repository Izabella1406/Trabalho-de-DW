<?php
require_once "conexao.php";

$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$senha = $_GET['senha'];


$sql = "INSERT INTO usuario (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "ssss", $nome, $email, $telefone, $senha);
mysqli_stmt_execute($comando);

header("Location: index.php");