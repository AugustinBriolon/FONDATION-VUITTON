// tri photo

var buttonTout = document.getElementById("buttonTout");
var buttonExt = document.getElementById("buttonOut");
var buttonIn = document.getElementById("buttonInt");

var imgExt = document.getElementsByClassName("extFLV");
var imgInt = document.getElementsByClassName("intFLV");


function ext() {
    // console.log('ext');
    for (let i = 0; i < imgExt.length; i++) {
        imgExt[i].style.display = 'block' ;
    }
    for (let i = 0; i < imgInt.length; i++) {
        imgInt[i].style.display = 'none' ;
    }
}

function int() {
    // console.log('int');
    for (let i = 0; i < imgInt.length; i++) {
        imgInt[i].style.display = 'block';
    }
    for (let i = 0; i < imgExt.length; i++) {
        imgExt[i].style.display = 'none';
    }
}

function tout() {
    // console.log('tout');
    for (let i = 0; i < imgInt.length; i++) {
        imgInt[i].style.display = 'block';
    }
    for (let i = 0; i < imgExt.length; i++) {
        imgExt[i].style.display = 'block';
    }
}


buttonTout.addEventListener('click', tout);
buttonExt.addEventListener('click', ext);
buttonIn.addEventListener('click', int);


