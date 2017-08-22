function ajax(ajaxRequest){
  try {
    ajaxRequest = new XMLHttpRequest;
  }catch (e){
    alert(e);
  }
  return ajaxRequest;
}

document.getElementById("leftMenu2").addEventListener('click', input, false);
document.getElementById("inputSubmit").addEventListener('click', inputSubmit, false);
document.getElementById("otherSubmit").addEventListener('click', otherSubmit, false);
document.getElementById("dadSubmit").addEventListener('click', dadSubmit, false);
document.getElementById("momSubmit").addEventListener('click', momSubmit, false);
document.getElementById("guardSubmit").addEventListener('click', guardianSubmit, false);

function menu(a){
  for(var i = 1; i <= 5; i++){
    if(i == a){
      document.getElementById("input" + i).style.display = "block";
      document.getElementById("menu" + i).className = "button-warning";
    } else{
      document.getElementById("input" + i).style.display = "none";
      document.getElementById("menu" + i).className = "button-secondary";
    }
  }
}

function input() {

  var input = document.getElementById("inputClass");
  var length = input.length;
  if (document.getElementById("dashboardInput").style.display == "block") {
    document.getElementById("dashboardInput").style.display = "none";
    for(var a = 0; a <= length; a++){
       input.remove(0);
       console.log(length);
    }
  } else{
    document.getElementById("dashboardInput").style.display = "block";
    var ajaxRequest = ajax(ajaxRequest);
    ajaxRequest.onreadystatechange = function(){
      if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
        var respon = ajaxRequest.responseText;
        var json = JSON.parse(respon);
        for(var i = 0; i < json.length; i++){
          var option = document.createElement('option');
          option.text = json[i].name;
          option.value = json[i].id;
          input.add(option);
        }
      }
    }
    ajaxRequest.open("POST", "config/TUClass.php", true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send();

    var ajaxRequestt = ajax(ajaxRequestt);
    ajaxRequestt.onreadystatechange = function(){
      if(ajaxRequestt.readyState == 4 && ajaxRequestt.status == 200){
        var respon = ajaxRequestt.responseText;
        var json = JSON.parse(respon);
        var optionGeneration = document.getElementById('inputGeneration');
        for(var j = 0; j < json.length; j++){
          var optionn = document.createElement('option');
          optionn.text = json[j].generation;
          optionn.value = json[j].id;
          optionGeneration.add(optionn);
        }
      }
    }
    ajaxRequestt.open("POST", "config/TUGeneration.php", true);
    ajaxRequestt.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequestt.send();
  }
}

