<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Default Theme -->
<link rel="stylesheet" href="css/owl.theme.css">

<!--  jQuery 1.7+  -->
<script src="js/jquery.min.js"></script>

<!-- Include js plugin -->
<script src="js/owl.carousel.js"></script>

<div id="owl-demo" class="owl-carousel owl-theme">

  <div class="item"><img src="images/coffee.png" alt=""></div>
  <div class="item"><img src="images/milk.png" alt=""></div>
  <div class="item"><img src="images/money.png" alt=""></div>
  <div class="item"><img src="images/Rx.png" alt=""></div>
  <div class="item"><img src="images/wine.png" alt=""></div>

</div>

<style>
    #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>

<script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({

          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
          autoPlay: 1000,
          navigation: false,
          stopOnHover: true;

          // "singleItem:true" is a shortcut for:
          // items : 1,
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false

      });

    });
</script>

</html>
