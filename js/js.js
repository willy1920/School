document.getElementById("login").addEventListener('click', login, false);
function login(){
  var ajaxRequest = ajax(ajaxRequest);
  var user = document.getElementById("user").value;
  var pass = document.getElementById("pass").value;

  ajaxRequest.onreadystatechange = function(){
    if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
      var respon = JSON.parse(ajaxRequest.responseText);
      //var respon = ajaxRequest.responseText;
      if(respon.execute == 1){
        window.location = respon.staf + ".php";
      } else if (respon.execute == 0) {
        alert("Username atau password salah");
      }
      console.log(respon);
    }
  }

  ajaxRequest.open("POST", "config/loginUser.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send("user=" + user + "&pass=" + pass);
}

function ajax(ajaxRequest){
  try {
    ajaxRequest = new XMLHttpRequest;
  }catch (e){
    alert(e);
  }
  return ajaxRequest;
}
