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
          echo "location.href='../HTML/landingPage.html'</script>";
        }
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- CSS SWIPER -->
    <link rel="stylesheet" href="../CSS/swiper-bundle.min.css">

    <!-- CSS Normal -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/color-1.css">
    <link rel="stylesheet" href="../CSS/productPage.css">

    <title> CrtlStore </title>
</head>

<body>
    <header class="header" id="header"> 
        <nav class="nav container">
            <a href="landingPage.html" class="nav__logo">
                <i class="bx bxs-shopping-bags nav__logo-icon"></i> CrtlStore
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="landingPage.html" class="nav__link active-link"> Home </a>
                    </li>

                    <li class="nav__item">
                        <a href="productPage.html" class="nav__link"> Shop </a>
                    </li>

                    <li class="nav__item">
                        <a href="support.html" class="nav__link"> Contatos </a>
                    </li>

                    <li class="nav__item">
                        <a href="cart.html" class="nav__link"> Carrinho </a>
                    </li>
                </ul>
            </div>

            <div class="nav__btns">
                <div class="login__toggle" id="login-toggle">
                    <i class="bx bx-user" id="icone-user"></i>
                </div>

                <div class="nav__shop" id="cart-shop">
                    <i class="bx bx-shopping-bag" id="icone-cart"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>

    <div class="cart" id="cart">
        <i class="bx bx-x cart__close" id="cart-close"></i>

        <h2 class="cart__title-center"> Meu Carrinho </h2>

        <div class="cart__container">
            <article class="cart__card">
                    <img src="/img/Smartphone/imageMotorolaG10.png" alt="" class="cart__img">

                <div class="cart__details">
                    <h3 class="cart__title"> Notebook Acer Aspire </h3>
                    <span class="cart__price"> R$3500 </span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number"> 1 </span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <img src="../../img/Laptop/imageAcerAspire5.png" alt="" class="cart__img">

            <div class="cart__details">
                <h3 class="cart__title"> Notebook Alienware m15 </h3>
                <span class="cart__price"> R$12000 </span>

                <div class="cart__amount">
                    <div class="cart__amount-content">
                        <span class="cart__amount-box">
                            <i class="bx bx-minus"></i>
                        </span>

                        <span class="cart__amount-number"> 1 </span>

                        <span class="cart__amount-box">
                            <i class="bx bx-plus"></i>
                        </span>
                    </div>

                    <i class="bx bx-trash-alt cart__amount-trash"></i>
                </div>
            </div>
            </article>

            <article class="cart__card">
                <img src="../../img/Monitor/imageDellP.png" alt="" class="cart__img">

                <div class="cart__details">
                    <h3 class="cart__title"> Notebook RazerBlade 15 </h3>
                    <span class="cart__price"> R$13500 </span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number"> 1 </span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item"> 3 itens </span>
            <span class="cart__prices-total"> R$29000 </span>
        </div>
    </div>

    <div class="login" id="login">
        <i class="bx bx-x login__close" id="login-close"></i>

        <h2 class="login__title-center"></h2>

        <form action="" class="login__form grid">
            <div class="login__content">
                <label for="" class="login__label"> Email </label>
                <input type="email" class="login__input">
            </div>

            <div class="login__content">
                <label for="" class="login__label"> Senha </label>
                <input type="password" class="login__input">
            </div>

            <div>
                <a href="#" class="button"> Sign in </a>
            </div>

            <div>
                <p class="singup"> Ainda sem cadastro? <a href="registro.html"> Cadastre-se </a> </p> 
            </div>
        </form>
    </div>

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

