$("h1.formularii").add("formulari");


$(".mbylleHarten").hide();
$(".mbylleVideon").hide();
$(".harta").hide();
$(".videoo").hide();

$(".hapeHarten").click(function(){
  $(".harta").slideDown();
  $(".hapeHarten").hide();
  $(".mbylleHarten").fadeIn();
  if($(".videoo")){
    $(".videoo").fadeOut();
    $(".mbylleVideon").hide();
    $(".hapeVideon").fadeIn();
    $(".videoo").trigger('pause');
  }
});

$(".hapeVideon").click(function(){
  $(".videoo").slideDown();
  $(".mbylleVideon").fadeIn();
  $(".hapeVideon").hide();
if($(".harta")){
  $(".harta").fadeOut();
  $(".mbylleHarten").hide();
  $(".hapeHarten").fadeIn();
}
});

$(".mbylleHarten").click(function(){
  $(".harta").fadeOut();
  $(".mbylleHarten").hide();
  $(".hapeHarten").fadeIn();
});

$(".mbylleVideon").click(function(){
$(".videoo").fadeOut();
$(".hapeVideon").fadeIn();
$(".mbylleVideon").hide();
$(".videoo").trigger('pause');
});

var x = document.getElementById("koordinatat");

function getLocation() {
  
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Gjeolokacioni nuk mbështetet nga browser-i yt.";
  }
}

function showPosition(position) {
  x.innerHTML = "Gjerësia: " + position.coords.latitude.toPrecision(4) + ", " +
  "Gjatësia: " + position.coords.longitude.toPrecision(4);
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "Përdoruesi bllokoi gjeolokacionin."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Informacioni për lokacionin nuk është i disponueshëm."
      break;
    case error.TIMEOUT:
      x.innerHTML = "Timeout."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}