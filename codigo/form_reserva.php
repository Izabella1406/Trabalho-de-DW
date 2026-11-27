<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Reserva</title>
</head>
<body>
    <h1> Cadastro de Reserva</h1>

    <form action="salvar_reserva.php" method="GET">
        Data de Reserva:
        <input type="date" name="data_reserva"> <br><br>

        Id do Usuário:
         <select name="idusuario">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM usuario";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $usuario = mysqli_stmt_get_result($comando);

            while ($usuarios = mysqli_fetch_array($usuario)) {
                $usuario_id = $usuarios['idusuario'];
                $usuario_nome = $usuarios['nome'];
                $usuario_email = $usuarios['email'];
                $usuario_telefone = $usuarios['telefone'];
                $usuario_senha = $usuarios['senha'];

                echo "<option value='$usuario_id'>$usuario_nome</option>";
            }
        
         ?>
         </select>
         <br><br>
      
       Id do Livro:
       <select name="idlivro">
         <?php
          require_once "conexao.php";

            $sql = "SELECT * FROM livro";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $livro = mysqli_stmt_get_result($comando);

            while ($livros = mysqli_fetch_array($livro)) {
            $livro_id = $livros['idlivro'];
            $livro_titulo = $livros['titulo'];
             echo "<option value='$livro_id'>$livro_titulo</option>";
            }


    
       ?>
        </select>
        <br><br>
        <input type="submit" value="Salvar">

</body>
</html>