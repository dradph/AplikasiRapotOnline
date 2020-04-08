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
                                    <div class="card-body"><h5 class="card-title">Input Absensi Siswa</h5>
                                      <form method="post" action="<?php echo base_url(); ?>ps/add_absensi">
                                      
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
                                      <form method="post" action="<?php echo base_url(); ?>ps/save">

                                         <table class="mb-0 table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="15%">Nis</th>
                                                <th width="30%">Nama </th>
                                                <th width="20%">Rombel</th>
                                                <th width="10%">Sakit</th>
                                                <th width="10%">Izin</th>
                                                <th width="10%">Alpa</th>
                                            </tr>
                                            </thead>
                                             
                                             
                                            <tbody>

                                              <?php 
                                              $no = 1 ;
                                              foreach ($content->result() as $r ) {
                                            ?>
                                            <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $r->nis ?> 
                                          <input type="hidden" name="id[]" value="<?php echo $r->id ?>">

                                          <input type="hidden" name="nis[]" value="<?php echo $r->nis ?>">
                                          <input type="hidden" name="semester[]" value="<?php echo $sem ?>">

                                          </td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo $r->rombel ?></td>
                                            <td>
                                              <input type="text" value="<?php echo $r->s ?>" name="s[]" class="form-control">
                                            </td>
                                            <td>
                                              <input type="text" value="<?php echo $r->i ?>" name="i[]" class="form-control">
                                            </td>
                                            <td>
                                              <input type="text" value="<?php echo $r->a ?>" name="a[]" class="form-control">
                                            </td>
                                            </tr>
                                            <?php     
                                              }
                                               ?>
                                            </tbody>
                                            
                                            

                                        </table>


                                             <button type="submit" class="btn btn-primary mt-4" style="height: 40px; width: 5rem">OK</button>
                                           </form>
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
