
const fetchOrders = async ()=>{
  const url = 'api.php/orders';
  const data = {
    email: userInfo.email,
    password: userInfo.password,
  };

  let resData = await  postReq(url,data);
  if(resData.data){
    return resData.data;
    // goto("./products.php")
    // alert("Your order has been registered successfully 👍🏻.");
  }else{
    // alert("Failed to register the Order!");
  }
}


const updateOrders = async ()=>{

  const url = 'api.php/orders';
  const data = {
    email: userInfo.email,
    password: userInfo.password,
  };

  let userOrderData = await postReq(url,data);
  let userOrder = [];
  if(userOrderData.data){
    userOrder = userOrderData.data;
  }else{
    console.log('no orders');
  }

  let orderItems = document.getElementById('order-rows');
  if(!userOrder || userOrder.length==0){
    orderItems.innerHTML='<div class="order-item "><p class="clm">empty</p></div>';
    return;
  }else{
    let itemsString = '';
    for (let i = 0; i < userOrder.length; i++) {

      const element = userOrder[i];

      let itemTemplate = '<div class="order-item "><p class="clm">'+(i+1)+
      '</p><p class="clm">'+(element.iso3)+
      '</p><p class="clm">'+(element.address)+
      '</p><p class="clm">'+(element.totalPrice)+
      '</p><p class="clm">'+(element.totalQuantity)+
      '</p><p class="clm">'+(element.shipping_name)+
      '</p><p class="clm">'+(element.shipping_cost)+
      '</p><p class="clm">'+(element.status)+
      '</p></div>';

      itemsString += itemTemplate;
    }
    orderItems.innerHTML= itemsString;
  }

}

function cFLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}


$(document).ready( ()=>{

  // console.log(isAuth);
  if(!isAuth){
    goto('./');
  }

  let userNameEle = document.getElementById('user-name-head');
  let userName = cFLetter(userInfo.FName) + " " + cFLetter(userInfo.LName);
  userNameEle.innerHTML= userName; 
  
  let userNameInfoEle = document.getElementById('user-name-info');
  let emailInfoEle = document.getElementById('email-info');
  let phoneInfoEle = document.getElementById('phone-info');
  let countryInfoEle = document.getElementById('country-info');
  let birthdayInfoEle = document.getElementById('birthday-info');

  // console.log(userInfo);
  userNameInfoEle.innerHTML= userName; 
  emailInfoEle.innerHTML= userInfo.email; 
  phoneInfoEle.innerHTML= userInfo.phone; 
  countryInfoEle.innerHTML= userInfo.nicename; 
  birthdayInfoEle.innerHTML= userInfo.birthdate; 

  updateOrders();
  
})