<div class="container">
	<div class="row" style="margin-bottom: 120px; margin-top: 120px">
		<div style="width: 50%; margin: 0 auto">
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
							      <small class="help-block"><?php echo form_error('hp'); ?></small>
							    </div>
							</div>
							<div class="form-group">
							    <label for="kota" class="col-sm-5 control-label" >Kota</label>
							    <div class="col-sm-7">
							      <input type="text" id="kota" name="kota" class="form-control" required="required">
							    </div>
							</div>
							<hr>
							<button class="btn btn-info pull-right">Register</button>
						</form>
		</div>
	</div>
</div>