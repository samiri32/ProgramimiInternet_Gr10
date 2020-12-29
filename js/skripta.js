
var slideIndex = 1;
showSlides(1);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('Sllajdet');
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";


}

var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName("fototmodal");
var modalImg = document.getElementById("img");

var showModal=function(){
    modal.style.display="block";
    modalImg.src=this.src;
    captionText.innerHTML=this.alt;

}
for(var i=0;i<img.length;i++){
    img[i].addEventListener('click', showModal);
}



var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}