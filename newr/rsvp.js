
/*Background slide show*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
/*2*/
/*Resizing the font size on hover*/
function resizeText(multiplier) {
  if (document.getElementById("details").style.fontSize == "") {
    document.getElementById("details").style.fontSize = "1.0em";
  }
  document.getElementById("details").style.fontSize = parseFloat(document.getElementById("details").style.fontSize) + (multiplier * 0.2) + "em";
}
/*3*/
/*Lightning each tr in the table on hover*/
function tableHover(row, mul){
  if(mul == 1){
     row.style.backgroundColor = "lightgray";
  }
  else{
    row.style.backgroundColor = "white";
  }
}
/*4*/
/*Form validation*/
function formValidation(){
  /*Name validation*/
  var name = document.getElementById("name").value;
  if(!nameValidation(name)) return false;
  /*Phone validation*/
  var phone = document.getElementById("phone").value;
  if(!phoneValidation(phone)) return false;
  /*mail validation*/
  var mail = document.getElementById("email").value;
  if(!mailValidation(mail)) return false;
  /*number of guests validation*/
  var num = document.getElementById("numOfGuest").value;
  if(!numberOfGuestValidation(num)) return false;
  window.location = "confirm.html";

}
/*Name validation - only letters*/
function nameValidation(name){
  var letters = /^[A-Za-z]+$/;
  if(name == ""){
    alert("Enter a name");
    return false;
  }
  if(!name.match(letters)){
    alert("Name: Enter letters only.");
    return false;
  }return true;


}
/*Phone validation - min - 9 digits, max - 10 digits, numbers only*/
function phoneValidation(phone){
  var numbers = /^[0-9]+$/;
  if(!phone.match(numbers)){
    alert("phone: numbers only");
    return false;
  }
  if(phone.toString().length != 9 && phone.toString().length != 10){
    alert("length of phone number should be 10 or 9");
    return false;
  }
  return true;
}
/*Mail validation - a valid mail adress*/
function mailValidation(mail){
  var x = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
  if(!x.test(mail)){
    alert("Invalid email address");
    return false;
  }return true;
}
/*Number of guests validation - > 0*/
function numberOfGuestValidation(numberOfGuests){
  if(numberOfGuests <= 0){
    alert("Number of guest should be greater than 0");
    return false;
  }return true;
}
/*Comments validation - maximum 200 chars*/
function textCounter(field, field2, maxlimit) {
    //alert(field + field2  + maxlimit);
    var countfield = document.getElementById(field2);
    /* $(field2).html(text_remaining); */
    if (field.value.length > maxlimit) {
      field.value = field.value.substring(0, maxlimit);
      return false;
    } else {
      countfield.value = maxlimit - field.value.length;
    }
  }
function mouseOutOfWindow(){
  window.alert("Goodbye");
}
 


