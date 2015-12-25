
<div class="container">
	<div class="row breadcumb-header">
    <?php if (isset($_SESSION['is_logged_in'])): ?>
		<div class="col-md-4 user-ticket">
		<img src="<?php echo base_url(); ?>template/img/user1.jpg" alt="" class="pull-left col-md-4">
		<p><?php echo "$detail_ticket->user"; ?></p>
		<a href="<?php echo base_url(); ?>Member" class="btn btn-danger">Dashboard</a>
		</div>
    	<?php else: ?>
    		<div class="col-md-3 default-ticket">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" alt="" class="pull-left col-md-5">
			<a href="<?php echo base_url(); ?>Member" class="btn btn-success">Login</a>
			<a href="<?php echo base_url(); ?>Member" class="btn btn-link">Register</a>
			</div>
	<?php endif ?>
		<div class="col-md-12 ">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
			 	<li><a href="<?php echo base_url(); ?>">Home</a></li>
			  	<li><a href="#">Pariwisata</a></li>
			  	<li class="active"><?php echo "$detail_ticket->judul"; ?></li>
			  	<p class="pull-right"><a href="#" class="btn btn-info">Pencarian</a></p>
			</ol>
		</div>
	</div>
</div>

<div class="container">
	<div class="row detail-main">
		<div class="col-md-7">
			<h2><?php echo "$detail_ticket->judul"; ?></h2>
			<p><span class="glyphicon glyphicon-calendar"></span> <?php echo "$detail_ticket->tanggal"; ?></p>
			<img width="100%" src="<?php echo base_url(); ?>uploads/ticket/<?php echo "$detail_ticket->gambar"; ?>" alt="Gambar Ticket detail">
		</div>
		<div class="col-md-5 detail-deskrip">
			<h3>IDR <?php echo "$detail_ticket->harga"; ?></h3>
			<img src="<?php echo base_url(); ?>template/img/user1.jpg" alt="User img not found" width="23%" class="pull-left">
			<strong><?php echo "$detail_ticket->user"; ?></strong>
			<small>Member sejak : <?php echo "$detail_ticket_user->regdate"; ?></small>
			<p class="nohp"><?php echo "$detail_ticket_user->hp"; ?><span class="pull-right">Perlihatkan</span></p>
			<p class="deskripsi"><?php echo "$detail_ticket->deskripsi"; ?></p>
			<a href="" class="btn btn-info">Reserve</a>
		</div>
	</div>
</div>