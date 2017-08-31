function ajax(ajaxRequest){
  try {
    ajaxRequest = new XMLHttpRequest;
  }catch (e){
    alert(e);
  }
  return ajaxRequest;
}

function dashboardKelolaWaliKelas(){
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.status == 200 && ajaxRequest.readyState == 4){
      var respon = ajaxRequest.responseText;  
      var display = document.getElementById('respon');
      display.innerHTML = respon;
    }
  }
  ajaxRequest.open("POST", "config/PYPDashboardKelolaWaliKelas.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send();
}

function dashboardKelolaKelas(){
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if (ajaxRequest.status == 200 && ajaxRequest.readyState == 4) {
      var respon = ajaxRequest.responseText;
      var display = document.getElementById('respon');
      display.innerHTML = respon;
    }
  }
  ajaxRequest.open("POST", "config/PYPDashboardKelolaKelas.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send();
}

function submitKelolaKelas(){
  var name = document.getElementById('namaKelas').value;
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if (ajaxRequest.status == 200 && ajaxRequest.readyState == 4) {
      var respon = ajaxRequest.responseText;
      console.log(respon);
      var json = JSON.parse(respon);
      if(json.code == 1){
        alert("Success");
      } else{
        alert("Error");
      }
    }
  }
  var input = "name=" + name
  ajaxRequest.open("POST", "config/PYPSubmitKelolaKelas.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}
