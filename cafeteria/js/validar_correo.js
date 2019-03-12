function validar_email(){
  let email = document.getElementById('email');
  var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (regex.test(email.value) ? true : false) {
    return true;
  } else {
    email.style.borderColor = "red";
    return false;
  }
}
