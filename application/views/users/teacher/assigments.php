<div id="content" class="span10">
	<!-- content starts -->
	<div>
		<ul class="breadcrumb">
			<?php foreach ($breadcrumbs as $label => $link): ?>
			<?php if (!$link) $link = '#'; ?>
			<li>
				<a href="<?php echo $link ?>"><?php echo $label ?></a>
				<?php if ($link != '#'): ?><span class="divider">/</span><?php endif ?>
			</li>	
			<?php endforeach ?>
		</ul>
	</div>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-picture"></i>All assigments</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<?php if ($this->session->flashdata('success')): ?>
					<p style="color:green">
						<?php echo $this->session->flashdata('success'); ?>
					</p>
				<?php endif ?>
				<?php if (count($assigments)): ?>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Title</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>   
					<tbody>
						<?php foreach ($assigments as $assigment): ?>
					    <tr>
				            <td><?php echo $assigment['title'] ?></td>
				            <td class="center">
				            	<?php if ($assigment['status'] == 0): ?>
			                    <span class="label label-important">Not approved</span>
			                	<?php elseif($assigment['status'] == 1): ?>
			                    <span class="label label-important">Approved with notices</span>
			                	<?php elseif($assigment['status'] == 2): ?>
			                    <span class="label label-success">Approved</span>
				            	<?php endif ?>
				            </td>
				            <td class="center">
			                    <a class="btn btn-info" href="<?php echo site_url('index.php/teacher/editassigment/'.$assigment['id']) ?>">
		                            <i class="icon-edit icon-white"></i>Edit                                            
			                    </a>
			                    <a class="btn btn-danger" href="<?php echo site_url('index.php/teacher/deleteassigment/'.$assigment['id']) ?>">
		                            <i class="icon-trash icon-white"></i>Delete
			                    </a>
				            </td>
					    </tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<?php else: ?>
				<?php endif ?>
			</div>
		</div><!--/span-->
	
	</div><!--/row-->

</div><!--/#content.span10-->

<hr>

<div class="modal hide fade" id="myModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Settings</h3>
	</div>
	<div class="modal-body">
		<p>Here settings can be configured...</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>
</div>
