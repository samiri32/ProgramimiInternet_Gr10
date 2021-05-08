if(localStorage.getItem("color")==null)
localStorage.setItem("color","light")


const theme = document.querySelector("#stilicss");

console.log(localStorage);

remember();

function darkMode() {

    theme.href = './CSS/stylesdark.css';
    localStorage.setItem("color", "dark");
    console.log(localStorage);
    document.getElementById("teksti").className = "fa fa-sun-o";
    document.getElementById("teksti").style.color = "white";
    document.getElementById("teksti").style.backgroundColor = "transparent";

}

function lightMode() {

    theme.href = "./CSS/styles.css";
    localStorage.setItem("color", "light");
    console.log(localStorage);
    document.getElementById("teksti").className = "fa fa-moon-o";
    document.getElementById("teksti").style.color = "black";
    document.getElementById("teksti").style.backgroundColor = "transparent";

}

function toggleButton() {

    if (localStorage.getItem("color") == ("light")) {

        darkMode();
    }
    else if (localStorage.getItem("color") == ("dark")) {

        lightMode();
    }
}

function remember() {
    if (localStorage.getItem("color") == ("light")) {

        lightMode();

    }
    else if (localStorage.getItem("color") == ("dark")) {

        darkMode();

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


span.onclick = function () {
    modal.style.display = "none";
}