<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile saya</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <link href="assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">

  <div class="wrapper ">
   <!-- include sidebar -->
   <?php  include 'assets/template/sidebar.php'; ?>

   <div class="main-panel">
    <!-- iclude top-nav -->
    <?php include 'assets/template/top-nav.php'; ?>

    <div class="content">
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-12">
              <div class="row">

                <div class="col-lg-8 col-md-8">
                  <div class="card">
                    <div class="card-header card-header-icon card-header-success">
                      <div class="card-icon">
                        <i class="material-icons">person_outline</i>
                      </div>
                      <h4 class="card-title title-per-section">
                        Edit profile Saya
                      </h4>
                    </div>
                    <div class="card-body">
                     <!--  <p class="text-center">
                        <img src="assets/img/avatar-user.svg" class="img-my-profile" alt="">
                      </p> -->
                      <form method="#" action="#">
                        <div class="row mt-4">

                          <div class="form-group col-12 mb-2">
                            <label for="nipform" class="bmd-label-floating">NIP...</label>
                            <input type="number" class="form-control" id="nipform">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="nameform" class="bmd-label-floating">Nama...</label>
                            <input type="text" class="form-control" id="nameform">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="jabatanform" class="bmd-label-floating">Jabatan...</label>
                            <input type="text" class="form-control" id="jabatanform">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="golonganform" class="bmd-label-floating">Golongan...</label>
                            <input type="text" class="form-control" id="golonganform">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="usernameform" class="bmd-label-floating">Username...</label>
                            <input type="text" class="form-control" id="usernameform">
                          </div>

                          <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-success float-right">
                              <i class="material-icons">save</i>&nbsp;
                              <span>Simpan</span>
                            </button>
                          </div>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="#pablo">
                       <img src="assets/img/marc.jpg"  alt="">
                     </a>
                   </div>
                   <div class="card-body">
                    <h6 class="card-category text-gray">145795458</h6>
                    <h3 class="card-title"><b>User 1</b></h3>
                    <h5 class="card-description mt-2">Jabatan admin</h5>
                    <p class="card-description">Golongan G1</p>
                    <p class="alert alert-rose">username@admin</p>
                  </div>
                </div>
              </div>

            </div>
          </div>           

        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap-material-design.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!-- Plugin for the momentJs  -->
<script src="assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>  
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>