<?php
session_start();
require("../config/database.php");
require("../config/function.php");
require("../config/functions.crud.php");


if (isset($_SESSION['id_user'])) {
  $user = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'"));
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PPDB | <?= $setting['nama_sekolah'] ?></title>

    <link rel="shortcut icon" href="../<?= $setting['logo'] ?>" />
    <!-- General CSS Files -->

    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <link rel='stylesheet' href='../dist/css/AdminLTE.css' />
    <link rel='stylesheet' href='../dist/css/costum.css' />


    <!-- CSS Libraries
    <link rel="stylesheet" href="../assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="../assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css"> -->

    <!-- CSS TOASTR -->
    <link rel="stylesheet" href="../assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="../assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">

    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="../assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->

    <script src="../assets/modules/jquery.min.js"></script>
    <!-- JS Libraies -->
    <script src="../assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="../assets/modules/sweetalert/sweetalert.min.js"></script>
    <!-- JS Libraies -->
    <script src="../assets/modules/cleave-js/dist/cleave.min.js"></script>
    <style>
      .btn {
        cursor: pointer
      }

      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
        opacity: 0.8;
      }

      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font: 14px arial;
      }
    </style>



    <!-- <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-94034622-3');
    </script> -->
    <!-- /END GA -->
    <style>
      .modal-backdrop {
        position: inherit;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 900;
        background-color: #000;

      }
    </style>
    <!-- Smartsupp Live Chat script -->
    <!-- <script type="text/javascript">
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '77ed94a8e63dac9adf98be37bff919ff119b315b';
      window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
          o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
      })(document);
    </script> -->
  </head>


  <body class="fixed-navbar fixed-layout">


    <div id="app">

      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">

              <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i>
              </a>
            </ul>

          </form>




        </nav>

        <script>
          // Function ini dijalankan ketika Halaman ini dibuka pada browser
          $(function() {
            setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
          });

          //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
          function timestamp() {
            $.ajax({
              url: 'waktu.php',
              success: function(data) {
                $('#timestamp').html(data);
              },
            });
          }
        </script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../assets/css/user.css">


      </div>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">

          <div class="sidebar-brand bg-info">
            <img src="../<?= $setting['logo_ppdb'] ?>" width="200" alt="LOGO">&nbsp;
          </div>
          <div class="menu-header">

            <ul>
              <li>
                <a style="color:#f9f9f9" href="." class="btn-home">
                  <span class="fas fa-home "></span><br><b>Home</b>
                </a>
              </li>
              <li>
                <a style="color:#f9f9f9" class="btn-setting" href="?pg=setting">
                  <span class="fas fa-user-cog "></span><br><b>Setting</b>
                </a>
              </li>
              <li>
                <a style="color:#f9f9f9" href="logout.php" class="btn-logout"> <span class="fas fa-sign-out-alt  "></span><br><b>Logout</b></a>
              </li>
            </ul>
          </div>

          <script>
            $(document).ready(function() {
              $('.btn-logout').on('click', function(e) {
                e.preventDefault(); // Prevent the default action of the link/button
                swal({
                  title: 'Apakah Anda Yakin?',
                  text: 'Akan Keluar dari Sistem ini !',
                  icon: 'warning',
                  buttons: true,
                  dangerMode: true,
                }).then((willLogout) => {
                  if (willLogout) { 
                    $.ajax({
                      type: 'POST',
                      url: 'logout.php', 
                      beforeSend: function() {
                        $('.btn-logout').prop('disabled', true); 
                      },
                      success: function(data) {
                        var json = $.parseJSON(data); 
                        $('.btn-logout').prop('disabled', false); 
                        if (json.status == 'success') {
                          iziToast.success({
                            title: 'Sukses!',
                            message: 'Logout Berhasil',
                            position: 'topRight'
                          });
                          setTimeout(function() {
                            window.location.href = '../login'; 
                          }, 2000);
                        } else {
                          iziToast.error({
                            title: 'Gagal!',
                            message: json.message || 'Logout Gagal.',
                            position: 'topCenter'
                          });
                        }
                      },
                      error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error); 
                        iziToast.error({
                          title: 'Gagal!',
                          message: 'Logout Gagal.',
                          position: 'topCenter'
                        });
                        $('.btn-logout').prop('disabled', false); 
                      }
                    });
                  }
                });
              });
            });
          </script>

          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PPDB</a>
          </div>


          <?php include "menu.php" ?>

        </aside>
      </div>

      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <?php include "content.php"; ?>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y') ?> PPDB | <?= $setting['nama_sekolah'] ?>
        </div>
        <div class="footer-right">
          Versi 1.3

        </div>
      </footer>
    </div>

    </div>

    <!-- General JS Scripts -->

    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <!-- <script src="../assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/modules/chart.min.js"></script>
    <script src="../assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

    <!-- JS DATATABLE -->
    <script src="../assets/modules/datatables/datatables.min.js"></script>
    <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific DATATABLE -->
    <script src="../assets/js/page/modules-datatables.js"></script>
    <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index-0.js"></script>


    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script type="text/javascript">
      var url = window.location;
      // for sidebar menu entirely but not cover treeview
      $('ul.sidebar-menu a').filter(function() {
        return this.href == url;
      }).parent().addClass('active');

      // for treeview
      $('ul.dropdown-menu a').filter(function() {
        return this.href == url;
      }).closest('.treeview').addClass('active');
    </script>

    <!-- <script type='text/javascript' data-cfasync='false'>
      window.purechatApi = {
        l: [],
        t: [],
        on: function() {
          this.l.push(arguments);
        }
      };
      (function() {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function(e) {
          if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
            var w = new PCWidget({
              c: '3a902ebc-63db-4345-b136-90e1351bd3bd',
              f: true
            });
            done = true;
          }
        };
      })();
    </script> -->
  </body>

  </html>
<?php
} else {
  include "masuk.php";
}

?>