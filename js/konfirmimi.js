$(document).ready(function() {
    $("#kliko").click(1000,function() {
    confirm.render("Ky veprim do të ju dërgojë në një faqe tjetër. Doni të lini Ballinën?")
});
});


function Konfirmimi(){
	this.render = function(dialog){
		var winW = window.innerWidth;
	    var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
	    var dialogbox = document.getElementById('dialogbox');
		dialogoverlay.style.display = "block";
	    dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (550 * .5)+"px";
	    dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        
		document.getElementById('dialogboxhead').innerHTML='Rezervoni ulëse në Bibliotekë';
	    document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = 
        '<button onclick="confirm.yes()" class="buton" style="height:2em; width:3em; ">Yes</button> <button onclick="confirm.no()" class="buton" style="height:2em; width:3em; ">No</button>';
    }
    this.no = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
	this.yes = function(){
		window.location.href="../html/forma.html"
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}

var confirm= new Konfirmimi();