

<div class="container">
	<div class="row">
		<div class="col-md-4 member-area">
			<img src="<?php echo base_url(); ?>template/img/user.jpg" width="80px" class="pull-left">
			<div class="greeting">
				<small>Welcome Back</small>
				<p> Brolin </p>
				<a href="<?php echo base_url();?>Member/sellpost" class="btn btn-danger ">SELL </a>
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
				
		<div class="col-md-7 col-md-offset-1">
			<ul class="nav nav-pills">
			  <li><a href="#allpost" data-toggle="pill">Semua Post</a></li>
			  <li><a href="#allreserve" data-toggle="pill">Semua Reservasi</a></li>
			  <li class="active"><a href="#notifikasi" data-toggle="pill" `>Notifikasi</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane" id="allpost">
				  	<!-- Active ticket -->
					<?php if ($h->num_rows() > 0): ?>
				  	<?php  foreach ($h->result() as $row) {?>
				  	<div class="active-ticket">
				  		<div class="col-md-6 img-area">
							<img src="<?php echo base_url(); ?>template/img/ticket1.jpg" width="120px" class="pull-left img-responsive">
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
						<hr>
						<div class="col-md-2">
							<img src="<?php echo base_url(); ?>template/img/ticket1.jpg" class="pull-left img-responsive">
						</div>
						<div class="info-small">
							<h5>Konser Iwan Fals </h5>
							<small>IDR 120.000 sampingnya gk keliatan bos</small><br>
							<a href="#" class="btn btn-danger">deactived</a><small> *post ini melanggar peraturan kami</small>
						</div>
						<hr>
						<div class="col-md-2">
							<img src="<?php echo base_url(); ?>template/img/ticket1.jpg" class="pull-left img-responsive">
						</div>
						<div class="info-small">
							<h5> Trip Perjalanan ke Parang Tritis </h5>
							<small>IDR 120.000 sampingnya gk keliatan bos</small><br>
							<a href="#" class="btn btn-info">sold</a>
						</div>
						<hr>
						<div class="col-md-2">
							<img src="<?php echo base_url(); ?>template/img/ticket1.jpg" class="pull-left img-responsive">
						</div>
						<div class="info-small">
							<h5> Trip Konser Owl City</h5>
							<small>IDR 120.000 sampingnya gk keliatan bos</small><br>
							<a href="#" class="btn btn-info">sold</a>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="allreserve">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="tab-pane active" id="notifikasi">
					
					 <legend>Test</legend>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-3 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-6" data-date="2015-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>


				</div>
			</div>
		</div>
	</div>
</div>	
<!-- http://www.formget.com/codeigniter-upload-image/ -->



