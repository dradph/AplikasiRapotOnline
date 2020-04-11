<!doctype html>
<html lang="en">
<head>
<?php $this->load->view('partials/head.php') ?>
</head>
<body>
    <!-- navbar -->
        <?php $this->load->view('partialstu/navbar.php') ?>
    <!-- End Navbar-->
        <div class="app-main">
    <!-- Sidebar -->
        <?php $this->load->view('partialstu/sidebar.php') ?>

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
                                      <div class="d-flex justify-content-center mt-4 mb-4">
  <button type="submit" class="btn btn-primary" id="print" style="height: 40px; width: 50vh; text-align: center;">CETAK</button>
      
                             </div>
                                <div class="main-card mb-3 card">

                                    <div class="card-body">
                                    	  <div class="d-flex justify-content-center mt-4 mb-4">
                                          <div class="cetak">
  <form class="form" style="max-width: none; width: 1005px;">  
          <table width="100%">
            <tr style="height: 6vh">
              <td width="50%">
                <img style="width: 9vh" src="<?php echo base_url('assets/halutama/assets/img/portfolio/logo_wk.png') ?>">
              </td>
              <td width="50%">
          <div class="text-right" style="line-height: 18px; font-size: 100%">
              <dl>                                          
              <dt>YAYASAN PRAWITAMA</dt>
              <dt>SMK WIKRAMA BOGOR</dt>
              <dd>Jalan Raya Wangun Kel. Sindangsari - Bogor, Telp./Fax (0251) 8242411 <br> Website : www.smkwikrama.sch.id, e-mail : prohumasi@smkwikrama.sch.id</dd>
          </dl>
            </div>
                
              </td>
            </tr>
          </table>

    <hr class="" style="border: 0; border-top: 3px double black; margin-top: 3px">
        <h4 style="text-align: center"><b>LAPORAN PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></h4>  
       <?php foreach ($content->result() as $key): ?>
        <table style="margin-top: 3vh" width="100%">
            <tr>
                <td width="18%">NIS</td>
                <td width="2%">:</td>
                <td width="40%"><?php echo $key->nis ?></td>
                <td width="15%">Tahun Pelajaran</td>
                <td width="5%">:</td>
                <td width="20%">2019-2020</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $key->nama ?></td>
                <td>Semester</td>
                <td>:</td>
                <td><?php echo $this->uri->segment(3) ?></td>
            </tr>
            <tr>
                <td>Kompetensi Keahlian</td>
                <td>:</td>
                <td>
                     <?php 
                 $jurusan = $key->rombel;
                 $pecah = explode(" ", $jurusan);
                 $hasil = $pecah[0];
                 if ($hasil == "RPL") {
                    echo "Rekayasa Perangkat Lunak";
                   }elseif ($hasil == "TKJ") {
                    echo "Teknik Komputer dan Jaringan";
                   }else {
                    echo "Bisnis Daring dan Pemasaran";
                   }

                 ?>
                 
                </td>
                <td>Rombel</td>
                <td>:</td>
                <td><?php echo $key->rombel ?></td>
            </tr>
        </table>
       <?php endforeach ?>
        <br>
        <h6 ><b>CAPAIAN HASIL BELAJAR</b></h6>
        <h7><b>A. Sikap</b></h7>  
        <table style="border: 2px solid black; font-size: 90% ; margin-top: 3px; padding: 3px" >
            <tr>
              <td width="1%">
                
              </td>
              <?php foreach ($sem->result() as $key) {
                                         $total = array($key->s,$key->i,$key->a);
                                         $hasil = 100 - (132 - array_sum($total)) / 132 * 1 / 100;
                                                    
                                         ?>
                <td>
                    <b>Deskripsi :</b> <br>
                    1. Peserta didik menunjukkan sikap sungguh-sungguh dalam menerapkan sikap Spiritual, Jujur, Disiplin, Tanggung jawab, Toleransi, Gotong Royong, Sopan atau Santun dan Percaya diri <br>
                    2. Persentase kehadiran siswa  <?php echo round($hasil,2) ?>%.
                   <?php } ?> 
                        
                </td>
            </tr>
        </table>
        <br>
        <h7><b>B. Pengetahuan dan Keterampilan</b></h7>  
           <?php 
                                        if ($this->uri->segment(3) == 1 ) {
                                          ?>

                                        <!-- SEMESTER 1 -->
                                        <table class="table table-bordered text-center "  style="border: 2px solid black; font-size: 90% ; margin-top: 3px">
                                          <thead>
                                            <tr>
                                            <th rowspan="2" colspan="2">MATA PELAJARAN</th>
                                            <th colspan="4">Pengetahuan</th>
                                            <th colspan="4">Keterampilan</th>
                                            </tr>
                                            <tr>
                                              <th>KB*</th>
                                              <th>Angka</th>
                                              <th>Predikat</th>
                                              <th>Deskripsi</th>
                        <th>KB*</th>
                                              <th>Angka</th>
                                              <th>Predikat</th>
                                              <th>Deskripsi</th>

                                            </tr>
                                        
                                          </thead>
                                          <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($uh1p as $index => $key) {
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
                                                  if ($jumlah == 0) {
                                                    $Predikat = '-';
                                                    $ket = '-';
                                                  }elseif ($jumlah < 50) {
                                                    $Predikat = 'E';
                                                    $ket = 'sangat kurang';
                                                  }elseif ($jumlah < 65) {
                                                    $Predikat = 'D';
                                                    $ket = 'kurang';
                                                  }elseif ($jumlah < 80) {
                                                    $Predikat = 'C';
                                                    $ket = 'cukup';
                                                  }elseif ($jumlah < 90) {
                                                    $Predikat = 'B';
                                                    $ket = 'baik';
                                                  }else{
                                                    $Predikat = 'A';
                                                    $ket = 'sangat baik';
                                                  }

                        $totalk = array(
                                                      $uh1k[$index]->nilai,
                                                      $uh2k[$index]->nilai,
                                                      $uh3k[$index]->nilai,
                                                      $uh4k[$index]->nilai
                                                  );
                                                  $kuts =  $utsk[$index]->nilai; 
                                                  $kuas =  $uask[$index]->nilai;
                                                  $kuh = array_sum($totalk)/4;
                                                  $kuas = $uasp[$index]->nilai;
                                                  $kjumlah = ($kuh + $kuts + $kuas) / 3;
                                                  if ($kjumlah == 0) {
                                                    $kPredikat = '-';
                                                    $kket = '-';
                                                  }elseif ($kjumlah < 50) {
                                                    $kPredikat = 'E';
                                                    $kket = 'sangat kurang';
                                                  }elseif ($kjumlah < 65) {
                                                    $kPredikat = 'D';
                                                    $kket = 'kurang';
                                                  }elseif ($kjumlah < 80) {
                                                    $kPredikat = 'C';
                                                    $kket = 'cukup';
                                                  }elseif ($kjumlah < 90) {
                                                    $kPredikat = 'B';
                                                    $kket = 'baik';
                                                  }else{
                                                    $kPredikat = 'A';
                                                    $kket = 'sangat baik';
                                                  }
                                              ?>
                                              <tr>
                                                <td width="5%"><?php echo $no++ ?></td>
                                                <td width="15%" class="text-left"><?php echo $uh2p[$index]->mapel ?></td>
                                                <td width="5%">75</td>
                                                <td width="5%"><?php echo round($jumlah, 2);?></td>
                                                <td width="5%"><?php echo $Predikat ?></td>
                                                <td width="25%" class="text-left">Secara umum kompetensi peserta didik mencapai predikat <?php echo $ket.' ('.round($jumlah,1).'%)' ?> pada pelajaran ini. </td>
                                                <td width="5%">76</td>
                                                <td width="5%"><?php echo round($kjumlah, 2);?></td>
                                                <td width="5%"><?php echo $kPredikat ?></td>
                                                <td width="25%" class="text-left">Secara umum kompetensi peserta didik mencapai predikat <?php echo $kket.' ('.round($kjumlah,1).'%)' ?> pada pelajaran ini. </td>
                                                 
                                              </tr>


                                            <?php } ?>
                                          </tbody>

                                        </table>
                         

                                        <?php 
                                      }else{
                                     ?> 

                                     <!-- SEMESTER 2  -->
                                    <table class="table table-bordered border-black text-center "  style="border: 2px solid black; font-size: 90% ; margin-top: 3px">
                                          <thead>
                                            <tr>
                                            <th rowspan="2" colspan="2">MATA PELAJARAN</th>
                                            <th colspan="4">Pengetahuan</th>
                                            <th colspan="4">Keterampilan</th>
                                            </tr>
                                            <tr>
                                              <th>KB*</th>
                                              <th>Angka</th>
                                              <th>Predikat</th>
                                              <th>Deskripsi</th>
                        <th>KB*</th>
                                              <th>Angka</th>
                                              <th>Predikat</th>
                                              <th>Deskripsi</th>

                                            </tr>
                                        
                                          </thead>
                                          <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($uh1p as $index => $key) {
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
                                                  if ($jumlah == 0) {
                                                    $Predikat = '-';
                                                    $ket = '-';
                                                  }elseif ($jumlah < 50) {
                                                    $Predikat = 'E';
                                                    $ket = 'sangat kurang';
                                                  }elseif ($jumlah < 65) {
                                                    $Predikat = 'D';
                                                    $ket = 'kurang';
                                                  }elseif ($jumlah < 80) {
                                                    $Predikat = 'C';
                                                    $ket = 'cukup';
                                                  }elseif ($jumlah < 90) {
                                                    $Predikat = 'B';
                                                    $ket = 'baik';
                                                  }else{
                                                    $Predikat = 'A';
                                                    $ket = 'sangat baik';
                                                  }

                        $totalk = array(
                                                      $uh5k[$index]->nilai,
                                                      $uh6k[$index]->nilai,
                                                      $uh7k[$index]->nilai,
                                                      $uh8k[$index]->nilai
                                                  );
                                                  $kuts =  $utskg[$index]->nilai; 
                                                  $kuas =  $ukkk[$index]->nilai;
                                                  $kuh = array_sum($totalk)/4;
                                                  $kjumlah = ($kuh + $kuts + $kuas) / 3;
                                                  if ($kjumlah == 0) {
                                                    $kPredikat = '-';
                                                    $kket = '-';
                                                  }elseif ($kjumlah < 50) {
                                                    $kPredikat = 'E';
                                                    $kket = 'sangat kurang';
                                                  }elseif ($kjumlah < 65) {
                                                    $kPredikat = 'D';
                                                    $kket = 'kurang';
                                                  }elseif ($kjumlah < 80) {
                                                    $kPredikat = 'C';
                                                    $kket = 'cukup';
                                                  }elseif ($kjumlah < 90) {
                                                    $kPredikat = 'B';
                                                    $kket = 'baik';
                                                  }else{
                                                    $kPredikat = 'A';
                                                    $kket = 'sangat baik';
                                                  }
                                              ?>
                                              <tr>
                                                <td width="5%"><?php echo $no++ ?></td>
                                                <td width="15%" class="text-left"><?php echo $uh2p[$index]->mapel ?></td>
                                                <td width="5%">75</td>
                                                <td width="5%"><?php echo round($jumlah, 2);?></td>
                                                <td width="5%"><?php echo $Predikat ?></td>
                                                <td width="25%" class="text-left">Secara umum kompetensi peserta didik mencapai predikat <?php echo $ket.' ('.round($jumlah,1).'%)' ?> pada pelajaran ini. </td>
                                                <td width="5%">76</td>
                                                <td width="5%"><?php echo round($kjumlah, 2);?></td>
                                                <td width="5%"><?php echo $kPredikat ?></td>
                                                <td width="25%" class="text-left">Secara umum kompetensi peserta didik mencapai predikat <?php echo $kket.' ('.round($kjumlah,1).'%)' ?> pada pelajaran ini. </td>
                                                 
                                              </tr>


                                            <?php } ?>
                                          </tbody>

                                        </table>


                                   <?php  }
                                         ?>

        <h7><b>C. Ekstrakulikuler</b></h7>  
         <table class="table table-bordered" style="border: 2px solid black; font-size: 90%; margin-top: 3px">
                                          <thead>
                                            <tr>
                                              <td width="5%">No</td>
                                              <td width="35%">Kegiatan Ekstrakulikuler</td>
                                              <td>Deskripsi</td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                              $no = 1;
                                               foreach ($upd->result() as $key) {
                                                $s = ' dalam mengikuti kegiatan';
                                                if ($key->nilai1 == 'A') {
                                                  $ket = 'Sangat Aktif'.$s;
                                                }elseif ($key->nilai1 == 'B') {
                                                  $ket = 'Aktif'.$s;
                                                }elseif ($key->nilai1 == 'C') {
                                                  $ket = 'Cukup Aktif'.$s;
                                                }else{
                                                  $ket = 'Kurang Aktif'.$s;
                                                }

                                                if ($key->nilai2 == 'A') {
                                                  $ket2 = 'Sangat Aktif'.$s;
                                                }elseif ($key->nilai2 == 'B') {
                                                  $ket2 = 'Aktif'.$s;
                                                }elseif ($key->nilai2 == 'C') {
                                                  $ket2 = 'Cukup Aktif'.$s;
                                                }else{
                                                  $ket2 = 'Kurang Aktif'.$s;
                                                }
                                                ?>

                                            <tr>
                                              <td><?php echo $no++ ?></td>
                                              <td><?php echo $key->upd1 ?></td>
                                              <td><?php echo $ket ?></td>
                                            </tr>
                                            <tr>
                                              <td><?php echo $no++ ?></td>
                                              <td><?php echo $key->upd2 ?></td>
                                              <td><?php echo $ket2 ?></td>
                                            </tr>
                                                <?php 
                                              } ?>
                                            <tr>
                                              <td>3</td>
                                              <td>-</td>
                                              <td>-</td>
                                            </tr>
                                          </tbody>

                                        </table>  
       <h7><b>D. Prestasi</b></h7>  
         <table class="table table-bordered" style="border: 2px solid black; font-size: 90%; margin-top: 3px">
                                          <thead>
                                            <tr>
                                              <td width="5%">No</td>
                                              <td width="35%">Jenis Prestasi</td>
                                              <td>Keterangan</td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($prestasi->result() as $key) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $key->prestasi1 ?></td>
                                                <td><?php echo $key->keterangan1 ?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $key->prestasi2 ?></td>
                                                <td><?php echo $key->keterangan2 ?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $key->prestasi3 ?></td>
                                                <td><?php echo $key->keterangan3 ?></td>
                                              </tr>

                                              <?php 
                                            } ?>
                                          </tbody>
                                        </table>

                               <h7><b>E. Ketidakhadiran</b></h7>  
                                     <table class="table table-bordered" style="border: 2px solid black; font-size: 90%; margin-top: 3px">
                                        <thead>
                                            <tr>
                                              <th width="30%">Keterangan</th>
                                              <th>Jumlah</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php foreach ($sem->result() as $key) {
                                            ?>
                                            <tr>
                                              <td>Sakit</td>
                                              <td><?php echo $key->s ?></td>
                                            </tr>
                                            <tr>
                                              <td>Izin</td>
                                              <td><?php echo $key->i ?></td>
                                            </tr>
                                            <tr>
                                              <td>Tanpa Keterangan</td>
                                              <td><?php echo $key->a ?></td>
                                            </tr>
                                          <?php } ?>
                                          </tbody>
                                     </table>
                                        <br>  <br>  <br>  <br>  <br>  <br>

                                           <h7><b>F. Catatan Pembimbing</b></h7>  

                                          <div class="col-lg-12" style="border: 2px solid black; height: 20vh; margin-top: 3px; margin-bottom: 10px">
                                            
                                          </div>

                                            <h7><b>G. Tanggapan Orang Tua</b></h7>  

                                          <div class="col-lg-12 " style="border: 2px solid black; height: 20vh; margin-top: 3px">
                                            
                                          </div>


                                        <div class="col-lg-12 mt-4" style="border: 2px solid black; height: 23vh;">
                                           <?php 
                                            function tgl_indo($tanggal){
                                            $bulan = array (
                                              1 =>   'Januari',
                                              'Februari',
                                              'Maret',
                                              'April',
                                              'Mei',
                                              'Juni',
                                              'Juli',
                                              'Agustus',
                                              'September',
                                              'Oktober',
                                              'November',
                                              'Desember'
                                            );
                                            $pecahkan = explode('-', $tanggal);
                                            
                                            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                          } ?>
                                          <table width="100%">
                                            <tr>
                                              <td width="40%">Disahkan Oleh</td>
                                              <td width="35%">Mengetahui</td>
                                              <td width="20%">Bogor, <?php echo tgl_indo(date('Y-m-d')); ?></td>
                                            </tr>
                                            <tr>
                                              <td>Kepala SMK Wikrama Bogor</td>
                                              <td>Orang Tua/Wali</td>
                                              <td>Pembimbing</td>
                                            </tr>
                                            <tr>
                                              <td><br><br><br><br></td>
                                            </tr>
                                            <tr>
                                              <td>Iin Mulyani, S.si.</td>
                                              <td>...........................</td>
                                              <td>...........................</td>
                                            </tr>
                                          </table>
                                        </div>
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

<script type="text/javascript" src="<?php echo base_url('assets/scripts/main.js') ?>"></script></body>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.min.js') ?>"></script></body>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/printThis.js') ?>"></script></body>
<script type="text/javascript">
  $('#print').click(function(){
    $('.cetak').printThis({
       debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "<?php echo base_url('style.css') ?>",                // path to additional css file - use an array [] for multiple
        pageTitle: "",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: null,               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed
    });
  })
</script>
</html>
