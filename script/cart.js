const inOne = (productId)=>{
  increaseOne(productId);
  updateCart();
}
const deOne = (productId)=>{
  decreaseOne(productId);
  updateCart();
}
const delItem = (productId)=>{
  deleteFromCart(productId);
  updateCart();
}

const updateCart = ()=>{
  
  let cartItems = document.getElementById('cart-rows');
  let tQtyValue = document.getElementById('tQty');
  let tPriceValue = document.getElementById('tPrice');
  if(!cart || cart.items.length==0){

    cartItems.innerHTML='<div class="cart-item "><p class="clm">empty</p></div>';
    tQtyValue.innerHTML= 0;
    tPriceValue.innerHTML= 0;
    return;
  }
  // console.log(cart);



  let itemsString = '';
  for (let i = 0; i < cart.items.length; i++) {
    const element = cart.items[i];
    let itemTemplate = '<div class="cart-item "><p class="clm">'+(i+1)+'</p><p class="clm">'+(element.product.title)+'</p><p class="clm"><span class="arrow-up" onclick="inOne('+element.product.id+')" >&#8743;</span> '+(element.qty)+' <span class="arrow-down" onclick="deOne('+element.product.id+')">&#8744;</span></p><p class="clm">'+(element.price)+'</p><p class="clm">'+(element.price * element.qty)+'</p><p class="clm"><span class="del" onclick="delItem('+element.product.id+')">&#10006;</span></p></div>';
    itemsString += itemTemplate;
  }
  cartItems.innerHTML= itemsString;

  tQtyValue.innerHTML= cart.tQty;
  tPriceValue.innerHTML= cart.tPrice;

}

const emptyCartTable = ()=>{
  cart = {
    items:[],
    tQty:0,
    tPrice:0,
  };
  localStorage.removeItem('cart');
  
  updateCart();
  let cartNum = document.querySelector('p#cart-item-num');
  cartNum.innerHTML = 0;
  cartNum.classList.add('hide');

}

const orderCart = ()=>{
  if(!cart){
    alert("the cart is empty!")
    return;
  }
  if(isAuth){
    goto('./order.php');
  }else{
    goto('./login.php');
  }
}


$(document).ready(function(){
  updateCart();



})