function showHobbies(id){
  var x = document.getElementById(id);
  if(x.className.indexOf("w3-show") == -1){
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
  let btn =document.getElementById('btninfo');
  if(btn.innerHTML == "More"){
      btn.innerHTML = "Close";
  }else {
      btn.innerHTML = "More";
  }
}