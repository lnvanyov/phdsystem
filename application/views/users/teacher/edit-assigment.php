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
				<h2><i class="icon-picture"></i>Edit assigment</h2>
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
				<?php echo form_open("index.php/teacher/updateassigment", array('class' => 'form-horizontal')); ?>
					<?php echo validation_errors('<p class="error" style="color:red;">'); ?>
					<input type="hidden" name="id" value="<?php echo $assigment->id ?>" />
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="title">Assigment title </label>
							<div class="controls">
								<input type="text" name="title" value="<?php echo $assigment->title ?>" class="span6 typeahead" id="title" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="textarea2">Assigment description</label>
							<div class="controls">
								<textarea class="cleditor" name="description" id="textarea2" rows="3"><?php echo $assigment->description ?></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="status">Assigment status </label>
							<div class="controls">
								<select name="status" id="status">
									<option value="0"<?php if($assigment->status == 0) echo ' selected="selected"'?>>Not approved</option>
									<option value="1"<?php if($assigment->status == 1) echo ' selected="selected"'?>>Approved with notices</option>
									<option value="2"<?php if($assigment->status == 2) echo ' selected="selected"'?>>Approved</option>
								</select>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn">Cancel</button>
						</div>
					</fieldset>
				<?php echo form_close(); ?>
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
