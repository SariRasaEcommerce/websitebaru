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
						<div class="page-content">


							<!-- Panel Table Add Row -->
							
									<div class="panel">
										<div class="panel-heading">
											<div class="panel-body container-fluid">
												<form autocomplete="off" method="post" action="<?php echo base_url(). 'Transaksi/aksi_upload'; ?>" enctype="multipart/form-data">
													<div class="col-md-6 col-lg-4">
														<h4 class="example-title">Upload Bukti Pembayaran</h4>
														<div class="example">
															<input type="file" id="input-file-events" class="dropify-event" data-default-file="../../global/photos/view-6-960x640.jpg" name="GAMBAR_TF">
															
														</div>

														<div class="form-group form-material floating" data-plugin="formMaterial">
															<div class="input-group">
																<span class="input-group-btn">        
																	<button class="btn btn-inverse pull-right" name="btnSubmit" type="submit">Confirm order</button>
																</span>
															</div>
														</div>
														<br>
													</div>
												</form>
											</div>
										</div>
										<!-- End Panel Table Add Row -->   

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			




							<?php $this->load->view('Homepage/Footer'); ?>
							<?php $this->load->view('Homepage/Copyright'); ?>