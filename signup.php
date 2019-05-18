<?php include "signupbackend.php" ?>
 <form method="POST" onsubmit="return Validate()" name="vform">
<div id="id02" style=" position: fixed; /* Stay in place */
    z-index: 900000000000000000000000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    overflow-y: hidden;
    display: none; "><div class="connecter animate2"><div id="login-box">

  <script type="text/javascript">
    var username=document.forms["vform"]["user"];
    var email=document.forms["vform"]["email_connect"];
    var password=document.forms["vform"]["password"];
    var  password_confirm=document.forms["vform"]["password2"];
    //
    var name_error=document.getElementById("name_error");
    var email_error=document.getElementById("email_error");
    var password_error=document.getElementById("password_error");
//
    username.addEventListener("blur", nameVerify,true);
    email.addEventListener("blur", emailVerify,true);
    password.addEventListener("blur", passwordVerify,true);
    //
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}





  </script>

  <i class="fas fa-times-circle" onclick="document.getElementById('id02').style.display='none'" ></i>
      <div class="left-box">
        <h1> S'inscrire</h1>


          <div id="username_div">
          <input type="text" name="user" placeholder="Nom d'utilisateur"/>
          <div id="name_error"></div></div>
          

          <div id="email_div">
          <input type="text" name="email_connect" placeholder="Email"/>
        <div id="email_error"></div>
      </div>
         

          <div id="password_div">
          <input type="password" name="password" placeholder="Mot de passe"/>
          </div>


          <div id="pass_confirm_div">
          <input type="password" name="password2" placeholder="Retaper mot de passe"/></div>



          <div id="password_error"></div>



           <button  name="signupbutton" class="btn"  >S'inscrire</button>
        
        </div>
        <div class="right-box">
          <span class="signinwith">Se connecter avec<br/>Réseau social</span>
        
        <button class="social facebook">Se connecter avec Facebook</button>    
        <button class="social twitter">Se connecter avec Twitter</button> 
        <button class="social google">Se connecter avec Google+</button> 
            
        
        </div>
        <div class="or">OU</div>
    </div>
    </div></div>
  </form>