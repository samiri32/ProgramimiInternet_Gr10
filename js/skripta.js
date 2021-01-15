
   function toggleButton(){
       const theme = document.querySelector("#stilicss");
       
       if(theme.getAttribute("href")=="./CSS/styles.css"){
       theme.href='./CSS/stylesdark.css';
       document.getElementById("teksti").className = "fa fa-sun-o";
       document.getElementById("teksti").style.color = "white";  
       document.getElementById("teksti").style.backgroundColor = "transparent"; 
       var photo = './img/sinani.png';

       $('#sinanibardh').attr('src', photo);
   }
   else if(theme.getAttribute("href")=="./CSS/stylesdark.css"){
       theme.href="./CSS/styles.css";
       document.getElementById("teksti").className = "fa fa-moon-o"; 
       document.getElementById("teksti").style.color = "black"; 
       document.getElementById("teksti").style.backgroundColor = "transparent"; 
       var photo = './img/sinani3.png';
       $('#sinanibardh').attr('src', photo);
      
      
   }
   }
   
    


var slideIndex = 1;


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
var img = document.getElementsByClassName("fototmodal");
var modalImg = document.getElementById("img");


var showModal = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
}
for (var i = 0; i < img.length; i++) {
    img[i].addEventListener('click', showModal);
}

var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}

