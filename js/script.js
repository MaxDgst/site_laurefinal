function toggleMenu () {  
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', (e) => {    
    navbar.classList.toggle('show-nav');
  });    
}
toggleMenu();

function verifierCaracteres(event) {
                    
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
          
  var champ = document.getElementById('mon_input');
          
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
          
  if(caracteres.indexOf(touche) >= 0) {
      champ.value += touche;
  }
          
}