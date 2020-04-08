<!doctype html>
<html lang="en">
 <head>
      <?php $this->load->view('partialssiswa/head'); ?>
    </head>
<body id="page-top">
      <?php $this->load->view('partialssiswa/navbar'); ?>
 
        <!-- Masthead-->
       <section class="page-section portfolio bg-white mt-5" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class=" text-center text-secondary text-uppercase  mb-3">Cek Absensi</h2>
                <h2 class="page-section-heading text-center text-secondary text-uppercase  mb-0">Pilih Semester</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-book"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
             
                    
                <div class="row">
                    <!-- Portfolio Item 4-->
                    <div class="col-md-2"></div>
                    <div class="col-md-4 col-lg-4 mb-5 mb-lg-0" > 
                    <a href="<?php echo base_url('murid/hasilabsen/1') ?>">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-secondary"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/1.png') ?>" alt=""  />
                    </a>
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->

                    <div class="col-md-4 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                    <a href="<?php echo base_url('murid/hasilabsen/2') ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-secondary"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/halutama/assets/img/ujian/2.png') ?>" alt="" />
                </a>
                        </div>
                    </div>
                    <div class="col-md-2">

                        
                    </div>
                    <!-- Portfolio Item 6-->
                 </div>   
            </div>
        </section>
        <!-- Portfolio Section-->
       

        <!-- Footer-->
       <?php $this->load->view('partialssiswa/footer'); ?>
  </body>
</html>