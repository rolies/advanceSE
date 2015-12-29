<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equif="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>Home - Rpl Project</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/gradient.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/css/fonts.css">
	
	<script src="<?php base_url(); ?>template/js/jquery.min.js"></script>
	<script src="<?php base_url(); ?>template/js/bootstrap.js"></script>
	<script src="<?php base_url(); ?>template/js/parallax.js"></script>
	<script src="<?php base_url(); ?>template/js/init.js"></script>
</head>
	<body>
		<header>
			<nav class="navbar navbar-default" role = "navigation">
				<div class="container">
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<!-- Your Logo --> 
						<div class="logo"><a href="<?php base_url(); ?>"><img src="<?php echo base_url(); ?>template/img/logo-white.png" width="160px"></a></div>
						</div>
						<!-- Start Navigation -->
						<div class="collapse navbar-collapse" id="collapse" role="navigation">
							<ul class="nav navbar-nav navbar-right">
								<li><button type="button" class="btn btn-default navbar-btn" href="#modal-signup" role="button" data-toggle="modal">Register</button></li>
								<!-- <li ><button type="button" class="btn btn-link navbar-btn" >Login</button></li> -->
								<li>
									<div class="dropdown">
									  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    Login
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
									    <form action="<?php echo base_url(); ?>Welcome/login" method="POST">
											<div class="form-group">
												<input type="text" id="form-elem-1" class="form-control" placeholder="USERNAME" name="username">
												<input type="password" id="form-elem-1" class="form-control" placeholder="PASSWORD" name="password">
											</div>
											<hr>
											<button type="submit" class="btn btn-success">SIGN IN</button>
										</form>
									  </div>
									</div>
								</li>
							</ul>
						</div>
					</div>		
				</div>
			</nav>
			<div id="modal-signup" class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-body text-center">
	                    <form action="<?php echo base_url(); ?>Welcome/register" role="form" method="POST" class="form-horizontal">
	                    	<div class="form-group">
							    <label for="inputusername" class="col-sm-5 control-label">Username</label>
							    <div class="col-sm-7">
							      <input type="text" class="form-control" id="inputusername" required="required" name="username">
							    </div>
							</div>
							 <div class="form-group">
							    <label for="inputPass" class="col-sm-5 control-label" >Password</label>
							    <div class="col-sm-7">
							      <input type="password" class="form-control" id="inputPass" required="required" name="password">
							    </div>
							</div>
							<div class="form-group">
							    <label for="inputemail" class="col-sm-5 control-label" >Email</label>
							    <div class="col-sm-7">
							      <input type="email" class="form-control" id="inputemail" name="email" required="required">
							    </div>
							</div>
							<div class="form-group">
							    <label for="inputhp" class="col-sm-5 control-label" >Hp</label>
							    <div class="col-sm-7">
							      <input type="text" class="form-control" id="inputhp" required="required" name="hp">
							    </div>
							</div>
							<div class="form-group">
							    <label for="kota" class="col-sm-5 control-label" >Kota</label>
							    <div class="col-sm-7">
							      <input type="text" id="kota" name="kota" class="form-control" required="required">
							    </div>
							</div>
							<hr width="60%">
							<button class="btn btn-info">Register</button>
						</form>
						
	                </div>
	            </div>
	        </div>
	    </div>
		</header>