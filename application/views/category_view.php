<div class="container">
	<div class="row pencarian">
		<form action="<?php echo base_url() ?>ticket/search" method="post">
			<div class="col-md-3">
				<input type="text" placeholder="Daerah" name="alamat" class="form-control">
			</div>
			<div class="col-md-3">
				<input type="text" placeholder="Keywords" name="keyword" class="form-control">
			</div>
			<div class="col-md-3">
				<select class="form-control" id="inputtipe" name="listcategory">
					<option value="">CATEGORY</option>
					<option value="perjalanan">Perjalanan</option>
				  	<option value="pariwisata">Pariwisata</option>
				  	<option value="konser">Pertunjukan</option>
				  	<option value="pertunjukan">Konser</option>
				</select>
			</div>
			<div class="col-md-2 col-md-offset-1">
				<button class="btn btn-info pull-right pull-right">CARI</button>
			</div>
		</form>
	</div>
</div>
<div class="container-fluid view">
	<div class="row">
		<div class="col-md-3 col-md-offset-2 tampilan">
			<p class="pull-left">Tampilan</p>
			<ul class="nav nav-pills">
				<li><a href="#post-list" data-toggle="pill"><span class="glyphicon glyphicon-th-list"></span></a></li>
				<li class="active"><a href="#post-tile" data-toggle="pill"><span class="glyphicon glyphicon-th"></span></a></li>
			</ul>
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="form-group">
					<label for="inputtipe" class="col-sm-3 control-label">Urutkan</label>
					<form action="" method="post">
						<div class="col-sm-5">
							<select class="form-control" id="inputtipe" name="listfilter" onchange="buildQuery(this,this.form.type)">
								<option value="-">-</option>
								<option value="ASC">acara terbaru</option>
								<option value="DESC">acara terlama</option>
							</select>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-group" name="categoryvalue" value="<?php echo $type ?>" hidden>
							<button type="submit" class="btn btn-info">get</button>
						</div>
					</form>
				</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row ticket-persegi">
		<div class="col-md-12">
			<p>SEMARANG</p>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="post-tile">
			<?php  foreach ($h_categ->result() as $row) {?>
				<div class="col-md-3 tick-area-first">
					<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar ?>" alt="" class="img-responsive">
					<div class="judul-area">
						<p><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo substr($row->judul, 0, 14); ?></a></p>
						<small>IDR <?php echo $row->harga ?></small>
					</div>
					<div class="waktu-area">
						<p><span class="glyphicon glyphicon-time"></span> <?php echo $row->tanggal ?></p>
						<small><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row->alamat ?></small>
					</div>
				</div>
			<?php } ?>
			</div>
			<!-- <div class="col-md-3 tick-area">
				<img src="<?php echo base_url(); ?>uploads/ticket/ticket4.jpg" alt="" class="img-responsive">
				<div class="judul-area">
					<p>Tiket ke Dufan</p>
					<small>IDR 120000</small>
				</div>
				<div class="waktu-area">
					<p><span class="glyphicon glyphicon-time"></span> 12/27/2016 09</p>
					<small><span class="glyphicon glyphicon-map-marker"></span> Malang</small>
				</div>
			</div> -->

			<div class="tab-pane" id="post-list">
			<div class="col-md-12">
			<?php  foreach ($h_categ->result() as $row) {?>
				<div class="ticket-post-list">
					<div class="col-md-4">
						<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar ?>" alt="" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-7">
						<div class="judul-area-list">
							<h3><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul; ?></a></h3>
							<p>IDR <?php echo $row->harga ?></p>
						</div>
						<div class="waktu-area-list">
							<p><span class="glyphicon glyphicon-time"></span> <?php echo $row->tanggal ?></p>
							<p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row->alamat ?></p>
							<hr>
							<p><?php echo substr($row->deskripsi, 0, 175) ?></p>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			<?php } ?>
			</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function buildQuery()
{
	var loc = location.href.replace(/\\?.*$/, '') + '?';
	var a = 0, s, v;
	for (a; a < arguments.length; ++a)
	{
		s = arguments[a];
		v = s.options[s.selectedIndex].value;
		if (!v)
			return;
		else loc += ((a != 0) ? '&' : '') + s.name + '=' + v;
	}
	if (loc != '')
		self.location = loc;
}

</script>