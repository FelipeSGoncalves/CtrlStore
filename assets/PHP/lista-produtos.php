<?php
    include_once("conexao.php");

    echo "<h1> Selecionando registros usando FOR </h1>";
    $sqlRegistros = mysqli_query($conexao,"select * from tbProduct");
    $num_linhas = mysqli_num_rows($sqlRegistros);

    echo "<table border = '1'>";

    echo    "<tr>
            <th> Código </th>
            <th> Nome </th>
            <th> Marca </th>
            <th> Preco </th> 
            <th> Foto </th>
            <th> Descricao </th> </tr>";

    for($i=0; $i < $num_linhas; $i++){

        $dados = mysqli_fetch_array($sqlRegistros);
        $idProduto = $dados["idProduct"];
        $nome = $dados["product__name"];
        $marca = $dados["product__brand"];
        $preco = $dados["product__price"];
        $imagem = $dados["product__image"];
        $desc = $dados["product__desc"];
        $idCategoria = $dados["idCategory"];

        $preco = number_format($preco, 2);

        echo $imagem;

        if($idCategoria == 1){
            
            echo    "<tr>
            <td> $idProduto </td>
            <td> $nome </td>
            <td> $marca </td>
            <td> $preco </td> 
            <td> <img src='$imagem'> </td>
            <td> $desc </td> </tr>";
        }

        echo "</table";
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="../CSS/signup.css"> -->
        <title> Sign Up </title>
    </head>

    <body>
        <h1> <?php echo $dados["product__name"] ?> </h1>
        <h1> dede </h1>
    </body>
</html>

