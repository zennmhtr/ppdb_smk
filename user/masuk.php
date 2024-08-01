<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>Halaman | Login Siswa</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ard.www.mr-ell.com/assets/mtc/app/js/webfont.js" type="text/javascript"></script>
	<script>
		WebFont.load({
			google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->

	<!--begin::Global Theme Styles -->
	<link href="https://ard.www.mr-ell.com/assets/mtc/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
	<link href="https://ard.www.mr-ell.com/assets/mtc/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--RTL version:<link href="assets/demo/demo3/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<link href="https://ard.www.mr-ell.com/assets/mtc/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

	<!--end::Global Theme Styles -->

	<!--begin::Page Vendors Styles -->
	<link href="https://ard.www.mr-ell.com/assets/mtc/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Page Vendors Styles -->
	  <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="../assets/modules/izitoast/css/iziToast.min.css">
	<link rel="shortcut icon" href="../<?= $setting['logo'] ?>" />
	<link rel="stylesheet" href="https://ard.www.mr-ell.com/assets/css/custom.css">
	<script src="https://ard.www.mr-ell.com/assets/mtc/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="https://ard.www.mr-ell.com/assets/mtc/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>
			<style>
			body{
				color : white;
				background : -webkit-linear-gradient(top, rgba(40,57,59,1) 0%, rgba(10,70,90,1) 50%, rgba(40,57,59,1) 100%)
			}
		</style>
	
	<style>
		.form-login{
			margin : 2em;
		}
		.btn-login{
			margin : 0 2em;
		}
		.gambar-login{
			border-radius: 200px 0px 0px 200px;
		}
		.avatar{
			width: 95px;
			height: 95px;
			top : -50px;
			left: 0;
			right: 0;
			position: absolute;
			border-radius: 50%;
			background: white;
			box-shadow: 0px 10px 10px #ececec;
			padding: 15px;
			z-index : 9;
			margin : 0 auto;
		}
	</style>
</head>
<body >
	<div class="row" style="height: 90%;width: 100%;padding: 10% 13% 13% 13%;">
		<div class="col-lg-1"></div>
		<div class="col-lg-5 m--visible-desktop" style="padding:0 3%;" align="right">
			<img src="../assets/img/mts.png" alt="" width="100%" height="100%" class="gambar-login" style="box-shadow: 0px 5px 5px grey">
		</div>
		<div class="col-lg-5 col-md-12 col-sm-12 col-12" style="color:grey;background:#ececec;box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3)">
			<div class="avatar" align="center">
				<img src="../<?= $setting['logo'] ?>" alt="" height="100%" width="100%">
			</div>
			<div align="center" style="margin-top: 6em;">
				<form id="form-login">
					<h4>Halaman Login Siswa</h4>
					<input type="text" class="form-control m-input" style="margin-bottom:20px;margin-top:30px" placeholder="Username" name="username" required="">
					<input type="password" class="form-control m-input" style="margin-bottom:20px" placeholder="Password" name="password" required="">
					<input type="submit" class="btn btn-danger" style="margin-bottom: 40px;width: 100%" value="Masuk">
				</form>	
			</div>
			<div align="right">
				copyright &copy; Zaini Muhtarom
			</div>
		</div>
		<div class="col-lg-1">
		</div>
	</div>
	<script src="https://ard.www.mr-ell.com/assets/js/sweetalert.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
					});
	</script>
	
</body>
</html>
<!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <!-- <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script> -->
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="../assets/modules/izitoast/js/iziToast.min.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script>
    $('#form-login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'login_cek.php?pg=login',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Login Berhasil',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.href = "";
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
</body>
</html>
