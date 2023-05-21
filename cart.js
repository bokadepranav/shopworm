//cart js
let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart-container');
let closeCart = document.querySelector('#close-cart');

cartIcon.onclick = () => {
	cart.classList.add("active");
}

// if (cartIcon) {
//   cartIcon.addEventListener('click' , () => {
//     cartIcon.classList.remove('active');
//   })
// }