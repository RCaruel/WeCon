function verifymail() {
    let input = document.getElementById('mail');
    // inéfieur à 7 car la taille commence à zéro
    if (input.value.type <= 7) {
        document.getElementById('verify-login').style.display = "block";
    }else {
        document.getElementById('verify-login').style.display = "none";
    }
}
function verifyPassword() {
    let password = document.getElementById('password').value;
    let passwordVerif = document.getElementById('password-1').value;
    if (passwordVerif === password) {
        document.getElementById('verify-password').style.color = "green";
        document.getElementById('verify-password').innerHTML = "ok";
        document.getElementById('password-1').style.borderColor = "green";
    }else {
        document.getElementById('verify-password').style.color = "red";
        document.getElementById('password-1').style.borderColor = "red";
        document.getElementById('verify-password').innerHTML = "X";
    }
}
