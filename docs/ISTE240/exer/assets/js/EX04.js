// function to change color and size of text
function jsStyle() {
    document.getElementById('text').style.color = "blue";
    document.getElementById('text').style.fontSize = "1.4em";
}
// function to send first and last names
// to an 'alert' message.
function getFormValues() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    window.alert(fname + " " + lname);
}
// function to display the number of options in an alert()
function getOptions() {
	var counter = document.getElementById("mySelect").childElementCount;
	window.alert("There are " + counter + " options.")
}
// function to turn text red on mouseover
function turnRed(){
    document.getElementById("rb").style.color = "red";
}
// function to turn text black on mouseout
function turnBlack(){
    document.getElementById("rb").style.color = "black";
}
// function that multiplies input values
function multiply(){
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    document.getElementById("result").innerHTML = x * y;
}
// function that divides input values
function divide(){
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    document.getElementById("result").innerHTML = x / y;
}