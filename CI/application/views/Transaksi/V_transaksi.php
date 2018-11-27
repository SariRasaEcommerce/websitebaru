<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Konfirmasi Pemesanan</span></h4>
</section>	
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Detail Pesanan</a>
					</div>
					<div id="collapseOne" class="accordion-body in collapse">
						<div class="page-container">
						<div class="accordion-inner">
							
								<div class="row-fluid">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title"><strong>Rincian Pesanan</strong></h3>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead>
															<tr>
																<td><strong>Barang</strong></td>
																<td class="text-center"><strong>Harga</strong></td>
																<td class="text-center"><strong>Jumlah</strong></td>
																<td class="text-right"><strong>Total</strong></td>
															</tr>
														</thead>
														<?php foreach ($transaksi->result() as $transaksi) {?>
														<tbody>
															<!-- foreach ($order->lineItems as $line) or some such thing here -->
															<tr>
																<td><?php echo $transaksi->NAMA_BARANG?></td>
																<td class="text-center">$10.99</td>
																<td class="text-center">1</td>
																<td class="text-right">$10.99</td>
															</tr>
														</tbody>
														<?php } ?>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Data Pemesan</a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
						<div class="accordion-inner">
							<div class="row-fluid">
								<div class="span6">
									<form action="<?php echo base_url('index.php/Login/aksi_register')?>" method="post" class="form-stacked">
										<fieldset>
											<div class="control-group">
												<label class="control-label">Nama</label>
												<div class="controls">
													<input type="text" name="nama" placeholder="Masukkan Nama" class="input-xlarge">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Alamat</label>
												<div class="controls">
													<textarea type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" class="input-xlarge"></textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Nomor Telpon</label>
												<div class="controls">
													<input type="text" name="no" placeholder="Masukkan Nomor Telpon" class="input-xlarge">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Jenis Kelamin</label>
												<div class="controls">
													<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kelamin">
														<option disabled="">Pilih Jenis Kelamin</option>
														<option>Laki - Laki</option>
														<option>Perempuan</option>
													</select>
												</div>
											</div>

											<div class="control-group">
												<label class="control-label">Email address:</label>
												<div class="controls">
													<input type="text" name="email" placeholder="Masukkan Email" class="input-xlarge">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Password:</label>
												<div class="controls">
													<input type="password" name="password" placeholder="Masukkan Password" class="input-xlarge">
												</div>
											</div>	
										</fieldset>
									</form>
								</div>
								
							</div>
						</div>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Eco Tax (-2.00)</strong>: $2.00<br>
							<strong>VAT (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: $119.50<br>
						</p>
						<hr/>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Pembayaran</a>
					</div>
					<div id="collapseThree" class="accordion-body collapse">
						<div class="accordion-inner">
							<div class="row-fluid">
								<div class="col-md-6 col-lg-4">
									<h4 class="example-title">Upload Bukti Pembayaran</h4>
									<div class="example">
										<input type="file" class="dropify-event" name="img" accept="images/*" required>
									</div>							
									<button class="btn btn-inverse pull-right">Confirm order</button>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<?php $this->load->view('Homepage/Footer'); ?>
		<?php $this->load->view('Homepage/Copyright'); ?>