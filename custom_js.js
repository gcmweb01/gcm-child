
// horizontal tabs for single product page

function openCity(evt, SingleProduct) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(SingleProduct).style.display = "block";
  evt.currentTarget.className += " active";
}

window.onload = function(e){ 
    document.getElementById("defaultOpen").click();
 }  


