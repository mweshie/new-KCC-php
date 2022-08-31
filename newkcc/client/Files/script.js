function openmenu(){
    var menu = document.getElementById('menu');
    menu.classList.toggle("newmenu")
}
function accpane() {
    var x = document.getElementById("accpane");
    if (x.style.display != "block") {
        x.style.display = "block"


    } else if (x.style.display == "block") {
        x.style.display = "none"
    }
}



function outaccpane() {
    var y = document.getElementById("accpane1");
    if (y.style.display != "block") {

        y.style.display = "block"

    } else if (y.style.display == "block") {

        y.style.display = "none"
    }
}

function openlog() {
    var sign = document.getElementById("sign")
    if (sign.style.display == "none") {
        sign.style.display = "block"
    } else if (sign.style.display != "none")
        sign.style.display = "none"
}

function log() {
    var signin = document.getElementById("sect")
    signin.setAttribute("src", "signup.php")
    var sign = document.getElementById("sign")
    sign.style.display = "none"
    var x = document.getElementById("accpane");
    x.style.display = "none"
}

function closeprod() {
    var product = document.getElementById("sect")
    product.setAttribute("src", "index.php")
}
var timeleft = 1000;
var timer = setInterval(function() {
    if (timeleft <= 0) {
        clearInterval(timer);
    }
    document.getElementById("prog").value = 1000 - timeleft;
    timeleft -= 1;
}, 15)
setTimeout(function() {
    var out = document.getElementById("failed")
    out.style.display = "none";
}, 15000);