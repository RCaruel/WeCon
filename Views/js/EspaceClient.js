const button1 = document.getElementById("TabBord");
console.log(button1);
const button2 = document.getElementById("GestCapt");
console.log(button2);
const button3 = document.getElementById("GestComptes");
console.log(button3);
const button4 = document.getElementById("MSG");
console.log(button4);
const button5 = document.getElementById("Parametre");
console.log(button5);
var position = 0;

button1.addEventListener("click", functionbutton1);
button2.addEventListener("click", functionbutton2);
button3.addEventListener("click", functionbutton3);
button4.addEventListener("click", functionbutton4);
button5.addEventListener("click", functionbutton5);

function functionbutton1() {
    console.log(this);
    button1.style.background = "#0D1F34";
    button1.style.borderLeft = "3px solid #FD9C17";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
    button4.style.background = "#2E4057";
    button4.style.borderLeft = "none";
    button5.style.background = "#2E4057";
    button5.style.borderLeft = "none";
}

function functionbutton2(){
    console.log(this);
    button2.style.background = "#0D1F34";
    button2.style.borderLeft = "3px solid #FD9C17";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
    button4.style.background = "#2E4057";
    button4.style.borderLeft = "none";
    button5.style.background = "#2E4057";
    button5.style.borderLeft = "none";
}

function functionbutton3() {
    console.log(this);
    button3.style.background = "#0D1F34";
    button3.style.borderLeft = "3px solid #FD9C17";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button4.style.background = "#2E4057";
    button4.style.borderLeft = "none";
    button5.style.background = "#2E4057";
    button5.style.borderLeft = "none";
}

function functionbutton4(){
    console.log(this);
    button4.style.background = "#0D1F34";
    button4.style.borderLeft = "3px solid #FD9C17";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
    button5.style.background = "#2E4057";
    button5.style.borderLeft = "none";
}

function functionbutton5(){
    console.log(this);
    button5.style.background = "#0D1F34";
    button5.style.borderLeft = "3px solid #FD9C17";
    button1.style.background = "#2E4057";
    button1.style.borderLeft = "none";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
    button3.style.background = "#2E4057";
    button3.style.borderLeft = "none";
    button4.style.background = "#2E4057";
    button4.style.borderLeft = "none";
}