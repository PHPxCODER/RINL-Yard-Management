<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="<?=$html_lang ?>">
<head>
	<link rel="shortcut icon" href="<?=$us_url_root?>favicon.ico">
	<?php
	if(file_exists($abs_us_root.$us_url_root.'usersc/includes/head_tags.php')){
		require_once $abs_us_root.$us_url_root.'usersc/includes/head_tags.php';
	}

	?>
	<script src="<?=$us_url_root?>users/js/messages.js"></script>
	<title><?= (($pageTitle != '') ? $pageTitle : ''); ?> <?=$settings->site_name?></title>
	<div class="bg"></div>
    <style media="screen">
	.bg {
    display: block;
    position: fixed;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    background: url('<?=$us_url_root?>users/images/bg.svg') transparent;
    background-size: auto 100%;
    z-index: -1;
}
    </style>