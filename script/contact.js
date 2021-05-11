// récupération des éléments HTML
var menu = document.querySelector('.menu');
var fermer = document.querySelector('.icone-fermer');
var burger = document.querySelector('.icone-menu');

// fonction pour ouvrir / fermer le menu
function afficherMenu() {
  menu.classList.toggle('visible');
}

// événements sur les icônes (click)
burger.addEventListener('click', afficherMenu);
fermer.addEventListener('click', afficherMenu);


// récupération des éléments HTML
var zoneMessage1 = document.querySelector('.zone-message1');
var zoneMessage2 = document.querySelector('.zone-message2');
var zoneMessage3 = document.querySelector('.zone-message3');
var zoneMessage4 = document.querySelector('.zone-message4');
var nom = document.querySelector('.nom');
var age = document.querySelector('.age');
var email = document.querySelector('.email');
var texte = document.querySelector('.texte');
var bouton = document.querySelector('.bouton-validation');
var message = '';

// fonction pour valider le format de l'adresse mail
function formatEmail(adresse) {
  return /\S+@\S+\.\S+/.test(adresse);
}

// fonction pour valider les données
function validation1() {

	var message = '';

	if(nom.value.length < 3) {
		message = message + 'Le nom et prénom doivent contenir au moins 3 caractères<br />';
		zoneMessage1.innerHTML = message;
	}

	else {
		message = '';
		zoneMessage1.innerHTML = message;
	}
}


  function validation2() {

	var message = '';

	if(parseInt(age.value) < 18 || age.value == '') {
		message = message + 'Vous devez être majeur.<br />';
		zoneMessage2.innerHTML = message;
	}

	else {
		message = '';
		zoneMessage2.innerHTML = message;
	}
}

  function validation3() {

	var message = '';

	if(formatEmail(email.value) == false) {
		message = message + 'Veuillez entrer un email.<br />';
		zoneMessage3.innerHTML = message;
	}

	else {
		message = '';
		zoneMessage3.innerHTML = message;
	}
}

  function validation4() {

	var message = '';

if (texte.value.length == 0) {
    message = message + 'The text is empty. <br />';
		zoneMessage4.innerHTML = message;
	}

	else {
		message = '';
		zoneMessage4.innerHTML = message;
	}
}



  // si il y a pas d'erreur
  if (message.length == 0) {
    message = 'Tout est parfait !';
    //vider les champs
    nom.value = '';
    age.value = '';
    email.value = '';
    texte.value = '';
      // message 
      zoneMessage1.style.color = 'red';
      zoneMessage2.style.color = 'red';
      zoneMessage3.style.color = 'red';
      zoneMessage4.style.color = 'red';
  } else {
    // sinon message 
      zoneMessage1.style.color = 'red';
      zoneMessage2.style.color = 'red';
      zoneMessage3.style.color = 'red';
      zoneMessage4.style.color = 'red';
  }




// événement sur le bouton de validation
bouton.addEventListener('click', validation1);
bouton.addEventListener('click', validation2);
bouton.addEventListener('click', validation3);
bouton.addEventListener('click', validation4);


// animation bulle
const medias = document.querySelectorAll('.bulle');

window.addEventListener('load', () => {

  const TL = gsap.timeline({
    paused: true
  });

  TL

    .staggerFrom(medias, 2, {
      right: -200,
      ease: "power2.out"
    }, 0.3, '-=1');

  TL.play();
})

