const button1 = document.getElementById("Gestionutilisateur");
console.log(button1);
const button2 = document.getElementById("Logs");
console.log(button2)
const button3 = document.getElementById("Messagerie");
console.log(button3)

var position = 0;


function getScrollPosition()
{
    return Array((document.documentElement && document.documentElement.scrollLeft) || window.pageXOffset || self.pageXOffset || document.body.scrollLeft,(document.documentElement && document.documentElement.scrollTop) || window.pageYOffset || self.pageYOffset || document.body.scrollTop);
}

button1.addEventListener("click", functionbutton1);
button2.addEventListener("click", functionbutton2);
button3.addEventListener("click", functionbutton3);

function functionbutton1() {
    console.log(this);
    button1.style.background = "#0D1F34";
    button1.style.borderLeft = "3px solid #FD9C17";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
}

function functionbutton2(){
    console.log(this);
    button2.style.background = "#0D1F34";
    button2.style.borderLeft = "3px solid #FD9C17";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
}

function functionbutton3() {
    console.log(this);
    button3.style.background = "#0D1F34";
    button3.style.borderLeft = "3px solid #FD9C17";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
}

setInterval(scroll, 100);

function scroll(){
    console.log(getScrollPosition());

    if (position === 0){
        position = 1;
        button1.click();
    }

    if (getScrollPosition()[1] >= 100 && position === 1){
        position = 2;
        button2.click();
        setTimeout(1000);
    }else if (getScrollPosition()[1] <= 800 && position === 2){
        position = 1;
        button1.click();
        setTimeout(1000);
    }
}


(function() {

    var searchElement = document.getElementById('search'),
        results = document.getElementById('results'),
        selectedResult = -1, // Permet de savoir quel résultat est sélectionné : -1 signifie "aucune sélection"
        previousRequest, // On stocke notre précédente requête dans cette variable
        previousValue = searchElement.value; // On fait de même avec la précédente valeur



    function getResults(keywords) { // Effectue une requête et récupère les résultats

        var xhr = new XMLHttpRequest();
        xhr.open('GET', './search.php?s='+ encodeURIComponent(keywords));

        xhr.addEventListener('readystatechange', function() {
            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {

                displayResults(xhr.responseText);

            }
        });

        xhr.send(null);

        return xhr;

    }

    function displayResults(response) { // Affiche les résultats d'une requête

        results.style.display = response.length ? 'block' : 'none'; // On cache le conteneur si on n'a pas de résultats

        if (response.length) { // On ne modifie les résultats que si on en a obtenu

            response = response.split('|');
            var responseLen = response.length;

            results.innerHTML = ''; // On vide les résultats

            for (var i = 0, div ; i < responseLen ; i++) {

                div = results.appendChild(document.createElement('div'));
                div.innerHTML = response[i];

                div.addEventListener('click', function(e) {
                    chooseResult(e.target);
                });

            }

        }

    }

    function chooseResult(result) { // Choisi un des résultats d'une requête et gère tout ce qui y est attaché

        searchElement.value = previousValue = result.innerHTML; // On change le contenu du champ de recherche et on enregistre en tant que précédente valeur
        results.style.display = 'none'; // On cache les résultats
        result.className = ''; // On supprime l'effet de focus
        selectedResult = -1; // On remet la sélection à "zéro"
        searchElement.focus(); // Si le résultat a été choisi par le biais d'un clique alors le focus est perdu, donc on le réattribue

    }



    searchElement.addEventListener('keyup', function(e) {

        var divs = results.getElementsByTagName('div');

        if (e.keyCode == 38 && selectedResult > -1) { // Si la touche pressée est la flèche "haut"

            divs[selectedResult--].className = '';

            if (selectedResult > -1) { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
                divs[selectedResult].className = 'result_focus';
            }

        }

        else if (e.keyCode == 40 && selectedResult < divs.length - 1) { // Si la touche pressée est la flèche "bas"

            results.style.display = 'block'; // On affiche les résultats

            if (selectedResult > -1) { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
                divs[selectedResult].className = '';
            }

            divs[++selectedResult].className = 'result_focus';

        }

        else if (e.keyCode == 13 && selectedResult > -1) { // Si la touche pressée est "Entrée"

            chooseResult(divs[selectedResult]);

        }

        else if (searchElement.value != previousValue) { // Si le contenu du champ de recherche a changé

            previousValue = searchElement.value;

            if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE) {
                previousRequest.abort(); // Si on a toujours une requête en cours, on l'arrête
            }

            previousRequest = getResults(previousValue); // On stocke la nouvelle requête

            selectedResult = -1; // On remet la sélection à "zéro" à chaque caractère écrit

        }

    });

})();