<?php
require 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
$db=DB::getInstance();
if(!pluginActive("store")){die();}
?>

<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-sm-12">
				<h1 align="center">
					Online Ordering is Closed!
				</h1>
				<h4 align="center"><?=$settings->closed_msg;?></h4>
			</div> <!-- /.col -->
						</div>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.wrapper -->


<?php //require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
