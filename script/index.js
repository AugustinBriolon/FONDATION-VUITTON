// Ajout de l'animation 
var i = 0;
var txt = 'Tatoo';
var speed = 30;

function typeWriter() {
  if (i < txt.length) {
    document.querySelector("#BFLV").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

if (window.addEventListener) {
  window.addEventListener('load', typeWriter);
}

