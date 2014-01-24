
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
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
	<?php $this->load->helper('url'); ?>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn" id="14" href="#" onclick="javascript:logout();">Logout</a>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<!-- <li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li> -->
						<li class="nav-header hidden-tablet">Задания</li>
						<li><a class="ajax-link" href="<?php echo site_url("index.php/teacher/assigments"); ?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> Списък</span></a></li>
						<li><a class="ajax-link" href="<?php echo site_url("index.php/teacher/addassigment"); ?>"><i class="icon-edit"></i><span class="hidden-tablet"> Добавяне</span></a></li>
						<!-- <li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			<script>
				function logout(){
					$('#logoutform').submit();

				}
			</script>
			<?php
			$attributes = array('id' => 'logoutform');
			echo form_open("index.php/users/logout",$attributes); ?>


			<?= form_close()?>
