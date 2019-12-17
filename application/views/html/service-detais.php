 <main id="main mt-5">

    <section id="facts" class="pb-4">
      <div class="container mt-5">
		<header class="section-header">
          <h3><?php echo isset($s_d['name'])?$s_d['name']:''; ?></h3>
        </header>
		<div class="row">
			<div class="col-md-6">
			<?php $ff=explode(".",$s_d['image']);
				if(isset($ff[1]) && $ff[1]=="mp4"){ ?>
					<video width="100%" height="auto" controls >
					  <source src="<?php echo base_url('assets/serices/'.$s_d['image']); ?>" type="video/mp4">
					  <source src="<?php echo base_url('assets/serices/'.$s_d['image']); ?>" type="video/ogg">
					 
					</video>
				<?php }else{ ?>
					<img src="<?php echo base_url('assets/serices/'.$s_d['image']); ?>" alt="<?php echo $s_d['image']; ?>">
				<?php } ?>
				
			</div>
			<div class="col-md-6">
			<?php echo isset($s_d['b_description'])?$s_d['b_description']:''; ?>
			</div>
		</div>
		</div>
    </section>

    
	<section id="team">
		<div class="container"> 
			<?php echo isset($s_d['description'])?$s_d['description']:''; ?>
		</div>
	</section>
	
    
  </main>


  