
<?php
    $this->load->View('head');
?>

        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a ondragstart="return false;" href="<?php echo base_url() ;?>home">
                            <img ondragstart="return false;" src="<?php echo base_url() ;?>images/garuda.png" width="200" height="52" alt="Garuda">
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a ondragstart="return false;" href="<?php echo base_url() ;?>home">
                                    <i class="fas fa-sun-o"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a ondragstart="return false;" href="#">
                                    <i class="fas fa-archive"></i>
                                    <span class="bot-line"></span>Data</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a ondragstart="return false;" href="<?php echo base_url() ;?>Business_unit">Business Unit</a>
                                    </li>
                                    <li>
                                        <a ondragstart="return false;" href="<?php echo base_url() ;?>Job">Job</a>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                        </div>

                    <div class="account-wrap">
                            <div class="account-item account-item clearfix js-item-menu">
                                <div class="image">
                                    <img ondragstart="return false;" src="<?php echo base_url() ;?>images/avatar2.png" alt="Avatar" />
                                </div>
                                <div class="content">
                                    <a ondragstart="return false;" class="js-acc-btn" href="#"><?php echo $this->session->userdata('name');?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                                <img ondragstart="return false;" src="<?php echo base_url() ;?>images/avatar2.png" alt="Avatar" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h3 class="name">
                                                <a ondragstart="return false;" href="#"><?php echo $this->session->userdata('name');?></a>
                                            </h3>
                                        </div>
                                    </div>
                                    <?php  if($this->session->userdata('level')==='admin') {?>
                                        <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a ondragstart="return false;" href="<?php echo base_url() ;?>Dataakun">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                        </div>
                                    <?php } ?>
                                        <div class="account-dropdown__footer">
                                                <a ondragstart="return false;" href="<?php echo site_url('Login/logout') ;?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
          </header>
        <!-- END HEADER DESKTOP-->

 <!-- Jquery JS-->
    <script src="<?php echo base_url() ;?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url() ;?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url() ;?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url() ;?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url() ;?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url() ;?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url() ;?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url() ;?>vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ;?>vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ;?>vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url() ;?>vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ;?>js/main.js"></script>
