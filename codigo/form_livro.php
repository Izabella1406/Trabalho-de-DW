<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h1> Cadastro de Livro</h1>
    <form action= "salvar_livro.php" method="GET" >

        Titulo: <br>
        <input type="text" name="titulo"> <br><br>

        Ano de Publicação: <br>
        <input type="date" name="ano_publicacao"> <br><br>

        Id Autor: <br>
         <select name="idautor">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM autor";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $autor = mysqli_stmt_get_result($comando);

            while ($autores = mysqli_fetch_array($autor)) {
                $autores_id = $autores['idautor'];
                $autores_nome = $autores['nome'];
               
                echo "<option value='$autores_id'>$autores_nome</option>";
            }
        
         ?>
         </select>

       Id Categoria: <br>
         <select name="idcategoria">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM categoria";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $categoria = mysqli_stmt_get_result($comando);

            while ($categorias = mysqli_fetch_array($categoria)) {
                $categorias_id = $categorias['idcategoria'];
                $categorias_genero = $categorias['genero'];
               
                echo "<option value='$categorias_id'>$categorias_genero</option>";
            }
         
         ?>
         </select>


        <input type="submit" value="Salvar">
</body>
</html>