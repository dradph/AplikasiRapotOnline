<!doctype html>
<html lang="en">
 <head>
      <?php $this->load->view('partialssiswa/head'); ?>
    </head>
<body id="page-top">
      <?php $this->load->view('partialssiswa/navbar'); ?>
        <!-- Masthead-->
        <header class="masthead bg-white text-secondary text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="<?php echo base_url('assets/halutama/assets/img/avataaars.svg') ?>" alt="" /><!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">SELAMAT DATANG</h1>
                <!-- Icon Divider-->
                <div class="divider-custom ">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-book"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $this->session->userdata('nama') ?></p>
            </div>
        </header>
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