var btnCall = document.getElementsByClassName('btnCall');
// getElementsByClassName retourne une NodeList, une sorte d'array. Chaque élément portant la classe btnCall serait ensuite potentiellement affecté par le addEventListener, il faut donc préciser quel objet de la NodeList il faut prendre en compte, ce qui explique le sélécteur [0]. 
var bouton = btnCall[0];

function callMob() {
  // Pour cibler les Ipads et les mobiles, une regex existe mais plus complexe : https://stackoverflow.com/questions/11381673/detecting-a-mobile-browser
  // window.location.href permet de passer l'appel dans le fenêtre active et de ne pas en ouvrir une autre

    if(window.innerWidth <= 1024 && window.innerHeight <= 768) { 
        window.location.href='tel:0303030303';
    } else {
      return false;
    }
 }

 bouton.addEventListener('click', function(){
  callMob()
});
