<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Garuda Indonesia - Home</title>

<?php
$this->load->View('head');
?>

<!-- Left Panel -->
<?php
$this->load->View('navbar');
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<body>
  <!-- alert -->
  <section class="au-breadcrumb2">
    <div class="container">
      <div class="row">
        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
          <i class="zmdi zmdi-check-circle"></i>
          <span ondragstart="return false;" class="content">Selamat Datang <?php echo $this->session->userdata('name'); ?></span>
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
              <i class="zmdi zmdi-close-circle"></i>
            </span>
          </button>
        </div>
  </section>

  <center ondragstart="return false;">
    <h2 ondragstart="return false;" class="pb-2 display-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quick Access</h2>
    <hr ondragstart="return false;" width="80%">
  </center>
  <div class="section_content section_content--p30">
    <section class="au-breadcrumb2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-3">
            <div class="statistic__item statistic__item--blue">
              <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>Business_unit">
                  <h3 class="title-2 m-b-40">Business Unit</h3>
                  <div class="icon">
                    <i class="zmdi zmdi-accounts"></i>
                  </div>
              </div>
            </div>
          </div></a>

          <div class="col-md-12 col-lg-3">
            <div class="statistic__item statistic__item--orange">
              <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>Job">
                  <h3 ondragstart="return false;" class="title-2 m-b-40">Job</h3>
                  <div class="icon">
                    <i class="zmdi zmdi-pin-account"></i>
                  </div>
              </div>
            </div>
          </div></a>
        </div>
      </div>
  </div>
  </div>

  <div class="section_content section_content--p30">
    <section class="au-breadcrumb2">
      <div class="container-fluid">
        <div class="row">
        </div>
      </div>
    </section>
  </div>


  <!-- COPYRIGHT-->
  <div class="footer">
    <section class="p-t-80 p-b-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <p ondragstart="return false;">Copyright © 2019 Garuda Indonesia. All rights reserved. Made with ❤.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- END COPYRIGHT-->

</body>

</html>
<!-- end document-->