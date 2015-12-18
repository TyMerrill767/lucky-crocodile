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
