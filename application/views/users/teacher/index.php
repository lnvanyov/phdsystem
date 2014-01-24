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
				<h2><i class="icon-picture"></i>Blank</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				
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
