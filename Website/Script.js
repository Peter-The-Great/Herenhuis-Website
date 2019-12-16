//in this docoment, an fade-out function is described. That makes the body change to a blanck body. 
document.body.className += ' fade-out';
    $(function fadeout() {
    $('body').removeClass('fade-out');
});

//this is where we store our Modal.
function openModal() {
  document.getElementById("myModal").style.display = "block";
}
//if a image is pressed than it will do a function which will open the modal. if the x is pressed than it will close
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
//here we give one variable to a index of slides and we will show that slide when that is needed.//show slides will turn into slide index and will work as an array from there.
//this will be a sort of next function for the script where if the index is on a specific location than make sure to go to the next.
function plusSlides(n) {
  showSlides(slideIndex += n);
}
//this will show which slide something is currently on.
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//this will happen if it needs to be shown.
function showSlides(n) {
  var i;//just incase
  var slides = document.getElementsByClassName("mySlides");
  var captionText = document.getElementById("caption");
  //this will take a look if in the slideindex are multiple slides and that you should start from a begginning slide.
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  //For every time there is a new slide needed go up or down in the index.
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  //if (n==10) {slidesIndex = 1}
  //this will look fi some parts of the modal are working in a style and it will give captions a sort of conclusion.
  slides[slideIndex-1].style.display="block";
}
