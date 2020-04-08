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
                                  <a href="<?php echo base_url('tu/cetakrapot/')?><?php echo $this->uri->segment(3) ?>/<?php echo $this->uri->segment(4) ?>" class="text-center"><h3>Cetak</h3></a>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                    	<div class="row">
                                    		<div class="col-md-2">
                                    			<img style="width: 10vh" src="<?php echo base_url('assets/halutama/assets/img/portfolio/logo_wk.png') ?>">
                                    		</div>
                                    		<div class="col-md-10 text-right" style="line-height: 18px">
                                    			<dl>                                    			
                                    			<dt>YAYASAN PRAWITAMA</dt>
                                    			<dt>SMK WIKRAMA BOGOR</dt>
                                    			<dd>Jalan Raya Wangun Kel. Sindangsari - Bogor, Telp./Fax (0251) 8242411 <br> Website : www.smkwikrama.sch.id, e-mail : prohumasi@smkwikrama.sch.id</dd>
                                    			
											</dl>

                                    		</div>
                                    	</div>
                                    	<hr class="" style="border: 0; border-top: 3px double #8c8c8c">
                                    	<h5 class="text-center" style="margin-bottom: 20px;"><b>LAPORAN PENCAPAIAN KOMPETENSI PESERTA DIDIK</b></h5>
                                          

                                        <?php foreach ($content->result() as $key): ?>

                                          <div class="row" style="line-height: 1">
                                          <div class="col-md-7">
                                           <div class="row" >
                                               <div class="col-md-4">
                                                   <p>NIS</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
                                                       <?php echo $key->nis ?>
                                                   </p>
                                               </div>
                                               <input type="hidden" name="nis" value="<?php echo $key->nis  ?>"  >
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <p>Nama</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
                                                       <?php echo $key->nama ?>
                                                   </p>
                                               </div>
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <p>Kompetensi Keahlian</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
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
                                                       
                                                   </p>
                                               </div>
                                               
                                           </div>


                                           </div>

                                           <div class="col-md-5">
                                           <div class="row">
                                               <div class="col-md-4">
                                                   <p>Tahun Pelajaran</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
                                                       2019-2020
                                                   </p>
                                               </div>
                                               <input type="hidden" name="nis" value="<?php echo $key->nis  ?>"  >
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <p>Semester</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
                                                       <?php echo $this->uri->segment(3) ?>
                                                   </p>
                                               </div>
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-4">
                                                   <p>Rombel</p>
                                               </div>
                                               <div class="col-md-1">
                                                   <p>:</p>
                                               </div>
                                               <div class="col-md-6">
                                                   <p>
                                                       <?php echo $key->rombel ?>
                                                   </p>
                                               </div>
                                               
                                           </div>
                                           


                                           </div>
                                           </div>
                                        <?php endforeach ?>
                                                           

                                        </form>
                                        	
                                        <dl class="mt-3">
                                        	<dt>CAPAIAN HASIL BELAJAR</dt>
                                        </dl>

                                        <dl class="font-weight-bold">
                                        	<dd>A . Sikap</dd>
                                        </dl>
                                        <table class="table table-bordered"  style="border: 2px solid black">
                                        <?php foreach ($sem->result() as $key) {
                                         $total = array($key->s,$key->i,$key->a);
                                         $hasil = 100 - (132 - array_sum($total)) / 132 * 1 / 100;
                                                    
                                         ?>
                                        	<tr>
                                        		<td>
                                        			<b>Deskripsi :</b> <br>
                                        			1. Peserta didik menunjukkan sikap sungguh-sungguh dalam menerapkan sikap Spiritual, Jujur, Disiplin, Tanggung jawab, Toleransi, Gotong Royong, Sopan atau Santun dan Percaya diri <br>
                                        			2. Persentase kehadiran siswa  <?php echo round($hasil,2) ?>%.
                                        			
                                                     	
                                        		</td>
                                        	</tr>
                                        <?php } ?>
                                        </table>

                                         <dl class="font-weight-bold">
                                        	<dd>B .	 Pengetahuan dan Keterampilan</dd>
                                        </dl>
                                        
                                        <?php 
                                        if ($this->uri->segment(3) == 1 ) {
                                          ?>

                                        <!-- SEMESTER 1 -->
                                        <table class="mb-1 mt-4 table table-bordered text-center "  style="border: 2px solid black">
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
                                    <table class="mb-1 mt-4 table table-bordered text-center "  style="border: 2px solid black">
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

                                         <dl class="font-weight-bold mt-4">
                                          <dd>C . Ekstrakulikuler</dd>
                                        </dl>
                                        <table class="table table-bordered" style="border: 2px solid black">
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
                                          <dl class="font-weight-bold mt-4">
                                          <dd>D . Prestasi</dd>
                                        </dl>
                                        <table class="table table-bordered"  style="border: 2px solid black">
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

                                         <dl class="font-weight-bold mt-4">
                                        	<dd>E .	Ketidakhadiran</dd>
                                        </dl>

                                        <table class="table table-bordered"  style="border: 2px solid black">

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

                                        <dl class="font-weight-bold mt-4">
                                        	<dd>F .	Catatan Pembimbing</dd>
                                        	<div class="col-lg-12 mt-3" style="border: 2px solid black; height: 20vh;">
                                        		
                                        	</div>
                                        </dl>

                                        <dl class="font-weight-bold mt-4">
                                        	<dd>G .	Tanggapan Orang Tua/Wali</dd>
                                        	<div class="col-lg-12 mt-3" style="border: 2px solid black; height: 20vh;">
                                        		
                                        	</div>
                                        </dl>

                                        <div class="col-lg-12 mt-4" style="border: 2px solid black; height: 25vh;">
                                        	<div class="row">
                                        		<div class="col-md-4">
                                        			<p>Disahkan Oleh <br>Kepala SMK Wikrama Bogor</p>
                                        			<br><br><br>
                                        			<p>Iin Mulyani,S.Si.</p>
                                        		</div>
                                        		<div class="col-md-4">
                                        			<p>Mengetahui <br>Orang Tua/Wali</p>
                                        			<br><br><br>
                                        			<p>..........................</p>
                                        		</div>
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
												}
                                        		 ?>
                                        		<div class="col-md-4">
                                        			<p>Bogor, <?php echo tgl_indo(date('Y-m-d')); ?> <br>Pembimbing</p>
                                        			<br><br><br>
                                        			<p>..........................</p>
                                        		</div>
                                        	</div>
                                        </div>

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
