  <?php $this->load->view('admin/Home/js'); ?>
  <?php $this->load->view('admin/Home/Main_header'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <h4 class="page-title">Pembayaran</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Data Upload Pembayaran</div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No. </th>
                        <th>No. Pesanan</th>
                        <th>Status Upload</th>
                        <th>Total Bayar</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      foreach ($data_upload as $upload) 
                      {
                        ?>
                        <tr>
                          <th scope="row"><?php echo $upload -> ID_BUKTI ?></th>
                          <td><?php echo $upload -> ID_DETAILTRANSAKSI ?></td>
                          <td><?php echo $upload -> STATUS ?></td>
                          <td><?php echo $upload  -> TOTAL ?></td>
                          <td><img src="<?php echo base_url().$upload -> IMG ?>" width="100" height="70"></td>
                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $upload -> ID_BUKTI ?>">TRANSFER</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihatgambar<?php echo $upload -> ID_BUKTI ?>">LIHAT GAMBAR</button>
                          </td>
                          <!-- EDIT TRANSFER -->
                          <div class="modal fade" id="myModal<?php echo $upload -> ID_BUKTI ?>" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Form Transfer</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body form-group">
                                <form method="post" action="<?php echo base_url('index.php/admin/Upload_bukti/bukti2')?>">
                                 <input type="text" name="id_bukti" value="<?php echo $upload->ID_BUKTI?>" hidden>
                                  <select class="form-control input-pill" style="height: 30px;" name="status">
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                  </select>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary" >Save</button>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!-- TUTUP EDIT TRANSFER -->
                          <!-- LIHAT GAMBAR -->
                          <div class="modal fade" id="lihatgambar<?php echo $upload -> ID_BUKTI ?>" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Gambar Bukti Transfer</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body form-group">
                                <form method="post" action="#">
                                <img src="<?php echo base_url().$upload -> IMG ?>" width="480" height="450">
                                  </select>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!-- TUTUP LIHAT GAMBAR -->
                        </tr>
                      <?php } ?>
                    </tbody>
                  </div>
                </table>
              </div>
            </div>
            <?php $this->load->view('admin/Sidebar/upload_bukti'); ?>