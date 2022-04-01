const showCart = document.getElementById('show-cart');
const changeCart = document.getElementById('cart');
const closeCart = document.getElementById('close-cart');

    showCart.addEventListener('click', function(e){
        changeCart.style.right = 0;
    })

    closeCart.addEventListener('click', function(e){
        changeCart.style.right = "-100%";
    })

const showLogin = document.getElementById('show-login');
const changeLogin = document.getElementById('login');
const closeLogin = document.getElementById('close-login');
    
    showLogin.addEventListener('click', function(e){
        changeLogin.style.right = 0;
    })
    
    closeLogin.addEventListener('click', function(e){
        changeLogin.style.right = "-100%";
    })