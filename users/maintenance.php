<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';

//if (!securePage($_SERVER['PHP_SELF'])){die();}

$settingsQ = $db->query("SELECT * FROM settings");
$settings = $settingsQ->first();

?><br><div class="jumbotron">
<div id="page-wrapper">
<div class="container">
<div class="row">
	<div class="col-sm-12">
				<h1 align="center" style="font-size: 80px; color: #FFD700; text-align:center"><i class="fa fa-frown-o fa-2x"></i></h1>
				    <h3 align="center"><?=lang("MAINT_HEAD");?></h3>
				        <p align="center"><?=lang("MAINT_MSG")?></p>
				        <p align="center">-<?=$settings->site_name?></p>
		</div>
	</div>
</div>
</div></div>

<?php require_once $abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'/container_close.php'; //custom template container ?>
<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'/footer.php'; //custom template footer?>