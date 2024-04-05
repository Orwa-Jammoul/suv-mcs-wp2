const handleOrderRegistration = async ()=>{
  let cart = JSON.parse(localStorage.getItem('cart')) ?? null;
  if(!cart){
    alert("the cart is empty!")
    return;
  }
  // Access form data and perform actions
  // let email = document.querySelector('#order-form input[name="email"]').value;
  // let password = document.querySelector('#order-form input[name="password"]').value;
  let email = userInfo.email;
  let password = userInfo.password;
  let toCountryId = document.getElementById("to-country").value;
  let address = document.querySelector('#order-form input[name="address"]').value;
  let shippingMethod = document.getElementById("user-shipping-method").value;
  
  let totalPrice = cart.tPrice;
  let totalQuantity = cart.tQty;
  let items = cart.items;
  
  const today = new Date();
  const yyyy = today.getFullYear();
  let mm = today.getMonth() + 1; // Months start at 0!
  let dd = today.getDate();

  if (dd < 10) dd = '0' + dd;
  if (mm < 10) mm = '0' + mm;

  // const createdOn = dd + '/' + mm + '/' + yyyy;
  const createdOn = yyyy + '-' + mm + '-' + dd;

  // let createdOn = Date.now()

  // validation >
  if(!address){
    alert("your Address is required!")
    return;
  }
  //===========

  const url = 'api.php/registerOrder';
  const data = {
    email: email,
    password: password,
    totalPrice:totalPrice,
    totalQuantity:totalQuantity,
    items:items,
    createdOn:createdOn,
    status:'pending',
    toCountryId:toCountryId,
    address:address,
    shippingMethod:shippingMethod,

  };

  let resData = await  postReq(url,data);
  if(resData.data){
    emptyCart();
    goto("./products.php")
    alert("Your order has been registered successfully 👍🏻.");
  }else{
    alert("Failed to register the Order!");
  }
  // console.log(resData);

}

$(document).ready( ()=>{

  console.log(isAuth);
  if(!isAuth || !cart || cart.tQty<1){
    goto('./');
  }

  let signUpForm = document.getElementById('order-form');
  signUpForm.addEventListener("submit", function(event) {

    // Prevent the default form submission
    event.preventDefault();

    // custom JavaScript function to handle form submission
    handleOrderRegistration();
  });



})