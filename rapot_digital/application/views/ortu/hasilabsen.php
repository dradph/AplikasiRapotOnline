<!doctype html>
<html lang="en">
<head>
      <?php $this->load->view('partialsortu/head'); ?>
    </head>
<body id="page-top">
      <?php $this->load->view('partialsortu/navbar'); ?>
        <!-- Masthead-->
       <section class="page-section portfolio bg-white mt-5" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-secondary text-uppercase  mb-0">Laporan Kehadiran</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-book"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                    <?php foreach ($hasil as $key): ?>
                    <div class="row">
                        
                        <div class="col-md-2">
                          <h6>Nis</h6>  
                        </div>
                        <div class="col-md-1">
                          <h6>:</h6>  
                        </div>
                        <div class="col-md-5">
                          <h6><?php echo $key->nis ?></h6>  
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-2">
                          <h6>Nama</h6>  
                        </div>
                        <div class="col-md-1">
                          <h6>:</h6>  
                        </div>
                        <div class="col-md-5">
                          <h6><?php echo $key->nama ?></h6>  
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-2">
                          <h6>Rombel</h6>  
                        </div>
                        <div class="col-md-1">
                          <h6>:</h6>  
                        </div>
                        <div class="col-md-5">
                          <h6><?php echo $key->rombel ?></h6>  
                        </div>
                    </div>
                    <div class="row mb-5">
                        
                        <div class="col-md-2">
                          <h6>Rayon</h6>  
                        </div>
                        <div class="col-md-1">
                          <h6>:</h6>  
                        </div>
                        <div class="col-md-5">
                          <h6><?php echo $key->rayon ?></h6>  
                        </div>
                    </div>
                    <?php endforeach ?>
                <!-- Portfolio Grid Items-->
                <table class="table table-bordered text-secondary text-center">
                    <thead>
                        <tr>
                            <th width="25%">Sakit</th>
                            <th width="25%">Izin</th>
                            <th width="25%">Alfa</th>
                            <th width="25%">Total Tidak Hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            $no = 1;
                            foreach ($hasil as $index => $key) {
                                ?>
                        <tr>
                                <td><?php echo $key->s ?></td>
                                <td><?php echo $key->i ?></td>
                                <td><?php echo $key->a ?></td>
                                <td><?php $total = array($key->s,$key->i,$key->a);
                                                    echo array_sum($total); ?></td>
                                <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section> <!-- Portfolio Section-->
       

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">SMK WIKRAMA BOGOR</h4>
                        <p class="lead mb-0">Jl. Raya Wangun Kelurahan Sindangsari<br />Bogor, Jawa Barat</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Temui Kami</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © dradph 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
  
  <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo base_url('assets/halutama/assets/mail/jqBootstrapValidation.js') ?>"></script>
        <script src="<?php echo base_url('assets/halutama/assets/mail/contact_me.js') ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/halutama/js/scripts.js') ?>"></script>
  </body>
</html>