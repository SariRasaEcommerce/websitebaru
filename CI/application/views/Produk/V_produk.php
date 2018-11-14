<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Produk Sari Rasa</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<?php foreach ($produk->result() as $barang) {?>
								
								
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="<?php echo base_url('Detail_produk')?>"><img alt="" src="<?php echo base_url().$barang->IMG?>"></a><br/>
									<a href="product_detail.html" class="title"><?php echo $barang->NAMA_BARANG?></a><br/>
									<p class="price"><?php echo $barang->HARGA_BARANG?></p>
								</div>
							</li>       
							<?php } ?>
							
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					
				</div>

<?php $this->load->view('Homepage/Footer'); ?>
<?php $this->load->view('Homepage/Copyright'); ?>