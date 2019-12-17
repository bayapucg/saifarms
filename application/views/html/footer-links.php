	<script>
		jQuery(function ($) {

		$(".sidebar-dropdown > a").click(function() {
	  $(".sidebar-submenu").slideUp(200);
	  if (
		$(this)
		  .parent()
		  .hasClass("active")
	  ) {
		$(".sidebar-dropdown").removeClass("active");
		$(this)
		  .parent()
		  .removeClass("active");
	  } else {
		$(".sidebar-dropdown").removeClass("active");
		$(this)
		  .next(".sidebar-submenu")
		  .slideDown(200);
		$(this)
		  .parent()
		  .addClass("active");
	  }
	});

	$("#close-sidebar").click(function() {
	  $(".page-wrapper").removeClass("toggled");
	});
	$("#show-sidebar").click(function() {
	  $(".page-wrapper").addClass("toggled");
	});


	   
	   
	});
	</script>
  <script src="<?php echo base_url(); ?>assets/front/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>assets/front/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>

</body>
</html>
