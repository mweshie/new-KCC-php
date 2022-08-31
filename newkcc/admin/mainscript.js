 function openpane() {
    var pane = document.getElementById('sidepane');
    pane.style.left = "0px"
    pane.style.width = "25%"
    var sec = document.getElementById("section");
    sec.style.width = "75%"
    sec.style.left = "25%"

}

function closepane() {
    var pane = document.getElementById('sidepane');
    pane.style.width = "0%"
    pane.style.left = "-130px"
    var sec = document.getElementById("section");
    sec.style.width = "96%"
    sec.style.left = "4%"

}

function dash() {
    var html = document.getElementById("section");
    html.setAttribute("src", "dashboard.php")
}

function Orderlist() {
    var html = document.getElementById("section");
    html.setAttribute("src", "orderlist.php")
}

function Products() {
    var html = document.getElementById("section");
    html.setAttribute("src", "Products.php")
}

function Category() {
    var html = document.getElementById("section");
    html.setAttribute("src", "Category.php")
}

function Settings() {
    var html = document.getElementById("section");
    html.setAttribute("src", "Settings.php")
}

function About() {
    var html = document.getElementById("section");
    html.setAttribute("src", "About.php")
}
var timeleft = 1000;
var timer = setInterval(function(){
    if(timeleft<=0){
        clearInterval(timer);
    }
    document.getElementById("prog").value = 1000 - timeleft;
    timeleft -= 1;
},15)
setTimeout(function(){
    var out = document.getElementById("failed")
    out.style.display ="none";
},15000);
