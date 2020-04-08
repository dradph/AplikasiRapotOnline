<!doctype html>
<html lang="en">
<head>
<?php $this->load->view('partials/head.php') ?>
</head>
<body>
   <!-- navbar -->
        <?php $this->load->view('partialsguru/navbar.php') ?>
    <!-- End Navbar-->
        <div class="app-main">
    <!-- Sidebar -->
        <?php $this->load->view('partialsguru/sidebar.php') ?>

    <!-- End Sidebar -->
               
               
                <div class="app-main__outer">
                    <div class="app-main__inner">
                 
                     <div class="row">
                        <?php if($hapus = $this->session->flashdata('hapus')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $hapus ?>
                          </div>
                        <?php endif ?>
                        <?php if($simpan = $this->session->flashdata('simpan')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $simpan ?>
                          </div>
                        <?php endif ?>
                          <?php if($update = $this->session->flashdata('update')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $update ?>
                          </div>
                        <?php endif ?>

                           
                            
                            
                            
                            
                            
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Data Siswa</h5>
                                        <form method="post" action="<?php base_url('ps/siswa') ?>">
                                        <input type="hidden" name="rayon" value="<?php echo $this->session->userdata('id_rayon') ?>">
                                        </form>
                                        <table class="mb-0 table table-striped">

                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nis</th>
                                                <th>Nama </th>
                                                <th>Rombel</th>
                                                <th colspan="2" class="text-center">Aksi</th>
                                            </tr>
                                            </thead>
                                             
                                            <tbody>
                                              <?php 
                                                $no = 0;
                                              foreach ($siswa as $key) {
                                                $no++;
                                                ?>
                                                <tr>
                                                  <td><?php echo $no ?></td>
                                                  <td><?php echo $key->nis ?></td>
                                                  <td><?php echo $key->nama ?></td>
                                                  <td><?php echo $key->rombel ?></td>
                                                  <td class="text-center"><a href="<?php echo base_url()?>ps/detail/<?php echo $key->nis ?>">Detail Nilai</a></td>
                                                  <td class="text-center"><a href="<?php echo base_url()?>ps/detailabsen/<?php echo $key->nis ?>">Detail Absen</a></td>

                                                </tr>


                                                <?php 
                                              }
                                               ?>
                                            
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/main.js') ?>"></script></body>
</html>
