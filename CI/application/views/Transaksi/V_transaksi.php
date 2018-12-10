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
					<div id="collapseOne" class="accordion-body in collapse">
						<div class="page-container">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="col-md-6 col-lg-4">
										<h4 class="example-title">Upload Bukti Pembayaran</h4>
										<div class="example">
											<input type="file" class="dropify-event" name="img" accept="images/*" required>
										</div>	
										<p>ukuran file max 300kb</p>						
										<button class="btn btn-inverse pull-right">Confirm order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="span12">
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div id="collapseOne" class="accordion-body in collapse">
						<div class="page-container">
							<div class="accordion-inner">



								<div class="row-fluid">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title"><strong>History Pemesanan</strong></h3>
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
														<?php 
														foreach ($transaksi->result() as $trans) 
															{?>
																<tbody>
																	<!-- foreach ($order->lineItems as $line) or some such thing here -->
																	<tr>
																		<td><?php echo $trans->NAMA_BARANG?></td>
																		<td class="text-center"><?php echo $trans->HARGA_BARANG?></td>
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





					<?php $this->load->view('Homepage/Footer'); ?>
					<?php $this->load->view('Homepage/Copyright'); ?>