function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if(username=="ap" && password=="777" ){
      alert("Login succesfully");
      window.open('login_dr2.php')
  }
  else 
  {
    alert("Login failed");
    window.location.assign("http://localhost/php/login_dr.php?")

  }
}