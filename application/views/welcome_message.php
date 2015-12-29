<section class="home" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>template/img/header.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-hero">
				<div class="hero-text">
					<h1>NO MORE WASTE ... </h1>
					<p>Tidak dapat menghadiri acara darti ticket yang anda beli ?  </p>
					<p> Posting saja di web kami. jutaan orang yang membutuhkan diluar sana 
					akan mudah untuk menemukannya </p>
				</div>
				<a href="#" class="btn btn-info btn-lg">CARA KERJA </a>
				<div class="cari">
					<h2> CARI </h2>
					<form action="<?php echo base_url(); ?>Ticket/search" method="post" class="form-inline">
						<div class="form-group">
							<input type="text" class="form-control" name="search-hero">
						</div>
						<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</div>
		</div> 
	</div>
</section>
<div class="container-fluid tick">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="row ticket-home">
			<div class="col-md-1">
				<a href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
			</div>

			<?php  foreach ($h_max->result_array() as $row) {?>
			<?php $numb = array($row['number']);?>
			<?php } 
			$numbe = max($numb)
			?>


			<div class="col-md-10">
				<div class="carousel-inner" role="listbox">
			<?php  foreach ($h_all->result() as $row) {?>
			<?php if ($numbe == $row->number ): ?>
						<div class="item active">
							<div class="pull-left">
								<h2><?php echo $row->judul ?><small> IDR: <?php echo $row->harga ?></small></h2>
								<p><?php echo $row->tanggal ?></p>
							</div>
							<a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>" class="btn btn-info pull-right">Selengkapnya</a>
						</div>
				<?php else: ?>

							<div class="item">
								<div class="pull-left">
									<h2><?php echo $row->judul ?><small> IDR: <?php echo $row->harga ?></small></h2>
									<p><?php echo $row->tanggal ?></p>
								</div>
								<a href="<?php echo base_url(); ?>Ticket/det/<?php echo $row->number; ?>/<?php echo $url_title = url_title($row->judul); ?>" class="btn btn-info pull-right">Selengkapnya</a>
							</div>
			<?php endif ?>
				<?php } ?>
				</div>
			</div>
			<div class="col-md-1">
				<a href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  	<span class="sr-only">Next</span>
				</a>
			</div> 
		</div>
	</div>
</div>
<div class="container promote">
	<div class="row text-center">
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>template/img/promot1.png">
			<h2>Sistem Aman</h2>
			<p>Platform kami menjamin semua keamanan ditangan Anda</p>
			<a href="#" class="btn btn-info btn-lg">Selengkapnya</a>
		</p>
		</div>
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>template/img/promot2.png">
			<h2>Terjadwal</h2>
			<p>Semua ticket yang terpost di sistem kami terupdate dan sesuai</p>
			<a href="#" class="btn btn-info btn-lg">Selengkapnya</a>
		</div>
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>template/img/promot3.png">
			<h2>Pencarian</h2>
			<p>Temukan ticket lebih mudah dengan sistem pencarian kami</p>
			<a href="#" class="btn btn-info btn-lg">Selengkapnya</a>
		</div>
	</div>
</div>
<script>
		$('.carousel').carousel({
    interval: false
}); 
	</script>