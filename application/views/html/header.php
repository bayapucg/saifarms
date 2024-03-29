<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left logo-cus">
        <h1><a href="<?php echo base_url(); ?>" class="scrollto"><img src="<?php echo base_url(); ?>assets/front/img/logo.png" ></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
			<li><a class="<?php if($this->uri->segment(1)==''){ echo "menu-active";} ?>" href="<?php echo base_url(); ?>">Home </a></li>
			<li><a  class="<?php if($this->uri->segment(1)=='aboutus'){ echo "menu-active";} ?>" href="<?php echo base_url('aboutus'); ?>">About </a></li>
			<li class="menu-has-children ">
				<a class="<?php if($this->uri->segment(1)=='services'){ echo "menu-active";} ?>" href="#">Services</a>
				<?php if(isset($s_list) && count($s_list)>0){ ?>
					<ul>
					<?php foreach($s_list as $li){ ?>
						<li><a href="<?php echo base_url('services/details/'.base64_encode($li['s_id'])); ?>"><?php echo $li['name']; ?></a></li>
					<?php } ?>
				   </ul>
				   <?php } ?>
			  </li>
		    <li><a class="<?php if($this->uri->segment(1)=='gallery'){ echo "menu-active";} ?>" href="<?php echo base_url('gallery'); ?>">Gallery </a></li>
		    <li><a class="<?php if($this->uri->segment(1)=='contactus'){ echo "menu-active";} ?>" href="<?php echo base_url('contactus'); ?>">Contact Us </a></li>
		    
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
