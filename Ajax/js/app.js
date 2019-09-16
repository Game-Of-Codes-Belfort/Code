// =============================================== VERSION COMMENTEE ==============================================================
var demo = document.getElementById("demo");

// Nouvelle instance de XMLHttpRequest
var xhr = new XMLHttpRequest();


// Quand tout est prêt applique la fonction
xhr.onreadystatechange = function() {
    console.log(this);
    // Si la requête est chargée et que le statut est 200
    if (this.readyState == 4 && this.status == 200) {
        demo.innerHTML = this.response;
        console.log(this.response);
    }
    else if (this.readyState == 4 && this.status == 404) {
        alert('Erreur 404 !')
    }
};

// GET = Récupère les infos, POST = Envoi des infos
// 3 paramètre = GET ou POST || nom du fichier || boléen true = active asynchrone ou false pour le désactiver
// xhr.open("GET", "async/texte.txt", true);

// Pour manipuler le tableau donnee au format JSON
xhr.open("GET", "async/donnees.txt", true);

// Facultatif, précise le type chargé
xhr.responseType = "text"; // json..

// Pour envoyer la requête
xhr.send();


// Les états possible du "readyState" :
// - 0 : Requête non initialisée
// - 1 : Connexion au serveur établie
// - 2 : Requête reçue
// - 3 : Requête en cours de traitement
// - 4 : Requête terminée et réponse prête

// Lien tuto : https://www.youtube.com/watch?v=dI-T7YcSpiY ================ 16min