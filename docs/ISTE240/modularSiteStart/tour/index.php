<?php
	//variable $page will be used for many things - including highlighting the navigation
	//for the page title and the HTML title. (could be different values for each if
	//developer wanted more or different!)
	$page = "tour";
	/* The $path variable is to tell the server where the website's root is.
	The $path variable might not be needed by all pages (if they are in the site root), but
	will be for others
	Remember, in UNIX
	./ - this folder you are currently in
	../ - go up one folder
	*/
	$path = '../';
	include($path.'assets/inc/header.php');
	include($path.'assets/inc/nav.php');
?>				
				<h1>Tour page stuff...</h1> 
				<div>(eventually, each page will be some includes and a db call only!)</div>
<?php
	include($path.'assets/inc/footer.php');
?>