var x = document.getElementById("koordinatat");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Gjeolokacioni nuk mbështetet nga browser-i yt.";
  }
}

function showPosition(position) {
  x.innerHTML = "Gjerësia gjeografike  : " + position.coords.latitude + 
  "<br>Gjatësia gjeografike: " + position.coords.longitude;
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

var cn= document.getElementById('cw');;
var requestingFrame=false;
var c;
var u = 10;
const m = {
    x: innerWidth / 2,
    y: innerHeight / 2
};
window.onmousemove = function(e) {
    m.x = e.clientX;
    m.y = e.clientY;

}
function gc() { 
    var s = "0123456789ABCDEF";
    var c = "#";
    for (var i = 0; i < 6; i++) {
        c += s[Math.ceil(Math.random() * 15)]
    }
    return c
}
var a = [];


function nisja(){
  requestingFrame=!requestingFrame;
  
  generateColors();
  playPause();
}

function generateColors() {
    cn = document.getElementById('cw');
    c = cn.getContext('2d');
    a=[];
    for (var i = 0; i < 10; i++) {
        var r = 30;
        var x = Math.random() * (innerWidth - 2 * r) + r;
        var y = Math.random() * (innerHeight - 2 * r) + r;
        var t = new ob(innerWidth / 2,innerHeight / 2,5,"red",Math.random() * 200 + 20,2);
        a.push(t);
    }
    //cn.style.backgroundColor = "#700bc8";

    c.lineWidth = "2";
    c.globalAlpha = 0.5;
    resize();
    anim();
}
window.onresize = function() {

    resize();

}
function resize() {
    cn.height = innerHeight;
    cn.width = innerWidth;
    for (var i = 0; i < 101; i++) {
        var r = 30;
        var x = Math.random() * (innerWidth - 2 * r) + r;
        var y = Math.random() * (innerHeight - 2 * r) + r;
        a[i] = new ob(innerWidth / 2,innerHeight / 2,4,gc(),Math.random() * 200 + 20,0.02);

    }
    //  a[0] = new ob(innerWidth / 2, innerHeight / 2, 40, "red", 0.05, 0.05);
    //a[0].dr();
}
function ob(x, y, r, cc, o, s) {
    this.x = x;
    this.y = y;
    this.r = r;
    this.cc = cc;
    this.theta = Math.random() * Math.PI * 2;
    this.s = s;
    this.o = o;
    this.t = Math.random() * 150;

    this.o = o;
    this.dr = function() {
        const ls = {
            x: this.x,
            y: this.y
        };
        this.theta += this.s;
        this.x = m.x + Math.cos(this.theta) * this.t;
        this.y = m.y + Math.sin(this.theta) * this.t;
        c.beginPath();
        c.lineWidth = this.r;
        c.strokeStyle = this.cc;
        c.moveTo(ls.x, ls.y);
        c.lineTo(this.x, this.y);
        c.stroke();
        c.closePath();

    }
}
function anim() {
  if(!requestingFrame)
  return;
    requestAnimationFrame(anim);
    c.fillStyle = "rgba(0,0,0,0.05)";
    c.fillRect(0, 0, cn.width, cn.height);
    a.forEach(function(e, i) {
        e.dr();
    });

}

 
  
  var myVideo = document.getElementById("video"); 
  function playPause() { 
    if (myVideo.paused) 
      myVideo.play(); 
    else 
      myVideo.pause(); 
  } 
  
  
  function updateBackground() {
   const hour = new Date().getHours();
      const backgroundImage=document.body.style.backgroundImage;
  
      if(document.body){
  
      if (7 <= hour && hour< 20) {
      
       backgroundImage="url('../img/dita.jpg')";
        
      } else  {
       
       backgroundImage="url('../img/nata.jpg')";
        
      } 
     
    }
  }


  setInterval(updateBackground, 1000 * 60);
  updateBackground();