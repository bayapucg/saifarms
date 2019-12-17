<main id="main mt-5">
		<section id="about" style="padding:2px 0px 0px 0px;margin-top:100px;">
		<div class="container mt-5">
			<form>
				<div class="row">
					<div class="col-md-12">
						<header class="section-header">
						  <h3>Contact Us</h3>
						  <p class="text-left"><?php echo isset($c_d['text'])?$c_d['text']:''; ?></p>
						</header>
						
					</div>
				</div>
			</form>
		</div>
		</section>
		<section >
			<div class="container mt-5">
				<div class="row">
				
					<div class="col-md-6">
					<form action="<?php echo base_url('contactus/post'); ?>" method="post">
						<div class="form-group">
								<div class="">
									<input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>
								</div>
						</div>
						<div class="form-group">
								<div class="">
									<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" required>
								</div>
						</div>
						<div class="form-group">
								<div class="">
									<input type="email" class="form-control" name="email" placeholder="Enter Email Id" required>
								</div>
						</div>
						<div class="form-group">
								<div class="">
									<textarea class="form-control" name="message" placeholder=" Enter Comment" required></textarea>
								</div>
						</div>
						<div class="form-group">
								<button class="btn btn-primary" type="submit">Submit</button>
						</div>
						</form>
					</div>
					
					<div class="col-md-6">
						<div >
							<h5 >Contact us</h5>
							
						</div>
						<div>
							<i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp; <?php echo isset($c_d['mobile'])?$c_d['mobile']:''; ?>
						</div>
						<div>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;   <?php echo isset($c_d['email'])?$c_d['email']:''; ?>
						</div>
						<div>
							<i class="fa fa-map-marker " aria-hidden="true"></i> &nbsp;&nbsp;  <?php echo isset($c_d['address'])?$c_d['address']:''; ?>

						</div>
						<div class="mt-4">
							<div class="social-links">
								<a target="_blank" href="https://<?php echo isset($c_d['tw'])?$c_d['tw']:''; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
								<a target="_blank" href="https://<?php echo isset($c_d['fb'])?$c_d['fb']:''; ?>"class="facebook"><i class="fa fa-facebook"></i></a>
								<a target="_blank" href="https://<?php echo isset($c_d['pin'])?$c_d['pin']:''; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
								<a target="_blank" href="https://<?php echo isset($c_d['ln'])?$c_d['ln']:''; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
								<a target="_blank" href="https://<?php echo isset($c_d['you'])?$c_d['you']:''; ?>" class="linkedin"><i class="fa fa-youtube"></i></a>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</main>