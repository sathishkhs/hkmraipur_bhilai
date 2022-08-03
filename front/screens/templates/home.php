<!DOCTYPE html>
<html dir="ltr" lang="en">

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!-->
<!--<![endif]-->

<?php $this->load->view('templates/includes/head'); ?>

<body class="">

<div id="wrapper" class="clearfix">
		<!-- Preloader code goes here -->
		  <div id="preloader">
			<div id="spinner">
			<img class="floating" src="assets/images/preloaders/13.png" alt="">
			<h5 class="line-height-50 font-18 ml-15">Loading...</h5>
			</div>
			<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
		</div>
		<!-- Preloader code ends here -->
		<header id="header" class="header">
			<?php $this->load->view('templates/includes/topbar'); ?>
			<?php $this->load->view('templates/includes/navbar'); ?>
		</header>

		  <!-- Start main-content -->
		<div class="main-content">
			 <!-- Section: home -->
			 <section id="home">
      			<div class="container-fluid p-0">	
					<?php $this->load->view('templates/includes/slider'); ?>
					<?php $this->load->view('templates/includes/home_container'); ?>
					 <!-- Footer Code goes here -->
					<footer id="footer" class="footer"  >
						<?php $this->load->view('templates/includes/footer'); ?>
						<?php $this->load->view('templates/includes/bottom_footer'); ?>
					</footer>
					<!-- Footer code end here -->
				</div>
			 </section>
		</div>	
		
		<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	<!--/wrapper-->

	<?php $this->load->view('templates/includes/scripts'); ?>

	 <?php if (!empty($scripts) && count($scripts) > 0) : ?>
			<?php foreach ($scripts as $script) : ?>
				<script src="<?php echo $script; ?>"></script>  
			<?php endforeach ?>
		<?php endif ?> 
</body>
</html> 