<?php
require_once "conexao.php";

$genero = $_GET['genero'];

$sql = "INSERT INTO tb_categoria (genero) VALUES (?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "s", $genero);
mysqli_stmt_execute($comando);

header("Location: index.php");