function inputSubmit(){
  var name = document.getElementById("inputName").value;
  var nis = document.getElementById("inputNIS").value;
  var nisn = document.getElementById("inputNISN").value;
  var sex = document.getElementById("inputSex").value;
  var place = document.getElementById("inputPlace").value;
  var date = document.getElementById("inputDate").value;
  var generation = document.getElementById("inputGeneration").value;
  var iclass = document.getElementById("inputClass").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var json = JSON.parse(respon);
      if(json.code == 1){
        document.getElementById("id").value = json.id;
        document.getElementById("input1").style.display = "none";
        document.getElementById("input2").style.display = "block";
        document.getElementById("menu2").className = "button-warning";
        document.getElementById("menu1").className = "button-secondary";
        document.getElementById("nationality").focus();
      } else{
        alert("Error hubungi administrator");
      }
    }
  }

  var input = "name=" + name + "&nis=" + nis + "&nisn=" + nisn + "&sex=" + sex + "&place=" + place + "&date=" + date + "&generation=" + generation + "&class=" + iclass;
  ajaxRequest.open("POST", "config/TUInputStudent.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function otherSubmit(){
  var id = document.getElementById("id").value;
  var nationality = document.getElementById("nationality").value;
  var name = document.getElementById("schoolName").value;
  var address = document.getElementById("schoolAddress").value;
  var firstGrade = document.getElementById("firstGrade").value;
  var saudara = document.getElementById("saudara").value;
  var ke = document.getElementById("ke").value;
  var language = document.getElementById("language").value;
  var religion = document.getElementById("religion").value;
  var accepted = document.getElementById("acceptedDate").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var json = JSON.parse(respon);
      if(json.code == 1){
        document.getElementById("input2").style.display = "none";
        document.getElementById("input3").style.display = "block";
        document.getElementById("menu3").className = "button-warning";
        document.getElementById("menu2").className = "button-secondary";
        document.getElementById("dadName").focus();
      } else{
        alert("Error hubungi administrator");
      }
    }
  }

  var input = "id=" + id
  + "&nationality=" + nationality
  + "&name=" + name
  + "&address=" + address
  + "&firstGrade=" + firstGrade
  + "&saudara=" + saudara
  + "&ke=" + ke
  + "&language=" + language
  + "&religion=" + religion
  + "&accepted=" + accepted;
  ajaxRequest.open("POST", "config/TUInputOther.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function dadSubmit(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("dadName").value;
  var place = document.getElementById("dadPlace").value;
  var date = document.getElementById("dadDate").value;
  var address = document.getElementById("dadAddress").value;
  var job = document.getElementById("dadJob").value;
  var office = document.getElementById("dadOffice").value;
  var number = document.getElementById("dadNumber").value;
  var wa = document.getElementById("dadWA").value;
  var bbm = document.getElementById("dadBBM").value;
  var email = document.getElementById("dadEmail").value;
  var education = document.getElementById("dadEducation").value;
  var nationality = document.getElementById("dadNationality").value;
  var religion = document.getElementById("dadReligion").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var json = JSON.parse(respon);
      if(json.code == 1){
        document.getElementById("input3").style.display = "none";
        document.getElementById("input4").style.display = "block";
        document.getElementById("menu4").className = "button-warning";
        document.getElementById("menu3").className = "button-secondary";
        document.getElementById("momName").focus();
      } else{
        alert("Error");
      }
    }
  }

  var input = "id=" + id
  + "&name=" + name
  + "&place=" + place
  + "&date=" + date
  + "&address=" + address
  + "&job=" + job
  + "&office=" + office
  + "&number=" + number
  + "&wa=" + wa
  + "&bbm=" + bbm
  + "&email=" + bbm
  + "&education=" + education
  + "&nationality=" + nationality
  + "&religion=" + religion;
  ajaxRequest.open("POST", "config/TUInputDad.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function momSubmit(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("momName").value;
  var place = document.getElementById("momPlace").value;
  var date = document.getElementById("momDate").value;
  var address = document.getElementById("momAddress").value;
  var job = document.getElementById("momJob").value;
  var office = document.getElementById("momOffice").value;
  var number = document.getElementById("momNumber").value;
  var wa = document.getElementById("momWA").value;
  var bbm = document.getElementById("momBBM").value;
  var email = document.getElementById("momEmail").value;
  var education = document.getElementById("momEducation").value;
  var nationality = document.getElementById("momNationality").value;
  var religion = document.getElementById("momReligion").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      var json = JSON.parse(respon);
      if(json.code == 1){
        document.getElementById("input4").style.display = "none";
        document.getElementById("input5").style.display = "block";
        document.getElementById("menu5").className = "button-warning";
        document.getElementById("menu4").className = "button-secondary";
        document.getElementById("guardName").focus();
      } else{
        alert("Error");
      }
    }
  }

  var input = "id=" + id
  + "&name=" + name
  + "&place=" + place
  + "&date=" + date
  + "&address=" + address
  + "&job=" + job
  + "&office=" + office
  + "&number=" + number
  + "&wa=" + wa
  + "&bbm=" + bbm
  + "&email=" + bbm
  + "&education=" + education
  + "&nationality=" + nationality
  + "&religion=" + religion;
  ajaxRequest.open("POST", "config/TUInputMom.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}

function guardianSubmit(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("guardName").value;
  var place = document.getElementById("guardPlace").value;
  var date = document.getElementById("guardDate").value;
  var address = document.getElementById("guardAddress").value;
  var job = document.getElementById("guardJob").value;
  var office = document.getElementById("guardOffice").value;
  var number = document.getElementById("guardNumber").value;
  var wa = document.getElementById("guardWA").value;
  var bbm = document.getElementById("guardBBM").value;
  var email = document.getElementById("guardEmail").value;
  var education = document.getElementById("guardEducation").value;
  var nationality = document.getElementById("guardNationality").value;
  var religion = document.getElementById("guardReligion").value;
  var relationship = document.getElementById("guardRelationship").value;

  var ajaxRequest = ajax(ajaxRequest);
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
      var respon = ajaxRequest.responseText;
      console.log(respon);
      var json = JSON.parse(respon);
      if(json.code == 1){
        alert("Success");
        document.getElementById("input5").style.display = "none";
        document.getElementById("input1").style.display = "block";
        document.getElementById("menu1").className = "button-warning";
        document.getElementById("menu5").className = "button-secondary";
        document.getElementById("inputName").focus();
      } else{
        alert("Error");
      }
    }
  }

  var input = "id=" + id
  + "&name=" + name
  + "&place=" + place
  + "&date=" + date
  + "&address=" + address
  + "&job=" + job
  + "&office=" + office
  + "&number=" + number
  + "&wa=" + wa
  + "&bbm=" + bbm
  + "&email=" + bbm
  + "&education=" + education
  + "&nationality=" + nationality
  + "&religion=" + religion
  + "&relationship=" + relationship;
  ajaxRequest.open("POST", "config/TUInputGuard.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(input);
}
