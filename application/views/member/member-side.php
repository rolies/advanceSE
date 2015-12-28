

<div class="container">
	<div class="row">
		<div class="col-md-4 member-area">
			<img src="<?php echo base_url(); ?>uploads/users/<?php echo $h_img->gambar; ?>" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p><?php echo $name ?> <a href="<?php echo base_url();?>Member/edit_profil" data-toggle="tooltip" data-placement="right" title="Edit Profil"><span class="glyphicon glyphicon-edit"></span></a></p>
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
					<?php  foreach ($h_reserved_satu->result() as $row) {?>
					<?php $today = date("Y-m-d H:i:s");
					$date = $row->tanggal; ?>
					<?php if ($today < $date) : ?>
						<div class="col-md-6 curr-res-small reserve-area">
							<h5> <?php echo "$row->judul"; ?> </h5>
							<p>Owner: <?php echo "$row->user"; ?></p>
						</div>
						<div class="col-md-5 reserve-area">
							<p>IDR <?php echo "$row->harga"; ?></p>
							<form action="<?php echo base_url(); ?>Member/cancel_reserve" method="POST">	
								<input type="text" value="<?php echo $row->keterangan?>" name="user_reserve" hidden>				
								<input type="text" value="<?php echo $row->number?>" name="nomerpost" hidden>
								<button type="submit" class="btn btn-warning">Cancel Reservation</button>
							</form>
						</div>
					<?php else: ?>
						
					<?php endif ?>
					<?php } ?>
				<?php endif ?>
				</div>
				</div>
			</div>
		</div>