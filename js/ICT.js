function ajax(ajaxRequest){
  try {
    ajaxRequest = new XMLHttpRequest;
  }catch (e){
    alert(e);
  }
  return ajaxRequest;
}

function biodata(){
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function () {
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var display = document.getElementById("respon");
      display.innerHTML = respon;
    }
  }
  ajaxRequest.open("POST", "config/ICTBiodataDashboard.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send();
}

function addGeneration(){
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function () {
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var display = document.getElementById("respon");
      display.innerHTML = respon;
      console.log(respon);
    }
  }
  ajaxRequest.open("POST", "config/ICTDashboardGeneration.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send();
}

function generationSubmit(){
  var a = document.getElementById("generation").value;
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var json = JSON.parse(respon);
      if(json.code == 1){
        alert("Success");
      } else{
        alert("Error");
      }
    }
  }
  var input = "generation=" + a;
  ajaxRequest.open("POST", "config/ICTGenerationSubmit.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function selectGeneration(){
  var generation = document.getElementById("generationOption").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var display = document.getElementById("respon");
      display.innerHTML = respon;
    }
  }
  var input = "generation=" + generation;
  ajaxRequest.open("POST", "config/ICTBiodata.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function printt(){
  window.print();
}

function getCheckedValue(){
  var input = '';
  var c = document.getElementById('tableBiodata').getElementsByTagName('input');
  var length = 0;
  var x = 0;

  for (var i = 0; i < c.length; i++) {
    if (c[i].type == 'checkbox') {
      if(c[i].checked == true){
        input = input + 'a' + x + '=' + c[i].value + '&';
        x++;
        length++;
      }
    }
  }

  input = input + 'length=' + length;
  return input;
}

function submitBiodata(){
  var input = getCheckedValue();
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
      var respon = ajaxRequest.responseText;
      var display = document.getElementById("respon");
      display.innerHTML = respon;
    }
  }
  ajaxRequest.open("POST", "config/ICTShowPrintBiodata.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function dashboardKelolaUser(start, limit){
  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if (ajaxRequest.status == 200 && ajaxRequest.readyState == 4) {
      var respon = ajaxRequest.responseText;
      var display = document.getElementById("respon");
      display.innerHTML = respon;
    }
  }
  var input = "page=" + start + "&limit=" + limit;
  ajaxRequest.open("POST", "config/ICTdashboardKelolaUser.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}


function createNewUser(){
  
}
