<script src="js/jquery.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.js"></script>

<!--Initializes responsive menu functionality-->
<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>

<script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({

     // Show next and prev buttons
          slideSpeed: 800,
          paginationSpeed: 800,
          singleItem: true,
          autoPlay: 7000,
          navigation: false,
          stopOnHover: true,

          // "singleItem:true" is a shortcut for:
          // items : 1,
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false

      });

    });
</script>
