

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
			<form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">
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
					<label for="dtp_input1" class="col-md-2 control-label">Tanggal & waktu</label>

					<div class="col-sm-10">
					    <div class="input-group date form_datetime col-md-6" data-date="2015-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
		                    <input class="form-control" size="18" type="text" value="" readonly name="tanggal">
		                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		                </div>
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
						<input type="text" class="form-control" id="inputkota" name="alamat">
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
					   	<input type="file" id="inputgambar" name="gambar-ticket">
					</div>
		  		</div>
			  	<hr>
			    <button class="btn btn-default btn-lg">Terbitkan</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 0,
        pickerPosition: "bottom-left"
    });
	
</script>