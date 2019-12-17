<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left logo-cus">
        <h1><a href="<?php echo base_url(); ?>" class="scrollto"><img src="<?php echo base_url(); ?>assets/front/img/logo.png" ></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
			<li class="<?php if($this->uri->segment(1)==''){ echo "menu-active";} ?>"><a href="<?php echo base_url(); ?>">Home </a></li>
			<li class="<?php if($this->uri->segment(1)=='aboutus'){ echo "menu-active";} ?>"><a href="<?php echo base_url('aboutus'); ?>">About </a></li>
			<li class="menu-has-children <?php if($this->uri->segment(1)=='services'){ echo "menu-active";} ?>">
				<a href="#">Services</a>
				<?php if(isset($s_list) && count($s_list)>0){ ?>
					<ul>
					<?php foreach($s_list as $li){ ?>
						<li><a href="<?php echo base_url('services/details/'.base64_encode($li['s_id'])); ?>"><?php echo $li['name']; ?></a></li>
					<?php } ?>
				   </ul>
				   <?php } ?>
			  </li>
		    <li class="<?php if($this->uri->segment(1)=='gallery'){ echo "menu-active";} ?>"><a href="<?php echo base_url('gallery'); ?>">Gallery </a></li>
		    <li class="<?php if($this->uri->segment(1)=='contactus'){ echo "menu-active";} ?>"><a href="<?php echo base_url('contactus'); ?>">Contact Us </a></li>
		    
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>