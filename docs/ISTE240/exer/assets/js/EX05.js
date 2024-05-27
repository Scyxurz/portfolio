/*
author: Aaron Siegelman
date: 5/31/2022
class: ISTE 240

JavaScript for EX05*/

// function that returns element by id 
function $(id) {
    return document.getElementById(id);
}
// function that moves text to the right
function move(id) {
    $(id).style.left = parseInt($(id).style.left) + 10 + 'px';
}
// function that counts how many input elements are in the form
function howmany(id) {
    let x = 0;
    for (let i = 0; i < $(id).getElementsByTagName("input").length; i++) {
        if ($(id).getElementsByTagName("input")[i].getAttribute("type") == "text") {
            x += 1;
        }
    }
    window.alert("There are " + $(id).getElementsByTagName("input").length +
        " total input elements, and " + x + " input elements of type 'text'.");
}
// function that changes background color
function colorchanger(id) {
    $(id).parentElement.parentElement.style.backgroundColor = $(id).value;
}
// function to turn text the selected color of the dropdown menu in 5c on mouseover
function turnRed() {
    document.getElementById("rb").style.color = document.getElementById("mySelect").value;
}
// function to turn text black on mouseout
function turnBlack() {
    document.getElementById("rb").style.color = "black";
}
// function that multiplies input values
function multiply() {
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    // Is it even necessary to create this variable? It seems to work the same without declaring result, leading me to think that the id can be called as a node itself.
    let result = document.getElementById("result");
    if (result.childNodes.length > 0) {
        result.replaceChild(document.createTextNode(x * y), result.firstChild);
    } else {
        result.appendChild(document.createTextNode(x * y));
    }
}
// function that divides input values
function divide() {
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    let result = document.getElementById("result");
    if (result.childNodes.length > 0) {
        result.replaceChild(document.createTextNode(x / y), result.firstChild);
    } else {
        result.appendChild(document.createTextNode(x / y));
    }
}