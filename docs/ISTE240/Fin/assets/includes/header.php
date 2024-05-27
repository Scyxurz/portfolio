<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>ISTE-240</title>
	<style>
		/****************************************************/
		/*	Start - You won't need to mess with these rules	*/
		*, *:before, *:after {box-sizing: border-box;}
		.columnsContainer, footer, header { position: relative; margin: .5em; }
		.leftColumn, .rightColumn, footer, header {  border: 1px solid  #ccc; padding: 1.25em; }
		.leftColumn { margin-bottom: .5em; background-color:#74D7ED}
		.rightColumn {background-color:#89D690}
		footer {background-color:#CFC246}
		header {background-color:#F59984}
		/*	End - You won't need to mess with these rules	*/
		/****************************************************/
		
		/****************************************************/
		/* Write your rules below!!! */
		
		
		/* CSS #1 */
		/* make the first letter of every p tag 1.8 times bigger and purple */
		p::first-letter{
			font-size: 1.8em;
			color: purple;
		}
		
		/* CSS #2 */
		/* animate the header tag so it slides down from above on load of the page */
		/* animation should happen over 2.5 seconds, be linear, start at time 0 and only happen once */
		/* think CSS animation using @keyframes */
		@keyframes slideDown{
			0% {transform: translateY(-100%);}
			100% {transform: translateY(0);;}
		}
		header{
			animation: slideDown 2.5s linear 0s 1 normal forwards;
		}
		/* CSS #3 */
		/* MEDIA QUERIES */
		/* when the page is greater than 725px wide, make the .leftColumn and .rightColumn display side by side*/
		@media only screen and (max-width: 725px){
			.leftColumn{
				float: left;
				width: 50%;
			}
			.rightColumn{
				float: right;
				width: 50%;
			}
			footer{
				clear: both;
			}
		}


	</style>
	<script>
		/* JavaScript functions go here */
		function changeText(){
			if(document.getElementById("h1").innerHTML == "ISTE-240 2218 Final"){
				document.getElementById("h1").innerHTML = "I changed it!";
			} else{
				document.getElementById("h1").innerHTML = "ISTE-240 2218 Final";
			}
		}
		
		function rollOver(){
			document.getElementById("image").src = "assets/img/dsb.jpg" ;
		}
		function rollOff(){
			document.getElementById("image").src = "assets/img/img.png" ;
		}

		function checkForm(){
			if(!document.getElementById("name").value || !document.getElementById("address").value || !document.getElementById("howMany").value){
				if(!document.getElementById("name").value){
					document.getElementById("name").style.border = "2px solid red";
				}else{
					document.getElementById("name").style.border = "1px solid black";
				}
				if(!document.getElementById("address").value){
					document.getElementById("address").style.border = "2px solid red";
				}else{
					document.getElementById("address").style.border = "1px solid black";
				}
				if(!document.getElementById("howMany").value){
					document.getElementById("howMany").style.border = "2px solid red";
				}else{
					document.getElementById("howMany").style.border = "1px solid black";
				}
				return false;
			}
		}
	</script>
</head>