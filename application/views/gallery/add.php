<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Add Image
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url('testimonials/index'); ?>"><i class="fa fa-list"></i> list</a></li>
         <li class="active">Add</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
			<div class="box box-primary">
            <!-- general form elements -->
            <div class=" ">
               <div style="padding:20px;">
                  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('galleries/addpost'); ?>" enctype="multipart/form-data">
				  	<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						 <div class="row">
                          
						   <div class="form-group col-md-6">
                              <label class="col-lg-4 control-label">Name</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="name" placeholder="Enter Image"  required>
                              </div>
                           </div>
						   <div class="form-group col-md-6">
                              <label class="col-lg-4 control-label">Image</label>
                              <div class="col-md-8">
                                 <input type="file" class="form-control" name="image"  required>
                              </div>
                           </div> 
						
						  </div>
                     
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                           <div class="col-lg-6 text-center">
                              <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
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
<script type="text/javascript">
$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    $('#defaultForm').bootstrapValidator({
			fields: {
	            name: {
				   validators: {
					   notEmpty: {
							message: 'Name is required'
						}
					}
				},image: {
				   validators: {
						regexp: {
						regexp: "(.*?)\.(png|Png|jpg|jpeg||Jpg|Jpeg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
						}
					}
				},msg: {
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

