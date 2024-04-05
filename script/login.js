
const handleLoginData = async ()=>{
  // Access form data and perform actions
  let email = document.querySelector('#login-form input[name="email"]').value;
  let password = document.querySelector('#login-form input[name="password"]').value;

  // validation >
  if(!email){
    alert("Your Email is required!")
    return;
  }else if(!password){
    alert("Your Password is required!")
    return;
  }

  //===========
  
  const url = 'api.php/auth';
  const data = {
      email: email,
      password: password
  };
  
  let resData = await  postReq(url,data);
  if(resData.ok){
    isAuth = true;
    userInfo= resData.data;
    localStorage.setItem('userInfo', JSON.stringify(userInfo));
    goto('./account.php');  
  }else{
    console.alert(resData);
    isAuth = false;
    alert("Invalid Email or Password!");
  }
}
const handleSignUpData = async ()=>{
  // Access form data and perform actions
  let email = document.querySelector('#sign-up-form input[name="email"]').value;
  let password = document.querySelector('#sign-up-form input[name="password"]').value;
  let cPassword = document.querySelector('#sign-up-form input[name="cpassword"]').value;
  let fName = document.querySelector('#sign-up-form input[name="fName"]').value;
  let lName = document.querySelector('#sign-up-form input[name="lName"]').value;
  let phone = document.querySelector('#sign-up-form input[name="phone"]').value;
  let birthday = document.querySelector('#sign-up-form input[name="birthday"]').value;
  let country = document.getElementById("sign-country").value;

  let date = new Date(birthday);
  let birthyear = date.getFullYear();

  // validation >
  if(!email){
    alert("Your Email is required!")
    return;
  }else if(!password){
    alert("Your password is required!")
    return;
  }else if(password.length<6){
    alert("Your password is too short!.\nYour password should be more than 6 characters long.")
    return;
  }else if(!cPassword){
    alert("Please confirm your password.")
    return;
  }else if(password!=cPassword){
    alert("Password confirmation does not match the password.\nPlease try again.")
    return;
  }else if(!fName){
    alert("Your first name is required!")
    return;
  }else if(!lName){
    alert("Your last name is required!")
    return;
  }else if(!phone){
    alert("Your phone is required!")
    return;
  }else if(!birthday){
    alert("Your birthday is required!")
    return;
  }else if(birthyear+18> (new Date()).getFullYear()){
    alert("Your are under 18!.\nSorry you cann't create account.");
    return;
  }else if(!country){
    alert("Your country is required!")
    return;
  }
  
  //===========

  const url = 'api.php/register';
  const data = {
    email: email,
    password: password,
    fName:fName,
    lName:lName,
    phone:phone,
    birthday:birthday,
    country:country,
  };

  let resData = await  postReq(url,data);

  if(resData.ok){
    isAuth = true;
    userInfo= resData.data
    localStorage.setItem('userInfo', JSON.stringify(userInfo));
    goto('./account.php');  
  }else{
    console.log(resData);
    isAuth = false;
    alert("Invalid data!")
  }

}

$(document).ready(function(){
  // console.log(isAuth);
  if(isAuth){
    goto('./account.php');
    return;
  }

  let loginForm = document.getElementById('login-form');

  loginForm.addEventListener('submit', function(event) {

    // Prevent the default form submission
    event.preventDefault();
    console.log("login submit");
    // custom JavaScript function to handle form submission
    handleLoginData();
  });

  let signUpForm = document.getElementById('sign-up-form');
  signUpForm.addEventListener("submit", function(event) {
    console.log("login submit");
    // Prevent the default form submission
    event.preventDefault();

    // custom JavaScript function to handle form submission
    handleSignUpData();
  });

})