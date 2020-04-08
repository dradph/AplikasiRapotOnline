<!doctype html>
<head>
      <?php $this->load->view('partialsortu/head'); ?>
    </head>
<body id="page-top">
      <?php $this->load->view('partialsortu/navbar'); ?>
        <!-- Masthead-->
       <section class="page-section portfolio bg-white mt-5" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class=" text-center text-secondary text-uppercase  mb-3">Cek Nilai</h2>
                <h2 class="page-section-heading text-center text-secondary text-uppercase  mb-0">Jenis Ujian</h2>

                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-book"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->

                <!-- Semester 1 -->
                 <?php 
                if ($this->uri->segment(3) == 1) {
                    ?>

                   
             <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/1') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh1.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/2') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh2.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/3') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh3.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <a href="<?php echo base_url('ortu/hasil/4') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh4.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <a href="<?php echo base_url('ortu/hasil/9') ?>">
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uts.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <a href="<?php echo base_url('ortu/hasil/10') ?>">
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uas.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             <?php 
                }else{
                 ?>

                 <!-- SEMESTER 2 -->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/5') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh5.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/6') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh6.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <a href="<?php echo base_url('ortu/hasil/7') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh7.png') ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <a href="<?php echo base_url('ortu/hasil/8') ?>"></a>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uh8.png') ?>" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <a href="<?php echo base_url('ortu/hasil/11') ?>"></a>
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/uts.png') ?>" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <a href="<?php echo base_url('ortu/hasil/12') ?>"></a>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/ukk.png') ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
                <?php }  ?>
        </section>
        <!-- Portfolio Section-->
       

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