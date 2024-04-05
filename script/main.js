
// global variables
let userInfo= JSON.parse(localStorage.getItem('userInfo')) ?? null;
let isAuth= !!userInfo;
let cart =  JSON.parse(localStorage.getItem('cart')) ?? null;


function showNavbarDropDown(){
  $('.drdn-menu').toggleClass('active');
}
function hideNavbarDropDown(){
  $('.drdn-menu').removeClass('active');
}

function goto(link){
  window.location = link;
}

function transparenteNavBar(scrollPosition){
  let navbar= $(".main-navbar .nav-bottom")[0]
  if(scrollPosition>10 ){
    navbar.classList.add('solid-bg');
  }else{
    navbar.classList.remove('solid-bg');
  }
}

//==================================

$(document).ready(()=>{
  userInfo= JSON.parse(localStorage.getItem('userInfo'));
  isAuth= !!userInfo;

  if(isAuth){
    showAuthIcon();
  }else{
    hideAuthIcon();
  }

  $('.drdn-menu').mouseleave(function(){ 
    hideNavbarDropDown();
  });

  $(window).on('scroll',function(){
    let scrollPosition=$(window).scrollTop();
    transparenteNavBar(scrollPosition)
  });
  
  let cartNum = document.querySelector('p#cart-item-num');
  cart =  JSON.parse(localStorage.getItem('cart')) ?? null;
  if(cart){
    cartNum.innerHTML = cart.tQty
    // console.log(cart);
    if(cart.tQty>0){
      cartNum.classList.remove('hide');
    }else{
      cartNum.classList.add('hide');
    }
  }else{
    cartNum.classList.add('hide');
  }


});


//===================================

// fetch

const getReq= async (url)=>{
  let dataRes =''
  await fetch(url, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
  })
  .then(response => response.json())
  .then(data => {
    dataRes = data
  })
  .catch(error => {
    dataRes = error
  });

  return dataRes
}

const postReq= async (url, data)=>{
  let dataRes =''
  await fetch(url, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => {
    dataRes = data
  })
  .catch(error => {
    dataRes = error
  });

  return dataRes
}

//===================================

const showAuthIcon = ()=>{
  // Access form data and perform actions
  let login = document.querySelector('.account-img#loged-in');
  let logout = document.querySelector('.account-img#loged-out');
  logout.classList.add('hide');
  login.classList.remove('hide');
}

const hideAuthIcon = ()=>{
  // Access form data and perform actions
  let login = document.querySelector('.account-img#loged-in');
  let logout = document.querySelector('.account-img#loged-out');
  login.classList.add('hide');
  logout.classList.remove('hide');
}

const logout = ()=>{
  hideAuthIcon();
  localStorage.removeItem('userInfo');
  userInfo=null;
  isAuth=false;
  goto("./")
}

//===================================

//cart

const getPrice= (product)=>{
  return product.offerRate>0? (100-product.offerRate)*0.01*product.price:product.price;
}

const addToCart = (product, qty=1)=>{
  // if(qty=0){
  //   deleteFromCart(product.id);
  //   return
  // }
  
  // console.log(qty);
  let price = getPrice(product);

  let itemTemp = {
    product:product,
    qty:qty,
    price: price,
  };
  // console.log(itemTemp);

  let cartTemp = {
    items:[],
    tQty:0,
    tPrice:0,
  };

  if(!cart){
    cart = cartTemp;
  }

  let oldProduct = cart.items.find(ele=> ele.product.id ==product.id);
  if(!oldProduct){
    cart.items.push(itemTemp);
    cart.tQty +=  itemTemp.qty;
    cart.tPrice += itemTemp.price * itemTemp.qty;
  }else{
    for (let i = 0; i < cart.items.length; i++) {
      if(cart.items[i].product.id ==product.id){
        cart.items[i]=itemTemp;
      }
    }
    cart.tQty +=  itemTemp.qty - oldProduct.qty;
    cart.tPrice += itemTemp.price * (itemTemp.qty - oldProduct.qty);
  }

  localStorage.setItem('cart', JSON.stringify(cart) )

  let cartNum = document.querySelector('p#cart-item-num');
  cartNum.innerHTML = cart.tQty;
  if(cart.tQty==0){
    cartNum.classList.add('hide');
  }else{
    cartNum.classList.remove('hide');
  }
}
const deleteFromCart = (productId)=>{
  console.log('del', productId);
  for (let i = 0; i < cart.items.length; i++) {
    if(cart.items[i].product.id ==productId){
      cart.tQty -= cart.items[i].qty;
      cart.tPrice -= cart.items[i].price * cart.items[i].qty;
      cart.items = cart.items.filter(ele => ele.product.id!=productId)
      // cart.items = cart.items.slice(0,i).concat(cart.items.slice(i+1,cart.items.length));

    }
  }

  localStorage.setItem('cart', JSON.stringify(cart) )

  let cartNum = document.querySelector('p#cart-item-num');
  cartNum.innerHTML = cart.tQty;
  if(cart.tQty==0){
    cartNum.classList.add('hide');
  }else{
    cartNum.classList.remove('hide');
  }
}
const emptyCart = ()=>{
  cart = {
    items:[],
    tQty:0,
    tPrice:0,
  };
  localStorage.removeItem('cart');

  let cartNum = document.querySelector('p#cart-item-num');
  cartNum.innerHTML = 0;
  cartNum.classList.add('hide');

}


const addOne = (product)=>{
  // console.log(product.id);
  let oldProduct = null;
  if(cart){
    oldProduct = cart.items.find(ele=> ele.product.id ==product.id);
  }
  if(!oldProduct || !cart){
    document.querySelector('.cart-img .item-num').classList.add('animate') ;
    setTimeout(()=>{
      document.querySelector('.cart-img .item-num').classList.remove('animate') ;
      addToCart(product)
    }, 500);
  }
}

const increaseOne = (productId)=>{
  // console.log(productId);
  let productItem = cart.items.find(ele=> ele.product.id ==productId);

  document.querySelector('.cart-img .item-num').classList.add('animate') ;
  setTimeout(()=>{
    document.querySelector('.cart-img .item-num').classList.remove('animate') ;
  }, 500);
  addToCart(productItem.product, productItem.qty+1)
  
}
const decreaseOne = (productId)=>{
  // console.log(productId);
  let productItem = cart.items.find(ele=> ele.product.id ==productId);

  if(productItem){
    document.querySelector('.cart-img .item-num').classList.add('animate') ;
    setTimeout(()=>{
      document.querySelector('.cart-img .item-num').classList.remove('animate') ;
    }, 500);
    if(productItem.qty-1<1){
      deleteFromCart(productItem.product.id);
    }else{
      addToCart(productItem.product, productItem.qty-1)
    }
  }
}



