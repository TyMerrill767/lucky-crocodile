<script src="js/jquery.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--Initializes responsive menu functionality-->
<script>
	$(function () {
		$('#menu').slicknav();
	});
</script>

<script>
	$(document).ready(function () {

		$("#owl-demo").owlCarousel({

			slideSpeed: 800,
			paginationSpeed: 800,
			singleItem: true,
			autoPlay: 7000,
			navigation: true,
			navigationText: ["<i class='fa fa-arrow-circle-left'></i>", "<i class='fa fa-arrow-circle-right'></i>"],
			stopOnHover: true,

		});

	});
</script>

<script>
var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});
</script>

<footer role="contentinfo">
	<p>&copy;
		<?php
		$startYear = 2015;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
			D.O.N.T.</p>

	<p>BPA Information:</p>

	Chapter: 03&dash;0042 &#124; Theme: Toddler Neglect in Vehicles &#124; School: Francis Tuttle Technology Center &#124; City: Oklahoma City, OK &#124; Year: 2015</p>
	<a href="#" class="go-top">Go Top</a>

</footer>
