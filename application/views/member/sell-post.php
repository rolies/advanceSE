

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p> Brolin </p>
				<a href="#" class="btn btn-danger ">SELL </a>
			</div>
		</div>
		
		<div class="col-md-8 sellpost">
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputtipe" class="col-sm-2 control-label">Tipe</label>
					<div class="col-sm-10">
					   	<select class="form-control" id="inputtipe" name="tipe">
					  		<option value="Government">Government</option>
						  	<option value="Infrastructure">Infrastructure</option>
						  	<option value="Economy">Economy</option>
						  	<option value="Tourism">Tourism</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputjudul" class="col-sm-2 control-label">Judul</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputjudul" name="judul">
					</div>
				</div>

				<div class="form-group">
					<label for="inputtgl" class="col-sm-2 control-label">Tanggal</label>
					<div class="col-sm-10">
					    <select class="form-control" id="inputtgl" name="tanggal">
						  	<option value="Complain">Komplain</option>
						 	<option value="Review">Review</option>
						  	<option value="Update">Update</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputhrg" class="col-sm-2 control-label">Harga</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputhrg" name="harga">
					</div>
				</div>
				
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
					   	<hr>
					    <button class="btn btn-default btn-lg">Terbitkan</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>