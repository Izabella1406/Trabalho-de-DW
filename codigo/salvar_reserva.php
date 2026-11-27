<?php
require_once "conexao.php";

$data_reserva = $_GET['data_reserva'];
$id_usuario = $_GET['idusuario'];
$id_livro = $_GET['idlivro'];

$sql = "INSERT INTO reserva (data_reserva, idusuario, idlivro) VALUES (?,?,?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "sii", $data_reserva,$id_usuario ,$id_livro);
mysqli_stmt_execute($comando);

header("Location: index.php");
