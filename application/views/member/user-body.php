

<div class="container">
	<div class="row">
		<div class="col-md-4 member-area">
			<img src="<?php echo base_url(); ?>uploads/users/<?php echo $h_img->gambar; ?>" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p><?php echo $name; ?> <a href="<?php echo base_url();?>Member/edit_profil" data-toggle="tooltip" data-placement="right" title="Edit Profil"><span class="glyphicon glyphicon-edit"></span></a></p>
				<a href="<?php echo base_url();?>Member/sellpost" class="btn btn-danger ">SELL </a>
			</div>

			<div class="my-selling">
				<div class=" ticket">
					<h5> My Ticket Selling</h5>
				</div>
				<div class="row">
				
				<?php if ($h_satu->num_rows() > 0): ?>
				<?php  foreach ($h_satu->result() as $row) {?>
					<div class="col-md-5">
						<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar;?>" class="pull-left img-responsive">
					</div>

					<div class="curr-sell-small">
						<strong><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul;?></a></strong>
						<p class="harga"> IDR <?php echo $row->harga;?> </p>
						<?php if ($row->status == 'active'): ?>
							<a href="#" class="btn btn-warning ">No Reserved </a>
						<?php else: ?>
							<a href="#" class="btn btn-info">Reserved</a>
						<?php endif ?>
					</div>
					<?php } ?>
				<?php else: ?>
					<p style="margin-left: 15px; color: #8FB94B">Anda tidak memiliki post ticket active</p>
				<?php endif ?>
					
				</div>
			</div>
			<div class="my-reserve">
				<div class="ticket">
					<h5> My Ticket Reservation</h5>
				</div>
				<div class="container-fluid">
				<div class="row">
				<?php if (!$h_reserved_satu): ?>
					<p style="color: #8FB94B"><?php echo "Anda belum melakukan reservasi"; ?></p>
					<?php else: ?>
					<div class="col-md-6 curr-res-small reserve-area">
						<h5> <?php echo "$h_reserved_satu->judul"; ?> </h5>
						<p>Owner: <?php echo "$h_reserved_satu->user"; ?></p>
					</div>
					<div class="col-md-5 reserve-area">
						<p>IDR <?php echo "$h_reserved_satu->harga"; ?></p>
						<form action="<?php echo base_url(); ?>Member/cancel_reserve" method="POST">	
							<input type="text" value="<?php echo $h_reserved_satu->keterangan?>" name="user_reserve" hidden>				
							<input type="text" value="<?php echo $h_reserved_satu->number?>" name="nomerpost" hidden>
							<button type="submit" class="btn btn-warning">Cancel Reservation</button>
						</form>
					</div>
				<?php endif ?>
				</div>
				</div>
			</div>
		</div>
				
		<div class="col-md-7 col-md-offset-1">
			<ul class="nav nav-pills">
			  <li class="active" class="absolute-li"><a href="#notifikasi" data-toggle="pill">Notifikasi <div class="notif"> 1</div></a></li>
			  <li><a href="#allpost" data-toggle="pill">Semua Post</a></li>
			  <li><a href="#allreserve" data-toggle="pill">Semua Reservasi</a></li>
			  <li class="logout pull-right text-center"><a href="<?php echo base_url(); ?>Member/logout" class="logout-link"><span class="glyphicon glyphicon-log-out"></span><br>Logout</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane" id="allpost">
				  	<!-- Active ticket -->
					<?php if ($h->num_rows() > 0): ?>
				  	<?php  foreach ($h->result() as $row) {?>
				  	<div class="active-ticket">
				  		<div class="col-md-6 img-area">
							<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar;?>" width="120px" class="pull-left img-responsive" alt="No image">
						            <strong><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul;?></a></strong>
						            <p class="harga">IDR <?php echo $row->harga;?></p>  
							<div class="info-small">
								<small>Tiket : <?php echo $row->tipe;?></small>
								<?php if ($row->status == 'active'): ?>
									<a href="#" class="btn btn-success">No reserve</a>
								<?php else: ?>
									<a href="#" class="btn btn-info">Reserved</a>
								<?php endif ?>
								
							</div>

						</div>
						<div class="col-md-3">
							<p> <?php echo $row->alamat;?></p>
						</div>
						<div class="col-md-3">
							<a href="<?php echo base_url() ?>Member/editpost/<?php echo $row->number; ?>" class="btn btn-info"> Edit </a>	
							<form action="<?php echo base_url(); ?>Member/mark_sold" method="POST">					
								<input type="text" value="<?php echo $row->number?>" name="nomerpost" hidden>
								<button type="submit" class="btn btn-link">mark sold</button>
							</form>
						</div>
					</div>
					<div class="line-white"></div>
					<?php } ?>
					<?php else: ?>
						<p style="margin-left: 15px; color: #8FB94B">Anda tidak memiliki post ticket active</p>
					<?php endif ?>
					<!-- Active ticket end -->
					<div class="list-ticket">
						<?php  foreach ($h_deactived->result() as $row) {?>
						<hr>
						<div class="col-md-2">
							<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar;?>" class="pull-left img-responsive">
						</div>
						<div class="info-small">
							<h5><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul;?></a></h5>
							<small>IDR <?php echo $row->harga;?> sampingnya gk keliatan bos</small><br>
							<?php if ($row->status == 'deactived'): ?>
								<a href="#" class="btn btn-danger">deactived</a><small> *<?php echo $row->keterangan;?></small>
							<?php else: ?>
									<a href="#" class="btn btn-info">sold</a>
							<?php endif ?>
						</div>
						<?php } ?>
					</div>
				</div>

				<div class="tab-pane" id="allreserve">
					<div class="row">
						<?php if ($h_reserved->num_rows() > 0): ?>
							<?php  foreach ($h_reserved->result() as $row) {?>
							<?php $today = date("Y-m-d H:i:s");
								$date = $row->tanggal;
								if ($today < $date) { ?>
									<div class="col-md-4">
										<div class="reserved-area active">
											<h5><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul; ?></a></h5>
											<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar;?>" alt="ticket-reserve" class="img-responsive img-thumbnail">
											<h5>Owner : <?php echo $row->user;?> <br><small><?php echo $row->harga;?></small></h5>
										</div>
									</div>
								<?php } else{ ?>
									<div class="col-md-4">
										<div class="reserved-area">
											<h5><a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>"><?php echo $row->judul; ?></a></h5>
											<img src="<?php echo base_url(); ?>uploads/ticket/<?php echo $row->gambar;?>" alt="ticket-reserve" class="img-responsive img-thumbnail">
											<h5>Owner : <?php echo $row->user;?> <br><small><?php echo $row->harga;?></small></h5>
										</div>
									</div>
								<?php } ?>
							<?php } ?>
						<?php else: ?>
							<p style="margin-left: 15px; color: #8FB94B">Anda belum melakukan Reservasi</p>
						<?php endif ?>
					<!-- 	<div class="col-md-4">
							<div class="reserved-area">
								<h5><a href="#">Tiket pariwisata Bali</a></h5>
								<img src="./uploads/ticket/ticket2.jpg" alt="ticket-reserve" class="img-responsive img-thumbnail">
								<h5>Owner : Youngky <br><small>IDR 220.000</small></h5>
							</div>
						</div>
						<div class="col-md-4">
							<div class="reserved-area">
								<h5><a href="#">Tiket konser Iwan fals</a></h5>
								<img src="./uploads/ticket/ticket1.jpg" alt="ticket-reserve" class="img-responsive img-thumbnail">
								<h5>Owner : Brolin <br><small>IDR 200.000</small></h5>
							</div>
						</div> -->
					</div>
				</div>
				<div class="tab-pane  active" id="notifikasi">

				<?php  foreach ($h_all_post->result() as $row) {?>
				<?php if ($row->status == 'deactived'): ?>
					<p class="deactived"><?php echo $row->keterangan ?> >>
					<a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>">lihat ke post</a>
					</p>
				<?php endif ?>

				<?php if ($row->status == 'reserved'): ?>
					<p class="reserved"><?php echo $row->keterangan ?> reserve ticket Anda >>
					<a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>">lihat ke post</a>
					</p>
				<?php endif ?>
				<?php } ?>
				
				<hr>
				<h3>Tiket Terjual</h3>
				<?php  foreach ($h_all_post->result() as $row) {?>
				<?php if ($row->status == 'sold'): ?>
					<p class="reserved"><?php echo $row->judul ?></p>
				<?php endif ?>

				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>	
<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<!-- http://www.formget.com/codeigniter-upload-image/ -->