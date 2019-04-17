const boutonAjouter = document.getElementById("Ajouter");
boutonAjouter.addEventListener("click", functionbutton1);

function functionbutton1() {
    console.log(this);
}
console.log("Click du bouton");
boutonAjouter.click();

function fonction(){
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const mail = document.getElementById("mail").value;
    const identifiant = document.getElementById("identifiant").value;

    document.getElementById("newnom").value = nom;
    document.getElementById("newprenom").value = prenom;
    document.getElementById("newmail").value = mail;
    document.getElementById("newid").value = identifiant;

}

fonction();