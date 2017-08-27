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
    }
  }
  ajaxRequest.open("POST", "config/PYPDashboardKelolaWaliKelas.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send();
}
