function fonction(){

    var nbGraph = document.getElementsByClassName("nbGraph");

    nbGraph = nbGraph[nbGraph.length - 1].value;

    console.log(nbGraph);

    const passvarj6 = document.getElementsByClassName("valuej6")[nbGraph-1];
    const passvarj5 = document.getElementsByClassName("valuej5")[nbGraph-1];
    const passvarj4 = document.getElementsByClassName("valuej4")[nbGraph-1];
    const passvarj3 = document.getElementsByClassName("valuej3")[nbGraph-1];
    const passvarj2 = document.getElementsByClassName("valuej2")[nbGraph-1];
    const passvarj1 = document.getElementsByClassName("valuej1")[nbGraph-1];
    const passvarj = document.getElementsByClassName("valuej")[nbGraph-1];

    const valuej6 = document.getElementsByClassName("j-6")[nbGraph-1];
    const valuej5 = document.getElementsByClassName("j-5")[nbGraph-1];
    const valuej4 = document.getElementsByClassName("j-4")[nbGraph-1];
    const valuej3 = document.getElementsByClassName("j-3")[nbGraph-1];
    const valuej2 = document.getElementsByClassName("j-2")[nbGraph-1];
    const valuej1 = document.getElementsByClassName("j-1")[nbGraph-1];
    const valuej = document.getElementsByClassName("j")[nbGraph-1];

    const Titre = document.getElementsByClassName("titre")[nbGraph-1];
    var newTitre = document.getElementsByClassName("nomGraph")[nbGraph-1].value;

    const NomAxe = document.getElementsByClassName("Axe_2")[nbGraph-1];
    var newNomAxe = document.getElementsByClassName("nomAxe")[nbGraph-1].value;

    var RegExp = /_/gi;

    newTitre = newTitre.replace(RegExp, ' ');

    Titre.textContent = newTitre;
    NomAxe.textContent = newNomAxe;

    valuej6.style.height = passvarj6.value + "px";
    valuej5.style.height = passvarj5.value + "px";
    valuej4.style.height = passvarj4.value + "px";
    valuej3.style.height = passvarj3.value + "px";
    valuej2.style.height = passvarj2.value + "px";
    valuej1.style.height = passvarj1.value + "px";
    valuej.style.height = passvarj.value + "px";
}

fonction();