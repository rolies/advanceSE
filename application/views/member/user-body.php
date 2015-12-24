

<div class="container">
	<div class="row">
		<div class="col-md-4 member-area">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p><?php echo $name; ?></p>
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
						<img src="<?php echo base_url(); ?>template/img/<?php echo $row->gambar;?>" class="pull-left img-responsive">
					</div>

					<div class="curr-sell-small">
						<strong><?php echo $row->judul;?></strong>
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
				
		<div class="col-md-7 col-md-offset-1">
			<ul class="nav nav-pills">
			  <li class="active"><a href="#notifikasi" data-toggle="pill" `>Notifikasi</a></li>
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
							<img src="<?php echo base_url(); ?>template/img/<?php echo $row->gambar;?>" width="120px" class="pull-left img-responsive" alt="No image">
						            <strong><?php echo $row->judul;?></strong>
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
							<a href="#" class="btn btn-info"> Edit </a>
							<a href="#" class="btn btn-link">mark sold</a>
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
							<h5><?php echo $row->judul;?></h5>
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
						<div class="col-md-4">
							<div class="reserved-area active">
								<h5><a href="#">Tiket berlibur Bromo</a></h5>
								<img src="./uploads/ticket/ticket1.jpg" alt="ticket-reserve" class="img-responsive img-thumbnail">
								<h5>Owner : Brolin <br><small>IDR 200.000</small></h5>
							</div>
						</div>
						<div class="col-md-4">
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
						</div>
					</div>
				</div>
				<div class="tab-pane  active" id="notifikasi">
					<p>Brolin reserve ticket (judul ticket)	</p>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- http://www.formget.com/codeigniter-upload-image/ -->



