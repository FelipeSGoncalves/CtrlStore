<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dbcrtlstore";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) 
    or die ("Não foi possivel conectar-se ao servidor. Erro:" . mysqli_connect_error());
?>