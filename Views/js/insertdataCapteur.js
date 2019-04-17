const boutonAjouterCapteur = document.getElementById("AjouterCapteur");
boutonAjouterCapteur.addEventListener("click", functionbutton1);

function functionbutton1() {
    console.log(this);
}
console.log("Click du bouton");
boutonAjouterCapteur.click();

function fonction(){
    const NomCapteur = document.getElementById("nomCapteur").value;
    const Id_Piece = document.getElementById("Id_Piece").value;


    document.getElementById("newnomCapteur").value = NomCapteur;
    document.getElementById("newId_Piece").value = Id_Piece;
}

fonction();