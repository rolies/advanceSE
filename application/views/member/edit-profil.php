
		
		<div class="col-md-8 text-center">
			<a href="<?php echo base_url(); ?>Member" class="btn btn-success btn-lg" style="border-radius: 0">Back to Dashboard</a>
		</div>
		<div class="col-md-8 edit-prof" style="padding-top: 7%; background: #dedede; margin-top: 2%">
			<div class="col-md-6 edit-hp">
				<form action="<?php echo base_url();?>Member/editmember" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">
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
					<!-- <div class="form-group">
						<label for="inputkota" class="col-sm-4 control-label">Re-type</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="inputretype" name="re-pass">
						</div>
					</div> -->

				  	<hr>
				    <button class="btn btn-default btn-lg">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>	