<?php
    include_once("conexao.php");

    $sqlRegistros = mysqli_query($conexao,"select * from tbProduct");
    $num_linhas = mysqli_num_rows($sqlRegistros);

    $userCategoria = $_POST['userCategoria'];
    $userMarca = $_POST['userMarca'];
    $userPreco = $_POST['userPreco'];

    if($userCategoria == "Smartphone"){
      $userCategoria = 1;
    }
    else if($userCategoria == "Notebook"){
      $userCategoria = 2;

    }
    else if($userCategoria == "Monitor"){
      $userCategoria = 3;

    }
    else{
      $userCategoria = 4;
    }

    for($i = 0; $i < $num_linhas; $i++){
        $dados = mysqli_fetch_array($sqlRegistros);

        $idProduto = $dados["idProduct"];
        $nome = $dados["product__name"];
        $marca = $dados["product__brand"];
        $preco = $dados["product__price"];
        $imagem = $dados["product__image"];
        $desc = $dados["product__desc"];
        $idCategoria = $dados["idCategory"];

        if($marca == $userMarca && $idCategoria == $userCategoria){
          $i=14;
        }
        else if($i >= $num_linhas - 1){
          echo "<script>alert('Produto não encontrado!');";
          echo "location.href='../HTML/search.html'</script>";
        }
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../CSS/productPage.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>


  <header class="header" id="header">
    <nav class="nav container">
        <a href="search.html" class="nav__logo">
            <i class="bx bxs-shopping-bags nav__logo-icon"></i> CtrlStore
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="search.html" class="nav__link active-link"> Home </a>
                </li>

                <li class="nav__item">
                    <a href="productPage.html" class="nav__link"> Shop </a>
                </li>

                <li class="nav__item">
                    <a href="aboutUs.html" class="nav__link"> About us</a>
                </li>
            </ul>
        </div>

        <div class="nav__btns">
            <div class="login__toggle" id="login-toggle">
                <i class="bx bx-user"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </div>
      </nav>
  </header>



    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
                <img src = "<?php echo $imagem . '.png'?>">
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title"> <?php echo $nome ?> </h2>

  
            <div class = "product-price">
              <p class = "new-price">Preço: <span> R$ <?php echo $preco . ',00' ?> </span></p>
            </div>
  
            <div class = "product-detail">
              <h2>about this item: </h2>
              <p> <?php echo $desc ?> </p>

              <ul>
                <li>Modelo: <span> <?php echo $nome ?> </span></li>
                <li>Marca: <span> <?php echo $marca ?> </span></li>
                <li>Categoria: <span> Smartphone </span></li>
                <li>Disponibilidade: <span> 10 </span></li>
              </ul>
            </div>
  
            <div class = "purchase-info">
              <input type = "number" min = "0" value = "1">
              <button type = "button" class = "btn">
                Onde comprar <i class = "fas fa-shopping-cart"></i>
              </button>
            </div>
  
          </div>
        </div>
      </div>
</body>
</html>

