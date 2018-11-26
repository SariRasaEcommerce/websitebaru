 <?php $this->load->view('admin/Home/js'); ?>

  <?php $this->load->view('admin/Home/Main_header'); ?>

  <div class="main-panel">

    <div class="content">

        <div class="container-fluid">

            <h4 class="page-title">Data Pelanggan</h4>

            <div class="row">

                <div class="col-md-12">

  <div class="card">

    <div class="card-header">

      <div class="card-title">Data Diri Pelanggan</div>

    </div>

    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>No.</th>

              <th>Nama</th>

              <th>Tanggal Lahir</th>

              <th>Jenis Kelamin</th>

              <th>No Telp</th>

              <th>Alamat</th>

              <th>Email</th>
              <th>Action</th>

            </tr>

          </thead>

          <tbody>

            <?php 

              $no = 1;

              foreach ($data_pengguna as $pengguna) 

              {

            ?>

            <tr>

              <td><?php echo $pengguna -> ID_PELANGGAN ?></td>

              <td><?php echo $pengguna -> NAMA_PEL ?></td>

              <td><?php echo $pengguna -> TGL_LAHIR ?></td>

              <td><?php echo $pengguna -> JK ?></td>

              <td><?php echo $pengguna -> NO_TELP ?></td>

              <td><?php echo $pengguna -> ALAMAT_PEL ?></td>

              <td><?php echo $pengguna -> EMAIL ?></td>
              <td><a href="#">
                  <button class="btn btn-primary">Konfirmasi</button></a></td>

            </tr>

            <?php

              }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </div>
  <?php $this->load->view('admin/Sidebar/datapengguna'); ?>
  <?php $this->load->view('admin/Sidebar/datapengguna'); ?>
  <?php $this->load->view('admin/Home/Footer'); ?>