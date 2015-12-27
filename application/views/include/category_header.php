<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equif="X-UA-Compatible" content="IE=edge, chrome=1">
		<title><?php echo $page_title ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/category.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/fonts.css">
		
		<script src="<?php echo base_url(); ?>template/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>template/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>template/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>template/js/init.js"></script>
	</head>
	<body>
		<header style="background: #4DC2CB">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>template/img/logo-white.png" width="160px"></a></div>
					</div>

					<?php if (isset($_SESSION['is_logged_in'])): ?>
						<div class="col-md-7 user-area">
							<div class="col-sm-3 col-sm-offset-6">
								<div class="pull-right">
									<small>welcome Back</small>
									<p><?php echo $nameuser ?></p>
									<a href="<?php echo base_url() ?>Member/sellpost"class="btn btn-info">SELL</a>
								</div>
							</div>
							<div class="col-sm-2">
								<img src="<?php echo base_url() ?>uploads/users/<?php echo $h_img->gambar; ?>" alt="" class="img-responsive pull-right">
							</div>
							<div class="col-sm-1">
								<a href="<?php echo base_url(); ?>Member"><span class="glyphicon glyphicon-menu-hamburger pull-left"></span></a>
							</div>
						</div>

						<div class="col-sm-1 text-center log">
							<span class="glyphicon glyphicon-log-out"></span>
							<a href="<?php echo base_url() ?>Member/logout"><p>Logout</p></a>
						</div>
				    	<?php else: ?>
				    		<div class="col-md-4 col-md-offset-4">
							<img src="<?php echo base_url(); ?>uploads/users/default.jpg" alt="" class="pull-left col-md-3">
							<a href="<?php echo base_url(); ?>Member" class="btn btn-success">Login</a>
							<a href="<?php echo base_url(); ?>Member" class="btn btn-info">Register</a>
							</div>
					<?php endif ?>
				</div>
			</div>
		</header>