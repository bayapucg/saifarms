<?php if(isset($home_banners) && count($home_banners)>0){ ?>
<section id="intro">
    <div class="row">
    <div class="col-md-12" style="padding:0;margin:0">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

       <?php $cnt=0;foreach($home_banners as $li){ ?>
			<?php if($cnt==0){ ?>
			  <div class="carousel-item active">
				<div class="carousel-background"><img src="<?php echo base_url('assets/home_banners/'.$li['image']); ?>" alt="<?php echo $li['org_image']; ?>"></div>
				<div class="carousel-container">
				  <div class="carousel-content">
					<h2><?php echo $li['title']; ?></h2>
					
				  </div>
				</div>
			  </div>
			<?php }else{ ?>
			  <div class="carousel-item ">
				<div class="carousel-background"><img src="<?php echo base_url('assets/home_banners/'.$li['image']); ?>" alt="<?php echo $li['org_image']; ?>"></div>
				<div class="carousel-container">
				  <div class="carousel-content">
					<h2><?php echo $li['title']; ?></h2>
				  </div>
				</div>
			  </div>
			<?php } ?>
		<?php $cnt++;} ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
    </div>
    </div>
  </section><!-- #intro -->
<?php } ?>
  <main id="main">
	<?php if($home_abt_cnt['text']!=''){ ?>
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p><?php echo isset($home_abt_cnt['text'])?$home_abt_cnt['text']:''; ?></p>
        </header>
		<?php if(isset($home_abt_cnt['abt_imgs']) && count($home_abt_cnt['abt_imgs'])>0){ ?>
			<div class="row about-cols">
				<?php $ac=1;foreach($home_abt_cnt['abt_imgs'] as $hli){ ?>
				  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.<?php echo $ac; ?>s">
					<div class="about-col">
					  <div class="img">
						<img src="<?php echo base_url('assets/allimages/'.$hli['ab_image']); ?>" alt="<?php echo $hli['img_ab_image']; ?>" class="img-fluid">
						<div class="icon"><img style="height:35px;width:auto;" src="<?php echo base_url('assets/allimages/'.$hli['ab_icon']); ?>" alt="<?php echo $hli['img_ab_icon']; ?>"></div>
					  </div>
					  <h2 class="title"><a href="#"><?php echo $hli['ab_title']; ?></a></h2>
					  <p>
						<?php echo $hli['ab_subtitle']; ?>
					  </p>
					</div>
				  </div>
				<?php $ac++;} ?>
			</div>
		<?php } ?>

      </div>
    </section><!-- #about -->
<?php } ?>
    <!--==========================
      Services Section
    ============================-->
	<?php if($home_service['text']!=''){ ?>
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p><?php echo isset($home_service['text'])?$home_service['text']:''; ?></p>
        </header>
		<?php if(isset($home_service['h_service']) && count($home_service['h_service'])>0){ ?>
        <div class="row">

         <?php $ac=1;foreach($home_service['h_service'] as $sli){ ?>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.<?php echo $ac; ?>s">
            <div class="icon"><i class="ion-android-cloud-done"></i></div>
            <h4 class="title"><a href=""><?php echo $sli['s_title']; ?></a></h4>
            <p class="description"><?php echo $sli['s_subtitle']; ?></p>
          </div>
		 <?php $ac++;} ?>
		 </div>
		<?php } ?>
		<?php if(isset($v_list) && count($v_list)>0){ ?>
		<div class="row">
			<?php foreach($v_list as $li){ ?>
			<div class="col-md-6">
				<video width="100%"  controls  autoplay>
				  <source src="<?php echo base_url('assets/video/'.$li['video']); ?>" type="video/mp4">
				</video>
			</div>
			<?php } ?>
		</div>
		<?php } ?>

      </div>
    </section><!-- #services -->
	<?php } ?>
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> <?php echo isset($home_founder['mobile'])?$home_founder['mobile'].' (or)':''; ?>  <?php echo isset($home_founder['email'])?$home_founder['email']:''; ?></p>
      
      </div>
    </section>
	<?php if($home_fact['text']!=''){ ?>
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p><?php echo $home_fact['text']; ?> </p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $home_fact['sheaps']; ?> </span>
            <p>Sheaps</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $home_fact['goats']; ?> </span>
            <p>Goats</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $home_fact['country_birds']; ?> </span> 
            <p>Country Birds</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $home_fact['hard_workers']; ?> </span> 
            <p>Hard Workers</p>
  				</div>

  			</div></div>
    </section>
	<?php } ?>
	<?php if(isset($testimonials) && count($testimonials)>0){ ?>
	  <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel ">
			<?php foreach($testimonials as $li){ ?>
          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/testimonials/'.$li['image']); ?>" class="testimonial-img" alt="<?php echo $li['image']; ?>">
            <h3><?php echo $li['name']; ?></h3>
            <h4><?php echo $li['text']; ?></h4>
            <p>
              <img src="<?php echo base_url(); ?>assets/front/img/quote-sign-left.png" class="quote-sign-left" alt="">
				<?php echo $li['message']; ?>
              <img src="<?php echo base_url(); ?>assets/front/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
		<?php } ?>


        </div>

      </div>
    </section>
	<?php } ?>
	<?php if($home_founder['name']!=''){ ?>
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Founder</h3>
        
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
			<img src="<?php echo base_url('assets/profile_pic/'.$home_founder['image']); ?>" class="img-fluid img-thumbnail" alt="">
          </div>
		  <div class="col-lg-9 col-md-9 wow fadeInUp">
			  <p><?php echo $home_founder['text']; ?></p>
			  <h3><?php echo $home_founder['name']; ?></h3>
			  <h4><?php echo $home_founder['email']; ?></h4>
			  <h4><?php echo $home_founder['mobile']; ?></h4>
			 
          </div>

          
          

          

        </div>

      </div>
    </section>
	<?php } ?>
  
	
    
  </main>
  


  