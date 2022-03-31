<?php
    include_once("conexao.php");
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $cpf = $_POST['cpf'];
        $birthdate = $_POST['birthdate'];

        if (isset($nome) == "" or isset($email) == "" or isset($senha) == "" or isset($telefone)  == "" or isset($cpf) == "" or isset($dataNascimento) == ""){
            "Voce não preencheu todos os dados";
        } else {
            $result_usuario = "INSERT INTO tbclient(client__name, client__email, client__password, client__phone, client__cpf, client__birthdate) VALUES ('$name', '$email', '$password', '$phone', '$cpf', '$birthdate')";
            $result_usuario = mysqli_query($conexao, $result_usuario);
            echo "Cadastrado com sucesso";
        }
?>