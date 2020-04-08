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
                                    <div class="card-body"><h5 class="card-title">Input UPD Siswa</h5>

                                      <?php foreach ($content as $key) { ?>
                                      <form method="post" action="<?php echo base_url(); ?>ps/action_update/<?php echo $key->id ?>">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input type="text" class="form-control" name="nis" value="<?php echo $key->nis ?>" disabled> 
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $key->nama ?>" disabled> 
                                        </div>
                                        <div class="form-group">
                                            <label>Rombel</label>
                                            <input type="text" class="form-control" name="rombel" value="<?php echo $key->rombel ?>" disabled> 
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                            <label>UPD 1</label>
                                            <select class="form-control" name="upd1">
                                              <option value="-">--Tidak Ada--</option>
                                            <?php foreach ($upd as $key) { ?>
                                              <option value="<?php echo $key->nama_upd ?>"><?= $key->nama_upd ?></option>
                                              <?php } ?>
                                            </select> 
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Nilai UPD 1</label>
                                            <select class="form-control" name="nilai1">
                                              <option value="-">--Tidak Ada--</option>
                                              <option value="A">Sangat Baik</option>
                                              <option value="B">Baik</option>
                                              <option value="C">Cukup</option>
                                              <option value="D">Kurang Baik</option>
                                            </select> 
                                            </div>
                                          </div>
                                          </div>
                                          <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                            <label>UPD 2</label>
                                            <select class="form-control" name="upd2">
                                              <option value="-">--Tidak Ada--</option>
                                            <?php foreach ($upd as $key) { ?>
                                              <option value="<?php echo $key->nama_upd ?>"><?= $key->nama_upd ?></option>
                                              <?php } ?>
                                            </select> 
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Nilai UPD 2</label>
                                            <select class="form-control" name="nilai2">
                                              <option value="-">--Tidak Ada--</option>
                                              <option value="A">Sangat Baik</option>
                                              <option value="B">Baik</option>
                                              <option value="C">Cukup</option>
                                              <option value="D">Kurang Baik</option>
                                            </select> 
                                            </div>
                                          </div>
                                          </div>
                                          <div class="row">
                                          <div class="col-md-10">
                                          </div>
                                          <button type="submit" class="btn btn-primary mt-4 " style="height: 40px; width: 10rem">Simpan</button>
                                          </div>
                                        </div>
                                      </form>

                                        <?php } ?>
                                         
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
