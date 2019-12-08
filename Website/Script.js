//in this docoment, an fade-out function is described. That makes the body change to a blanck body. 
document.body.className += ' fade-out';
    $(function fadeout() {
    $('body').removeClass('fade-out');
    //here we make fade out by making a class in css. this script will intern delete that class so that the body it self remains.
});
//dit geeft een paar variabelen aan die een array maken.
var slideIndex = [1];
var slideId = ["mySlides1"]
showSlides(1, 0);
//show slides 1 is voor "ja laat alle images zien" en null staat voor de eerste array.
function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}
//ik den dat de plus slides ervoor zorgen dat bij de volgende
function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
//Ik probeer meer onderzoek te doen naar dit script.