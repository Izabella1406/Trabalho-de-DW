<?php
require_once "conexao.php";

$nome_autor = $_GET['nome_autor'];
$data_nascimento = $_GET['data_nascimento'];

$sql = "INSERT INTO autor (nome_autor, data_nascimento) VALUES (?, ?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "ss", $nome_autor, $data_nascimento);
mysqli_stmt_execute($comando);

header("Location: index.php");
