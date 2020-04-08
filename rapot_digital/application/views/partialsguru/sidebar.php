 <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading"></li>
                                <li>
                                    <a href="<?= base_url('ps/absensi') ?>">
                                        <i class="metismenu-icon pe-7s-pen"></i>
                                        Input Absensi
                                        
                                    </a>
                                    
                                </li> 
                                 <li>
                                    <a href="<?= base_url('ps/upd') ?>">
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        Input UPD
                                        
                                    </a>
                                    
                                </li> 
                                 <li>
                                    <a href="<?= base_url('ps/prestasi') ?>">
                                        <i class="metismenu-icon pe-7s-medal"></i>
                                        Input Prestasi
                                        
                                    </a>
                                    
                                </li> 
                                <li>
                                    <a href="<?= base_url()?>ps/siswa/<?php echo $this->session->userdata('id_rayon') ?>" >
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        Data Siswa
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?= base_url()?>ps/rapot/<?php echo $this->session->userdata('id_rayon') ?>" >
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        Laporan Semester
                                    </a>
                                </li>
                                
                                 
                                
                                
                        </div>
                    </div>
                </div>   