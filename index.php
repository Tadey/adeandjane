<!-- Site Header -->
<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
	echo __ROOT__;
	require_once(__ROOT__.'\adeandjane\header.php');
	echo "<br>";
	echo __ROOT__.'\adeandjane\header.php';
?>

<!-- Page Content - Days Events -->

<div class = "splash_page">
		<div class = "splash">

			<img class = "splash_image" src = "images/HomepageUpdated.png"
			 alt = "" />
		</div>
		<div class="enter_button" >
	<a href="days_events.php">CLICK TO ENTER SITE</a>
	</div>


</div>

<!-- Site Footer -->
<?php
	require_once(__ROOT__.'\adeandjane\footer.php');
?>
