<?php include "assets/includes/header.php"?>
<body>
	<!-- JS #1 make the h1 below change its text between 'ISTE-240 2218 Final' and 'I changed it!' when clicked -->
  	<header><h1 id="h1" onclick="changeText()">ISTE-240 2218 Final</h1></header>
  	<div class="columnsContainer">

	  	<div class="leftColumn">
	  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit vitae magna et euismod. Cras et sollicitudin nisl. Aliquam cursus pulvinar pulvinar. Nulla et neque enim. Nam eleifend erat ut ligula posuere dapibus. Vestibulum commodo velit sed nisi vehicula, sed lobortis odio lobortis. Proin lacus urna, condimentum non lacinia nec, volutpat nec ante. Sed sit amet metus tortor. In in risus ante. Suspendisse id pulvinar tellus, a iaculis neque. Ut ac risus varius, maximus orci nec, fringilla augue. Mauris ornare libero sed risus finibus molestie et tempor mi. Morbi risus erat, mattis sed sapien id, mollis suscipit orci. In hac habitasse platea dictumst.</p>
			<p>Etiam vel pharetra nisi, vel mollis lectus. Morbi sodales, ipsum non vestibulum molestie, mauris nulla luctus erat, vel consequat lorem quam bibendum lorem. Cras vitae laoreet sapien. Pellentesque vel ante non eros bibendum sollicitudin id at lacus. Mauris aliquet ac justo non cursus. Sed sit amet fermentum nibh, non bibendum tellus. Maecenas fermentum scelerisque vulputate. Nullam fringilla condimentum libero. Phasellus tincidunt lectus in nibh mattis aliquet. Quisque fermentum quis dui ac gravida. In laoreet finibus odio eu lobortis. Phasellus tempus gravida eros, vitae tristique nunc lacinia quis. Proin ullamcorper aliquet imperdiet.</p>
			<!-- JS #2 make the image swap on rollover, swap back on rollout (img.png to dsb.jpg on rollover, dsb.jpg to img.png on rollout) -->
			<figure><img id="image" src="assets/img/img.png" onmouseover="rollOver()" onmouseleave="rollOff()"/></figure>
			<p>Nullam semper sem nec risus rhoncus placerat. Curabitur lobortis ipsum sed accumsan pharetra. Morbi maximus, ante in varius convallis, nulla tortor pharetra eros, pharetra volutpat ex neque sit amet ipsum. Nam ornare ex massa. Vestibulum vel egestas dui, varius tempus urna. Curabitur vestibulum erat tellus, sit amet mattis nisl volutpat sed. In hac habitasse platea dictumst. Nullam volutpat mi sit amet sodales tincidunt. Nam laoreet sit amet mauris id ornare. Etiam placerat quis quam vel gravida. Cras scelerisque, turpis et feugiat aliquet, nibh elit aliquam sem, nec luctus tellus odio sed sem.</p>
			<p>Suspendisse potenti. Pellentesque feugiat ultricies mattis. Ut consectetur, nunc sed faucibus tincidunt, lacus tortor hendrerit lectus, vel bibendum turpis felis at ante. Donec ut mollis nisi, eu dapibus justo. Praesent pulvinar vestibulum turpis, eu tempor augue fringilla a. Nulla mollis, tortor eget vehicula vulputate, dui sapien scelerisque metus, sed tempus dolor erat sed felis. Duis molestie, nunc ut tristique vulputate, dolor nisi congue nisi, eget tincidunt elit ante eu nunc.</p>
			<p>Morbi sit amet magna sapien. Praesent non nisi eget mauris mattis elementum. Ut tristique purus ligula, et commodo odio viverra at. Suspendisse malesuada semper elementum. Duis ornare ex in porttitor scelerisque. Donec eu congue nisi. Ut urna elit, sollicitudin malesuada tristique a, feugiat at metus. Donec mollis congue tincidunt. Pellentesque vestibulum interdum imperdiet. Fusce ac urna eget turpis egestas sodales ut ac nibh. Vestibulum a elit a sem bibendum tristique at ut neque. Maecenas placerat, metus at laoreet sodales, massa tortor imperdiet magna, vitae vulputate ante ante sit amet lorem. Quisque in convallis diam. Aenean in erat in turpis vehicula dictum id ac tellus. Etiam gravida laoreet lacus, sed tempor purus aliquet sed. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</div>

	  	<div class="rightColumn">
	  		<p>Morbi sapien sem, mattis venenatis sollicitudin non, molestie in ex. Nam maximus neque lectus, tristique ornare sapien mattis non. Etiam eget arcu et libero semper tempus eu at est. Etiam ut viverra eros. Phasellus sed leo sagittis, ultrices ipsum vitae, consequat mi. Sed tristique sollicitudin hendrerit. Mauris sollicitudin nec lectus sit amet dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper mi purus, a fermentum diam rhoncus ut. Duis pellentesque enim eget ipsum commodo sollicitudin.</p>
			<p>Ut pretium tristique nisl, ac rutrum felis ornare eget. Proin nec nunc eros. Aliquam maximus vitae lorem quis sollicitudin. Donec maximus dolor et justo venenatis ullamcorper. Nunc vulputate nisl non justo molestie tempus. Donec vel molestie quam, consequat imperdiet justo. Fusce consectetur quam quis tellus consectetur, eget posuere quam tincidunt.</p>
     		<hr />
     		<!-- JS #3 when the form is submitted, check all 3 inputs have some value,
     			if they do - submit the form to to the this page (index.php) via POST
     			if they don't - turn the border of the empty input red and do NOT submit the form (shouldn't leave the page).
     			 -->
     		<div id="form">
				<form onsubmit="return checkForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<h3>Purchase:</h3>
					Name:<input type="input" name="name" id="name"/><br />
					Address:<input type="input" name="address" id="address"/><br />
					How Many:<input type="number" name="howMany" style="width:4em" id="howMany"/><br />
					<br />
					<input type="submit" value="Tell us!" />
				</form>
      		</div>
      	</div>
  	</div>
<?php include "assets/includes/footer.php"?>