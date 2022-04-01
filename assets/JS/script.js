// Abre e fecha a pagina de login

let openLogin = document.getElementById("icone-user");
let closeLogin = document.getElementById("login-close");

openLogin.addEventListener('click', function(e){
    document.getElementById("login").style.right = "0";
})

closeLogin.addEventListener('click', function(e){
    document.getElementById("login").style.right = "-100%";
})


// Abre e fecha o carrinho

let openCart = document.getElementById("icone-cart");
let closeCart = document.getElementById("cart-close");

openCart.addEventListener('click', function(e){
    document.getElementById("cart").style.right = "0";
})

closeCart.addEventListener('click', function(e){
    document.getElementById("cart").style.right = "-100%";
})

// Home Swiper

var homeSwiper = new Swiper(".home-swiper", {
    spaceBetween: 30,
    loop: 'true',

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });