<?php
require_once "conexao.php";

$titulo = $_GET['titulo'];
$ano_publicacao = $_GET['ano_publicacao'];
$id_autor = $_GET['idautor'];
$id_categoria = $_GET['idcategoria'];

$sql = "INSERT INTO livro (titulo, ano_publicacao, idautor, idcategoria) VALUES (?,?,?,?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "ssss", $titulo,$ano_publicacao ,$id_autor, $id_categoria);
mysqli_stmt_execute($comando);

header("Location: index.php");
