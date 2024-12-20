<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
	include "../usersc/plugins/store/plugin_info.php";
	pluginActive($plugin_name);
	if (!empty($_POST['plugin_store'])) {
		$token = $_POST['csrf'];
		if (!Token::check($token)) {
			include($abs_us_root . $us_url_root . 'usersc/scripts/token_error.php');
		}
		// Redirect::to('admin.php?err=I+agree!!!');
	}
	$token = Token::generate();
	?>
  <div class="content mt-3">
  	<?php
		$open = Input::get('open');

		if (is_numeric($open)) {
			if ($open == 1) {
				$db->update('settings', 1, ['open' => 1]);
				Redirect::to('?view=plugins_config&plugin=store&open=x');
			}

			if ($open == 0) {
				$db->update('settings', 1, ['open' => 0]);
				Redirect::to('?view=plugins_config&plugin=store&open=x');
			}
		}
		$settings = $db->query("SELECT * FROM settings")->first();
		?>
<br><div class="jumbotron">
  	<div id="page-wrapper">
  		<div class="container>
  			<!-- Page Heading -->
  			<div class="row">
  				<div class="col-sm-12">
  					<h1 class="page-header">
  						The Control Panel
  					</h1>
  					<h4><font color="#000">The store is </font><?php if ($settings->open == 1) { ?>
  							<font color="green">OPEN</font>
  						<?php
										} else {
							?>
  							<font color="red">CLOSED</font>
  						<?php } ?>
  					</h4>
  				</div> <!-- /.col -->
  			</div> <!-- /.row -->
  			<div class="row">
  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/view_orders.php">
  							<h3 align="center"><i class="fa fa-usd fa-2x"></i></h3>
  							<h3 align="center">View</h3>
  							<h3 align="center">Orders</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/categories.php">
  							<h3 align="center"><i class="fa fa-list-alt fa-2x"></i></h3>
  							<h3 align="center">Manage</h3>
  							<h3 align="center">Categories</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/manage_inventory.php">
  							<h3 align="center"><i class="fa fa-pie-chart fa-2x"></i></h3>
  							<h3 align="center">Manage</h3>
  							<h3 align="center">Inventory</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/inventory.php">
  							<h3 align="center"><i class="fa fa-list fa-2x"></i></h3>
  							<h3 align="center">View</h3>
  							<h3 align="center">Inventory</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->


  				<?php if ($settings->open == 1) { ?>
  					<!-- Panel -->
  					<div class="col-6 col-sm-4 col-md-3">
  						<div class="card">
  							<a href="<?= $us_url_root ?>cpanel?view=plugins_config&plugin=store&open=0">
  								<h3 align="center"><i class="fa fa-bell-slash fa-2x"></i></h3>
  								<h3 align="center">Close</h3>
  								<h3 align="center">Store</h3>
  						</div>
  						</a>
  					</div>
  					<!-- End Panel -->
  				<?php } else { ?>
  					<!-- Panel -->
  					<div class="col-6 col-sm-4 col-md-3">
  						<div class="card">
  							<a href="<?= $us_url_root ?>cpanel?view=plugins_config&plugin=store&open=1">
  								<h3 align="center"><i class="fa fa-bell fa-2x"></i></h3>
  								<h3 align="center">Open</h3>
  								<h3 align="center">Store</h3>
  						</div>
  						</a>
  					</div>
  					<!-- End Panel -->
  				<?php } ?>

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/store_closed_msg.php">
  							<h3 align="center"><i class="fa fa-ban fa-2x"></i></h3>
  							<h3 align="center">Store</h3>
  							<h3 align="center">Closing</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/abandoned.php">
  							<h3 align="center"><i class="fa fa-frown-o fa-2x"></i></h3>
  							<h3 align="center">Incomplete</h3>
  							<h3 align="center">Orders</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/system_messages.php">
  							<h3 align="center"><i class="fa fa-envelope fa-2x"></i></h3>
  							<h3 align="center">Emails &</h3>
  							<h3 align="center">Messages</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->

  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/search_orders.php">
  							<h3 align="center"><i class="fa fa-search fa-2x"></i></h3>
  							<h3 align="center">Search</h3>
  							<h3 align="center">Orders</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->
  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/settings.php">
  							<h3 align="center"><i class="fa fa-gear fa-2x"></i></h3>
  							<h3 align="center">Important</h3>
  							<h3 align="center">Settings</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->
  				<!-- Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						<a href="<?= $us_url_root ?>cpanel/documentation.php">
  							<h3 align="center"><i class="fa fa-book fa-2x"></i></h3>
  							<h3 align="center">Important</h3>
  							<h3 align="center">Documentation</h3>
  					</div>
  					</a>
  				</div>
  				<!-- End Panel -->
  				<div class="col-6 col-sm-4 col-md-3">
  					<div class="card">
  						Useful Links
  						<?php
							if (file_exists($abs_us_root . $us_url_root . 'store.php')) { ?>
  							<a href="<?= $us_url_root ?>store">Visit Store</a>
  						<?php } ?>
  						<?php
							if (file_exists($abs_us_root . $us_url_root . 'cart.php')) { ?>
  							<a href="<?= $us_url_root ?>cart">Visit Cart</a>
  						<?php } ?>

  					</div>

  				</div>

  			</div></div></div>
			  <?php require_once $abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'/container_close.php'; //custom template container ?>

<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'/footer.php'; //custom template footer?>