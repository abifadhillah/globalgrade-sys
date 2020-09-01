<html>
<!-- Title Page-->
<title>Garuda Indonesia &mdash; Data Business Unit</title>

<?php
    $this->load->View('head');

?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.css">

<body>

    <!-- Left Panel -->
<?php
    $this->load->View('navbar');
?>

    <br>

           <div class="typo-headers">
            <h2 ondragstart="return false;" class="display-10">&nbsp;&nbsp;Data Business Unit</h2></div>
            <hr>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#tambahbusinessunit">Tambah Data Business Unit</button>
                <br><br>
                      <!-- DATA TABLE-->
                      <div class="table-responsive m-b-30">
                        <div></div>
                        <table class="table table-striped" align="center" id="Databusinessunit">
                        <thead align="center">
                      <tr>
                         <th>No</th>
                          <th>Code Company</th>
                          <th>Company Name</th>
                          <th>Revenue</th>
                          <th>Fte</th>
                          <th>Company Role</th>
                          <th>Biz Diversity</th>
                          <th>Biz Complexity</th>
                          <th>Geo Breadth</th>
                          <th>Grade Sub</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody ondragstart="return false;" align="center">
                    </tbody>
                  </table>
            </div>
            </div>
          </div>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</html>
