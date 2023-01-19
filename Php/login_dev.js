function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
  if(username=="ap" && password=="77"){
      alert("Login succesfully");
      window.open('login-dev2.php')
  }
  else 
  {
    alert("Login failed");
    window.location.assign("http://localhost/php/login_dev.php?")

  }
}