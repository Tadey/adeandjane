<!-- Site Header -->
<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
	require_once(__ROOT__.'\adeandjane\header.php');
?>

<!-- Page Content - Days Events -->
<div class = "page_area" id = 'accommodation'>
	<?php
		require_once(__ROOT__.'\adeandjane\site_navigation.php');
	?>


	<div class = "main_pane">
		<img  src = "images/accomodation_background.jpg"
			 alt = "Accommodate Map"
			 title = "Map of Accommodation" />
	</div>

	<div class = "side_pane">
		<img class = "side_pane_border" src = "images/AccomodationTextBox.png"
			 alt = "" />

		<ul id = "side_nav_accom">
			<li id ="t-1"><a href="http://www.bestwestern.co.uk/hotels/old-mill-hotel-and-leisure-club-bury-83941/hotel-info/default.aspx" target="_blank">A) The Old Mill (1.3m from venue)</a></li>
			<li id ="t-2"><a href="http://www.red-hall.co.uk/" target="_blank">B) Red Hall Hotel (2.6m from venue)</a></li>
			<li id ="t-3"><a href="http://www.redlionbury.co.uk/" target="_blank">C) Red Lion (3.9m from venue)</a></li>
			<li id ="t-4"><a href="http://loelodge.co.uk/" target="_blank">D) Loe Lodge (2.8m from venue)</a></li>
			<li id ="t-5"><a href="http://www.premierinn.com/en/hotel/BURTHY/manchester-bury?cmp=KNC_D_BND&mckv=sTrXUnMvM_dc|pcrid|38230922019|kword|premier%20inn%20bury|match|e|plid|" target="_blank">E) Premier Inn Bury (7.5m from venue)</a></li>

		</ul>


	</div>



</div>
	<!-- <div class = "text_pane">
			<img class = "text_pane_border" src = "images/text box 4.png"
			 alt = "" />

	<div class="text">

	<p>
	Recommended Places to Stay:
	</p>
	<p>
	The Old Mill (marked A on the map, 1.3m from venue)
	Springwood, Ramsbottom, BL0 9DS
	</p>
	<p>
	Red Hall Hotel (marked B on the map, 2.6m from venue)
	Manchester Rd, Walmersley, Bury, BL9 5NA
	</p>
	<p>
	Red Lion (marked C on the map, 3.9m from venue)
	81 Ramsbottom Rd, Hawkshaw, BL8 4JS
	</p>
	</div>

	</div>


</div> -->

<!-- Site Footer -->
<?php
	require_once(__ROOT__.'\adeandjane\footer.php');
?>





