<div class="container">
	<div class="row">
		<div class="col-md-4 member-area">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p><?php echo $name; ?></p>
				<a href="<?php echo base_url();?>Member/sellpost" class="btn btn-danger ">SELL </a>
			</div>

			<div class="my-reserve">
				<a href="<?php echo base_url();?>Member" class="btn btn-info">Back to Dashboard</a>
			</div>
		</div>
		<div class="col-md-8 edit-prof">
			<div class="col-md-6 edit-hp">
				<form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">
				<div class="form-group">
					<label for="inputhrg" class="col-sm-2 control-label">Hp</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputhrg" name="hp">
					</div>
				</div>
				<div class="form-group">
					<label for="inputkota" class="col-sm-2 control-label">Kota</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputkota" name="kota">
					</div>
				</div>
				<div class="form-group">
					<label for="inputgambar" class="col-sm-2 control-label">Gambar</label>
					<div class="col-sm-10">
					   	<input type="file" id="inputgambar" name="gambar-profil">
					</div>
		  		</div>
			  	<hr>
			    <button class="btn btn-default btn-lg">Update</button>
			</form>
			</div>

			<div class="col-md-6 edit-password">
				<form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">
					<div class="form-group">
						<label for="inputhrg" class="col-sm-4 control-label">Pass lama</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="inputoldpass" name="old-pass">
						</div>
					</div>
					<div class="form-group">
						<label for="inputkota" class="col-sm-4 control-label">Pass baru</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="inputnewpass" name="new-pass">
						</div>
					</div>
					<div class="form-group">
						<label for="inputkota" class="col-sm-4 control-label">Re-type</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="inputretype" name="re-pass">
						</div>
					</div>

				  	<hr>
				    <button class="btn btn-default btn-lg">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>	