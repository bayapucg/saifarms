<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Services List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Services List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-header bg-primary">
				<div class="col-md-6">
					<div class="">	<a class="btn btn-default st-btn add-student-btn" href="<?php echo base_url('service/add'); ?>"><i class="fa fa-plus"></i> Add</a>
						
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							
							<th>Name</th>
							<th>Created Date & Time</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($s_list) && count($s_list)>0){ ?>
						<?php foreach($s_list as $li){ ?>
							<tr>
								<td><?php echo isset($li['name'])?$li['name']:''; ?></td>								
								<td><?php echo isset($li['created_at'])?$li['created_at']:''; ?></td>
								<td><?php if($li['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
								<td> 
									<a href="<?php echo base_url('service/status/'.base64_encode($li['s_id']).'/'.base64_encode($li['status'])); ?>" class="confirmation"><i class="fa fa-pencil btn btn-success"></i></a>
									<a href="<?php echo base_url('service/edit/'.base64_encode($li['s_id'])); ?>"  data-toggle="tooltip" title="Edit"><i class="fa fa-edit btn btn-warning"></i></a>
									<a href="<?php echo base_url('service/delete/'.base64_encode($li['s_id'])); ?>" data-toggle="tooltip" title="Delete" class="confirmation"><i class="fa fa-trash btn btn-danger"></i></a>
								</td>								
							</tr>
						<?php } ?>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							
							<th>Name</th>
							<th>Created Date & Time</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script>
$(document).ready(function() {
      $('.confirmation').on('click', function() {
        return confirm('Are you sure?');
      });
    });
	$(function () {
	     $('#example1').DataTable( {
			"order": [[ 1, "desc" ]]
		} );
	  });
</script>