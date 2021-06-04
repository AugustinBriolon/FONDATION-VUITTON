
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



// création du darkMode
var buttonToggle = document.querySelector('.buttonModeD')
var body = document.querySelector('body')
var menu = document.querySelector('.menu')

  buttonToggle.addEventListener('click', () => {
    if (body.classList.contains("dark")) {
      body.classList.add("light")
      body.classList.remove("dark")
      menu.classList.add("light")
      menu.classList.remove("dark")
      buttonToggle.innerHTML = "dark"

      var texte = document.querySelectorAll('.menu__item').forEach(texte => {
        texte.classList.add("light")
        texte.classList.remove("dark")
      }); 
    }
  
    else if (body.classList.contains("light")) {
      body.classList.add("dark")
      body.classList.remove("light")
      menu.classList.add("dark")
      menu.classList.remove("light")
      buttonToggle.innerHTML = "light"

      var texte = document.querySelectorAll('.menu__item').forEach( texte => {
        texte.classList.add("dark")
        texte.classList.remove("light")
      }); 
    }
  
  })

