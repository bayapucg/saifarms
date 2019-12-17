<div class="content-wrapper">
   <section class="content-header mb-4">
      <h1>
         Edit Service
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url('service/index'); ?>"><i class="fa fa-list"></i> list</a></li>
         <li class="active">Edit Service</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
			<div class="box box-primary">
            <div class=" ">
               <div style="padding:20px;">
                  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('service/editpost'); ?>" enctype="multipart/form-data">
				  	<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="s_id" value="<?php echo isset($n_d['s_id'])?$n_d['s_id']:''; ?>">
						 <div class="row">
                           <div class="form-group col-md-6">
                              <label class="col-lg-4 control-label">Name</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="name" value="<?php echo isset($n_d['name'])?$n_d['name']:''; ?>" placeholder="Enter Name" />
                              </div>
                           </div> 
						   <div class="form-group col-md-6">
                              <label class="col-lg-2 control-label">video/Image</label>
                              <div class="col-md-10">
                                 <input type="file" class="form-control" name="image" >
                              </div>
                           </div> 
						   <div class="col-md-12">
									<div class="form-group">
										<label class=" control-label">Brief description</label>
										<div class="">
											<textarea type="text" class="form-control" name="b_description" id="b_description" placeholder="Enter Brief description" ><?php echo isset($n_d['b_description'])?$n_d['b_description']:''; ?></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class=" control-label">Description</label>
										<div class="">
											<textarea type="text" class="form-control" name="description" id="description" placeholder="Enter Description" ><?php echo isset($n_d['description'])?$n_d['description']:''; ?></textarea>
										</div>
									</div>
								</div>
						
						  </div>
                     
                        <div class="form-group">
                           <div class="col-lg-6 text-center">
                              <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
                           </div>
                        </div>
                  </form>
                  <div class="clearfix">&nbsp;</div>
                  </div>
               </div>
               <!-- /.box -->
            </div>
            </div>
         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
</div>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<script>
$(function () {
    CKEDITOR.replace('b_description');
    $(".textarea").wysihtml5();
  }); 
  $(function () {
    CKEDITOR.replace('description');
    $(".textarea").wysihtml5();
  }); 
</script>
<script type="text/javascript">
$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    $('#defaultForm').bootstrapValidator({
			fields: {
	            title: {
				   validators: {
					   notEmpty: {
							message: 'Title is required'
						}
					}
				} ,msg: {
				   validators: {
					   notEmpty: {
							message: 'Message is required'
						}
					}
				}
	        }
	    });
	
	});
</script>

