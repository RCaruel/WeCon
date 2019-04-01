const button1 = document.getElementById("StatsGen");
console.log(button1);
const button2 = document.getElementById("StatsPanne");
console.log(button2)

var position = 0;


function getScrollPosition()
{
    return Array((document.documentElement && document.documentElement.scrollLeft) || window.pageXOffset || self.pageXOffset || document.body.scrollLeft,(document.documentElement && document.documentElement.scrollTop) || window.pageYOffset || self.pageYOffset || document.body.scrollTop);
}

button1.addEventListener("click", functionbutton1);
button2.addEventListener("click", functionbutton2);

function functionbutton1() {
    console.log(this);
    button1.style.background = "#0D1F34";
    button1.style.borderLeft = "3px solid #FD9C17";
    button2.style.background = "#2E4057";
    button2.style.borderLeft = "none";
}

function functionbutton2(){
    console.log(this);
    button2.style.background = "#0D1F34";
    button2.style.borderLeft = "3px solid #FD9C17";
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