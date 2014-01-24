<div id="content" class="span10">
  <div class="row-fluid sortable">		
    <div class="box span12">
    <div class="box-header well" data-original-title>
      <h2><i class="icon-tasks"></i> Users</h2>
      <div class="box-icon">
  
      </div>
    </div>
    <div class="box-content">
    <table class="table table-bordered table-striped table-condensed">
		<thead>
		  <th>Users</th>
		  <th>Mail</th>
		  <th>Role</th>
		  <th>Status</th>
		  <th>Actions</th>
		</tr>
		</thead>   
		<tbody>
		<?php foreach ($arrUsers as $key=>$row) {?>
			<tr>
				<td><?= $row->users_firstname.$row->users_lastname?></td>
				<td class="center"><?= $row->users_email?></td>
				<td class="center">
				<? 
					if($row->users_role==2){
						echo "Student";
					}elseif($row->users_role==3){
						echo "PhD";
					}else{
						echo "Teacher";
					}
				?>
				</td>
				<td class="center">
					<?
					 if($row->users_active==0){
						 echo '<span class="icon icon-color icon-close"/>';
					 }else{
						 echo '<span class="icon icon-color icon-check"/>';
					 }
					 
					 ?>
				 </td>
				<td class="center">
					<a class="btn btn-success btn-view"  href="#" onclick="document.getElementById('activate<?=$row->users_id?>').submit();">
						<i class="icon-zoom-in icon-white"></i>  
						Activate                                            
					</a>
					<a class="btn btn-danger" href="#" onclick="document.getElementById('delform<?=$row->users_id?>').submit();">
						<i class="icon-trash icon-white"></i> 
						Delete
					</a>
				</td>
			</tr>
		   
			<?php $id = array('id' => 'delform'.$row->users_id); echo form_open("index.php/admin/deleteUser",$id); ?>
				<input type="hidden" name="id" value="<?= $row->users_id?>" />
			<?php echo form_close(); ?>
			
			<?php $id = array('id' => 'activate'.$row->users_id); echo form_open("index.php/admin/activateUser",$id); ?>
				<input type="hidden" name="id" value="<?= $row->users_id?>" />
			<?php echo form_close(); ?>
			</div>       
		<?}?>
		</tbody>
    </table>  

  </div>
</div>
