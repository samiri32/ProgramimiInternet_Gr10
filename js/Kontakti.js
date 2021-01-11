$("h1.formularii").add("formulari");

$(".largoHarten").hide();
$(".largoVideon").hide();
$(".Video").hide();
$(".harta").hide();

$(".shfaqeHarten").click(function(){
  if($(".Video")){
    $(".Video").remove();
  }
  $(".harta").slideDown();
});
$(".shfaqVideon").click(function(){
  if($(".harta")){
    $(".harta").remove();
  }
  $(".Video").slideDown();
});
