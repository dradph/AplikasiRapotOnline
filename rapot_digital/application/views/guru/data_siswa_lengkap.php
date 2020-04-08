<!doctype html>
<html lang="en">
<head>
<?php $this->load->view('partials/head.php') ?>
</head>
<body>
    <!-- navbar -->
        <?php $this->load->view('partials/navbar.php') ?>
    <!-- End Navbar-->
        <div class="app-main">
    <!-- Sidebar -->
        <?php $this->load->view('partials/sidebar.php') ?>

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
                                    <div class="card-body"><h5 class="card-title">Data Operator</h5>

                                          <form method="post" action="<?php echo base_url(); ?>siswa/data">
                                      
                                                  <div class="form-row">
        
                                                            <div class="form-group col-md-3">
                                                              <label for="">Rombel</label>
                                                              <select class="form-control" name="rombel" >
                                                             <?php foreach($rombel as $r){ ?>
                                                                <option value="<?php echo $r->id_rombel; ?>"><?php echo $r->rombel; ?></option>
                                                                <?php } ?>
                                                              </select>
                                                            </div>
                                                           <div class="form-group col-md-3">
                                                              <label for="">Jenis Ujian</label>
                                                              <select class="form-control" name="jenis" >
                                                             <?php foreach($jenis as $j){ ?>
                                                                <option value="<?php echo $j->id_jenis; ?>"><?php echo $j->nama_ujian; ?></option>
                                                                <?php } ?>
                                                              </select>
                                                            </div>
                                                           <div class="form-group col-md-3">
                                                              <label for="">Kategori</label>
                                                              <select class="form-control" name="kategori" >
                                                              <?php  foreach ($kategori as $k) { ?>
                                                                  <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
                                                              <?php } ?>
                                                              </select>
                                                            </div>
                                                           <div class="form-group col-md-3">
                                                              <input type="hidden" name="mapel" value="<?php echo $this->session->userdata('id_mapel') ?>">
                                                            
                                                             <button type="submit" class="btn btn-primary mt-4" style="height: 40px; width: 5rem">OK</button>
                                                           
                                                            </div>                                                            

                                                          </div>

                                        </form>
                                        <table class="mb-0 table table-striped">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nis</th>
                                                <th>Nama </th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>
                                             
                                            <tbody>
                                              <?php 
                                              foreach ($siswa as $key) {
                                                $no = 1;
                                                ?>
                                                <tr>
                                                  <td><?php echo $no++ ?></td>
                                                  <td><?php echo $key->nis ?></td>
                                                  <td><?php echo $key->nama ?></td>
                                                  <td><?php echo $key->nilai ?></td>
                                                  
                                                    <?php if ($key->nilai < 75): ?>
                                                      <td>Belum Kompeten</td>
                                                    <?php endif ?>
                                                    <?php if ($key->nilai >= 75 ): ?>
                                                      <td>Kompeten</td>
                                                    <?php endif ?>
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
