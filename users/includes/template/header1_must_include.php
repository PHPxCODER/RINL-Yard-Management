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
    <style media="screen">
    body{background: url('<?=$us_url_root?>users/images/bg.svg') center center;
              -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}
    </style>