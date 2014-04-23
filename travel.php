<!-- Site Header -->
<?php
	require_once('header.php');
?>

<!-- Page Content - Days Events -->
<div class = "page_area" id = 'travel'>
	<?php
		require_once('site_navigation.php');
	?>

	<div class = "main_pane">
		<img class = "large" src = "images/map-for-directions.jpg"
			 alt = "Directions Map"
			 title = "Map of Directions" />
	</div>

	<div class = "side_pane">
		<img class = "side_pane_border" src = "images/What-directions-larger.png"
			 alt = "" />

		<ul id = "side_nav">
			<li id ="t-1"><a href="travel_from_south.php">By car from the South (via M66)</a></li>
			<li id ="t-2"><a href="travel_from_north.php">By car from the North (via A56)</a></li>
			<li id ="t-3"><a href="travel_public_transport.php">Public Transport & Taxi Details</a></li>
		</ul>

	</div>



</div>

<!-- Site Footer -->
<?php
	require_once('footer.php');
?>
