

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p> Brolin </p>
				<a href="<?php echo base_url()?>Member" class="btn btn-success">Dashboard</a>
			</div>
			<div class="my-selling">
				<div class=" ticket">
					<h5> My Ticket Selling</h5>
				</div>
				<div class="row">
					<div class="col-md-5">
						<img src="<?php echo base_url(); ?>template/img/ticket1.jpg" class="pull-left img-responsive">
					</div>
					<div class="curr-sell-small">
						<strong> Bon Jovi </strong>
						<p class="harga"> IDR 120.000 </p>
						<a href="#" class="btn btn-warning ">Reserved </a>
						
					</div>
				</div>
			</div>
			<div class="my-reserve">
				<div class="ticket">
					<h5> My Ticket Reservation</h5>
				</div>
				<div class="row">
					<div class="col-md-5 curr-res-small">
						<h5> Trip ke Bromo </h5>
						<p> IDR 120.000 </p>
						<a href="#" class="btn btn-warning btn-sm">Cancel </a>
					</div>
					<div class="col-md-7">
						<p> IDR 120.000 </p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-7 sellpost col-md-offset-1">
			<form action=" " role="form" method="POST" class="form-horizontal">
				<div class="form-group">
					<label for="inputtipe" class="col-sm-2 control-label">Tipe</label>
					<div class="col-sm-10">
					   	<select class="form-control" id="inputtipe" name="tipe">
					  		<option value="Perjalanan">Perjalanan</option>
						  	<option value="Pariwisata">Pariwisata</option>
						  	<option value="Konser">Konser</option>
						  	<option value="Pertunjukan">Pertunjukan</option>
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
					<label for="inputkota" class="col-sm-2 control-label">Kota</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputkota" name="kota">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputdes" class="col-sm-2 control-label">Deskripsi</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="inputdes" name="deskripsi"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputgambar" class="col-sm-2 control-label">Gambar</label>
					<div class="col-sm-10">
					   	<input type="file" id="inputgambar" name="picture" >
					</div>
		  		</div>
			  	<hr>
			    <button class="btn btn-default btn-lg">Terbitkan</button>
			</form>
		</div>
	</div>
</div>