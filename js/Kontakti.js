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
