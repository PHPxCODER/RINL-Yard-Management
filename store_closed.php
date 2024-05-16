<?php
require 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
$db=DB::getInstance();
if(!pluginActive("store")){die();}
?>
<style>h4{color:#000;}</style>
<br><div class="jumbotron">
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-sm-12">
			<h1 align="center" style="font-size: 80px; color: #FFD700; text-align:center"><i class="fa fa-frown-o fa-2x"></i></h1>
				<h2 align="center">
					Store is Closed!
				</h2>
				<p align="center">Sorry for the Inconvenience but we are closed right now.
				<br>Please come back later.</p>
				<p align="center"><a href="store">Click Here</a> to check the Store is Online.</p>
				<h4 align="center"><?=$settings->closed_msg;?></h4>
				<p align="center">-<?=$settings->site_name?></p>
			</div> <!-- /.col -->
						</div>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.wrapper -->
</div> <!-- /.jumbotron -->


<?php //require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
