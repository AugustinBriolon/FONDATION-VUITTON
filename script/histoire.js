var par1 = document.querySelector('#texte1')
var par2 = document.querySelector('#texte2')
var par3 = document.querySelector('#texte3')
var par4 = document.querySelector('#parallax4')

window.addEventListener('scroll', () => {
let value = window.scrollY;

par1.style.right = -value + 'px';
par2.style.left = value + 'px';
par3.style.left = value + 'px';
par4.style.right = value + 'px';

});