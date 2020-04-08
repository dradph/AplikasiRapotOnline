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
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Data Operator</h5>

                                          <form method="post" action="<?php echo base_url(); ?>nilai/add">
                                      
                                                  <div class="form-row">
        
                                                            <div class="form-group col-md-3">
                                                              <label for="">Rayon</label>
                                                              <select class="form-control" name="rayon" >
                                                             <?php foreach($rayon as $r){ ?>
                                                                <option value="<?php echo $r->id_rayon; ?>"><?php echo $r->rayon; ?></option>
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
                                                <th>Nama </th>
                                                <th>Rombel</th>
                                            </tr>
                                            </thead>
                                             
                                            <tbody>
                                            <tr>
                                               
                                            </tr>
                                            
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
