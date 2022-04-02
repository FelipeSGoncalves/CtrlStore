<?php
    include_once("conexao.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $birthdate = $_POST['birthdate'];

    if (isset($name) == "" or isset($email) == "" or isset($password) == "" or isset($phone)  == "" or isset($cpf) == "" or isset($birthdate) == ""){
        echo "Voce não preencheu todos os dados";
    }else{
        $result_usuario = "INSERT INTO tbclient(client__name, client__email, client__password, client__phone, client__cpf, client__birthdate) 
                            VALUES ('$name', '$email', '$password', '$phone', '$cpf', '$birthdate')";
        $result_usuario = mysqli_query($conexao, $result_usuario);
        echo "<script>alert('Cadastrado com sucesso!');";
        echo "location.href='../HTML/landingPage.html'</script>'";
    }
?>