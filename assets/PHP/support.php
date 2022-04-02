<?php
    include_once("conexao.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (isset($name) == "" or isset($email) == "" or isset($subject) == "" or isset($message) == ""){
        echo "Voce não preencheu todos os dados";
    }else{
        $result_usuario = "INSERT INTO tbsupport(user__name, user__email, user__subject, user__message) 
                            VALUES ('$name', '$email', '$subject', '$message')";
        $result_usuario = mysqli_query($conexao, $result_usuario);
        echo "<script>alert('Mensagem enviada com sucesso!');";
        echo "location.href='../HTML/landingPage.html'</script>'";
    }
?>