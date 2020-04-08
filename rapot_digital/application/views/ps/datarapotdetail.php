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
                                    <div class="card-body"><h5 class="card-title">Laporan Nilai Siswa</h5>
                                          

                                        <?php foreach ($content->result() as $key): ?>
                                        <form method="post" action="<?php echo base_url(); ?>ps/data_detailabsen/<?php echo $key->nis ?>">
                                          <div class="row">
                                          <div class="col-md-7">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <h6>NIS</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->nis ?>
                                                   </h6>
                                               </div>
                                               <input type="hidden" name="nis" value="<?php echo $key->nis  ?>"  >
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-3">
                                                   <h6>Nama</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->nama ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-3">
                                                   <h6>Rombel</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->rombel ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>


                                           </div>

                                        <?php endforeach ?>
                                        <?php foreach ($sem->result() as $key): ?>
                                          
                                           <div class="col-md-5">
                                           <div class="row">
                                               <div class="col-md-4">
                                                   <h6>Sakit</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->s ?>
                                                   </h6>
                                               </div>
                                               <input type="hidden" name="nis" value="<?php echo $key->nis  ?>"  >
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <h6>Izin</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->i ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <h6>Alfa</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                       <?php echo $key->a ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>
                                           <div class="row">
                                               <div class="col-md-4">
                                                   <h6>Total Absen</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-6">
                                                   <h6>
                                                      <?php $total = array($key->s,$key->i,$key->a);
                                                    echo array_sum($total);
                                                    ?>
                                                    </h6>
                                               </div>
                                               
                                           </div>


                                           </div>
                                           </div>
                                        <?php endforeach ?>
                                                           

                                        </form>
                                        
                                        
                                        <?php 
                                        if ($this->uri->segment(3) == 1 ) {
                                          ?>

                                        <!-- SEMESTER 1 -->
                                        <table class="mb-1 mt-4 table table-bordered text-center">
                                          <thead>
                                            <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Mapel</th>
                                            <th colspan="3">Pengetahuan</th>
                                            <th colspan="3">Keterampilan</th>
                                            <th colspan="2">Total</th>
                                            </tr>
                                            <tr>
                                              <th>UH</th>
                                              <th>UTS</th>
                                              <th>UAS</th>
                                              <th>UH</th>
                                              <th>UTS</th>
                                              <th>UAS</th>
                                              <th>Pengetahuan</th>
                                              <th>Keterampilan</th>
                                            </tr>
                                        
                                          </thead>
                                          <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($uh1p as $index => $key) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $uh2p[$index]->mapel ?></td>
                                                <td><?php $total = array(
                                                  $key->nilai,
                                                  $uh2p[$index]->nilai,
                                                  $uh3p[$index]->nilai,
                                                  $uh4p[$index]->nilai);
                                                    $average = array_sum($total)/4;
                                                    echo $average;
                                                 ?></td>
                                                <td><?php echo $utsp[$index]->nilai ?></td>
                                                <td><?php echo $uasp[$index]->nilai ?></td>
                                                <td><?php $totalk = array(
                                                  $uh1k[$index]->nilai,
                                                  $uh2k[$index]->nilai,
                                                  $uh3k[$index]->nilai,
                                                  $uh4k[$index]->nilai);
                                                    $average = array_sum($totalk)/4;
                                                    echo $average;
                                                 ?></td>
                                                <td><?php echo $utsk[$index]->nilai ?></td>
                                                <td><?php echo $uask[$index]->nilai ?></td>
                                                <td><?php 
                                                    $total = array(
                                                            $key->nilai,
                                                            $uh2p[$index]->nilai,
                                                            $uh3p[$index]->nilai,
                                                            $uh4p[$index]->nilai
                                                          );
                                                    $uh = array_sum($total)/4;
                                                    $uts = $utsp[$index]->nilai;
                                                    $uas = $uasp[$index]->nilai;
                                                    $jumlah = ($uh + $uts + $uas) / 3;
                                                    echo round($jumlah, 2);

                                                 ?></td>
                                                 <td>
                                                  <?php 
                                                  $totalk = array(
                                                      $uh1k[$index]->nilai,
                                                      $uh2k[$index]->nilai,
                                                      $uh3k[$index]->nilai,
                                                      $uh4k[$index]->nilai
                                                  );
                                                  $uts =  $utsk[$index]->nilai; 
                                                  $uas =  $uask[$index]->nilai;
                                                  $uh = array_sum($totalk)/4;
                                                  $uas = $uasp[$index]->nilai;
                                                  $jumlah = ($uh + $uts + $uas) / 3;

                                                    echo round($jumlah, 2);
                                                  
                                                  ?>
                                                 </td>
                                              </tr>


                                            <?php } ?>
                                          </tbody>

                                        </table>
                         

                                        <?php 
                                      }else{
                                     ?> 

                                     <!-- SEMESTER 2  -->
                                     <table class="mb-1 mt-4 table table-bordered text-center">
                                          <thead>
                                            <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Mapel</th>
                                            <th colspan="3">Pengetahuan</th>
                                            <th colspan="3">Keterampilan</th>
                                            <th colspan="2">Total</th>
                                            </tr>
                                            <tr>
                                              <th>UH</th>
                                              <th>UTS</th>
                                              <th>UKK</th>
                                              <th>UH</th>
                                              <th>UTS</th>
                                              <th>UKK</th>
                                              <th>Pengetahuan</th>
                                              <th>Keterampilan</th>
                                            </tr>
                                        
                                          </thead>
                                          <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($uh1p as $index => $key) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $uh5p[$index]->mapel ?></td>
                                                <td><?php $total = array(
                                                  $uh5p[$index]->nilai,
                                                  $uh6p[$index]->nilai,
                                                  $uh7p[$index]->nilai,
                                                  $uh8p[$index]->nilai);
                                                    $average = array_sum($total)/4;
                                                    echo $average;
                                                 ?></td>
                                                <td><?php echo $utspg[$index]->nilai ?></td>
                                                <td><?php echo $ukkp[$index]->nilai ?></td>
                                                <td><?php $totalk = array(
                                                  $uh5k[$index]->nilai,
                                                  $uh6k[$index]->nilai,
                                                  $uh7k[$index]->nilai,
                                                  $uh8k[$index]->nilai);
                                                    $average = array_sum($totalk)/4;
                                                    echo $average;
                                                 ?></td>
                                                <td><?php echo $utskg[$index]->nilai ?></td>
                                                <td><?php echo $ukkk[$index]->nilai ?></td>
                                                <td><?php 
                                                    $total = array(
                                                            $uh5p[$index]->nilai,
                                                            $uh6p[$index]->nilai,
                                                            $uh7p[$index]->nilai,
                                                            $uh8p[$index]->nilai
                                                          );
                                                    $uh = array_sum($total)/4;
                                                    $uts = $utspg[$index]->nilai;
                                                    $uas = $ukkp[$index]->nilai;
                                                    $jumlah = ($uh + $uts + $uas) / 3;
                                                    echo round($jumlah,2);

                                                 ?></td>
                                                 <td>
                                                  <?php 
                                                  $totalk = array(
                                                      $uh5k[$index]->nilai,
                                                      $uh6k[$index]->nilai,
                                                      $uh7k[$index]->nilai,
                                                      $uh8k[$index]->nilai
                                                  );
                                                  $uts =  $utskg[$index]->nilai; 
                                                  $uas =  $ukkk[$index]->nilai;
                                                  $uh = array_sum($totalk)/4;
                                                  $uas = $ukkk[$index]->nilai;
                                                  $jumlah = ($uh + $uts + $uas) / 3;

                                                    echo round($jumlah,2);

                                                  ?>
                                                 </td>
                                              </tr>


                                            <?php } ?>
                                          </tbody>

                                        </table>


                                   <?php  }
                                         ?>
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
