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
                                      <form method="post" action="<?php echo base_url(); ?>ps/add_upd">
                                      
                                                  <div class="form-row">
        
                                                            <div class="form-group col-md-3">
                                                              <label for="">Pilih Semester</label>
                                                              <select class="form-control" name="semester" >
                                                             <?php foreach($semester as $s){ ?>
                                                                <option value="<?php echo $s->id_semester; ?>"><?php echo $s->semester; ?></option>
                                                                <?php } ?>
                                                              </select>
                                                            </div>
                                                          
                                                           <div class="form-group col-md-3">
                                                              <input type="hidden" name="rayon" value="<?php echo $this->session->userdata('id_rayon') ?>">
                                                            
                                                             <button type="submit" class="btn btn-primary mt-4" style="height: 40px; width: 5rem">OK</button>
                                                           
                                                            </div>                                                            

                                                          </div>

                                        </form>

                                         <table class="mb-0 table table-bordered text-center">
                                             <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Nis</th>
                                                <th rowspan="2">Nama </th>
                                                <th rowspan="2">Rombel</th>
                                                <th colspan="2">UPD 1</th>
                                                <th colspan="2">UPD 2</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                              <tr>
                                               <th>Nama</th>
                                               <th>Nilai</th>
                                                <th>Nama</th>
                                               <th>Nilai</th>
                                               </tr>
                                             </thead>
                                            <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($content as $index => $key) {
                                              ?>
                                            <tr>
                                               <td><?php echo $no++ ?></td>
                                               <td><?php echo $key->nis ?></td>
                                               <td><?php echo $key->nama ?></td>
                                               <td><?php echo $key->rombel ?></td>
                                               <td><?php echo $upd[$index]->upd1 ?></td>
                                               <td><?php echo $upd[$index]->nilai1 ?></td>
                                               <td><?php echo $upd[$index]->upd2 ?></td>
                                               <td><?php echo $upd[$index]->nilai2 ?></td>
                                               <td class="text-center"><a href="<?php echo base_url()?>ps/add_updnilai/<?= $upd[$index]->id?>/<?php echo $upd[$index]->nis ?>">Input Nilai</a></td>

                                            </tr>
                                              <?php 
                                            } ?>
                                            
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
