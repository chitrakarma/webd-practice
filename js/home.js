document.write("<div id=\"shit\" onmouseover=\"welcome()\" onmouseout=\"backme()\">Hello world, this is me learning javascript</div>");
function welcome(){
    var elem = document.getElementById("shit");
    elem.style.fontSize = '30px';
}
function backme(){
    var elem = document.getElementById("shit");
    elem.style.fontSize = '20px';
}
function front(){
    var one = document.getElementById("one");
    one.style.zIndex = '-1';
    one.style.height = '270px';
    one.style.width = '470px';
    one.style.marginLeft = '30%';
    var two = document.getElementById("two");
    two.style.zIndex = '0';
    two.style.height = '300px';
    two.style.width = '500px';
    two.style.marginLeft = '40%';
}
function back(){
    var one = document.getElementById("one");
    one.style.zIndex = '0';
    one.style.height = '300px';
    one.style.width = '500px';
    one.style.marginLeft = '40%';
    var two = document.getElementById("two");
    two.style.zIndex = '-1';
    two.style.height = '270px';
    two.style.width = '470px';
    two.style.marginLeft = '30%';
}