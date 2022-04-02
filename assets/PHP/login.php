<?php
    include_once("conexao.php");

    $sqlRegistros = mysqli_query($conexao,"select * from tbClient");
    $num_linhas = mysqli_num_rows($sqlRegistros);

    $userlogin = $_POST['user_login'];
    $userpass = $_POST['user_pass'];

    for($i = 0; $i < $num_linhas; $i++){
        $dados = mysqli_fetch_array($sqlRegistros);

        $userloginBD = $dados["client__email"];
        $userpassBD = $dados["client__password"];

        if($userlogin == $userloginBD && $userpass == $userpassBD){
            echo "<script>alert('Usuário logado!');";
            echo "location.href='../HTML/landingPage.html'</script>";
        }
        else if($i >= $num_linhas - 1){
          echo "<script>alert('Usuário não cadastrado!');";
          echo "location.href='../HTML/landingPage.html'</script>";
        }
        
    }
    
?>