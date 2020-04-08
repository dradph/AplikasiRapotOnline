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
                                      <form method="post" action="<?php echo base_url(); ?>ps/action_updateprestasi/<?php echo $key->id ?>">
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
                                        <div class="form-group">
                                            <label>Prestasi 1</label>
                                            <input type="text" class="form-control" name="prestasi1" value="<?php echo $key->prestasi1 ?>" > 
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan1" value="<?php echo $key->keterangan1 ?>" > 
                                        </div>
                                        <div class="form-group">
                                            <label>Prestasi 2</label>
                                            <input type="text" class="form-control" name="prestasi2" value="<?php echo $key->prestasi2 ?>" > 
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan2" value="<?php echo $key->keterangan2 ?>" > 
                                        </div><div class="form-group">
                                            <label>Prestasi 3</label>
                                            <input type="text" class="form-control" name="prestasi3" value="<?php echo $key->prestasi1 ?>" > 
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan3" value="<?php echo $key->keterangan1 ?>" > 
                                        </div>
                                        
                                           <div class="row">
                                          <div class="col-md-10">
                                          </div>
                                          <button type="submit" class="btn btn-primary mt-4 " style="height: 40px; width: 10rem">Simpan</button>
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
