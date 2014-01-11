
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Welcome to PhD automated system</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="<?= $url?>public/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?= $url?>public/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?= $url?>public/css/charisma-app.css" rel="stylesheet">
	<link href="<?= $url?>public/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?= $url?>public/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?= $url?>public/css/chosen.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/uniform.default.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/colorbox.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/opa-icons.css' rel='stylesheet'>
	<link href='<?= $url?>public/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to PhD automated system</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please fill following fields
					</div>
					<?php echo form_open("index.php/users/registrationcont"); ?>
					<?php echo validation_errors('<p class="error" style="color:red;">'); ?>
						<fieldset>
							<div class="control-group">
								<label class="control-label">User role:</label>
								<div class="controls">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="role" id="optionsRadios1" value="2" checked="" style="opacity: 0;"></span></div>
									Student
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span class=""><input type="radio" name="role" id="optionsRadios2" value="3" style="opacity: 0;"></span></div>
									PhD
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span class=""><input type="radio" name="role" id="optionsRadios2" value="4" style="opacity: 0;"></span></div>
									Teacher
								  </label>
								</div>
							  </div>
							
							
							<div class="control-group">
								<label class="control-label" for="firstname">First name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="First name" name="firstname" value="<? isset($_POST['firstname'])?$_POST['firstname']: ''?>">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="lastname">Last name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Last name" name="lastname" value="<? isset($_POST['lastname'])?$_POST['lastname']: ''?>">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="specialty">Specialty</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Specialty" name="specialty" value="<? isset($_POST['specialty'])?$_POST['specialty']: ''?>">
								</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="email_address">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Email" name="email_address" value="<? isset($_POST['email_address'])?$_POST['email_address']: ''?>">
								</div>
							  </div>
							
							<div class="control-group">
								<label class="control-label" for="username">Username</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Username" name="username" value="<? isset($_POST['username'])?$_POST['username']: ''?>">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="password">Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Password" name="password" >
								</div>
							  </div>
							
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Register</button>
							</p>
							
						</fieldset>
					<?php echo form_close(); ?>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?= $url?>public/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?= $url?>public/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?= $url?>public/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?= $url?>public/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?= $url?>public/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?= $url?>public/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?= $url?>public/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?= $url?>public/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?= $url?>public/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?= $url?>public/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?= $url?>public/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?= $url?>public/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?= $url?>public/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?= $url?>public/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?= $url?>public/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?= $url?>public/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?= $url?>public/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?= $url?>public/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?= $url?>public/js/excanvas.js"></script>
	<script src="<?= $url?>public/js/jquery.flot.min.js"></script>
	<script src="<?= $url?>public/js/jquery.flot.pie.min.js"></script>
	<script src="<?= $url?>public/js/jquery.flot.stack.js"></script>
	<script src="<?= $url?>public/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?= $url?>public/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?= $url?>public/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?= $url?>public/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?= $url?>public/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?= $url?>public/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?= $url?>public/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?= $url?>public/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?= $url?>public/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?= $url?>public/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?= $url?>public/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?= $url?>public/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?= $url?>public/js/charisma.js"></script>
	
		
</body>
</html>
