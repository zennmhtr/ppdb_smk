<?php
require "config/database.php";
require "config/function.php";
require "config/functions.crud.php";
?>
<link href="assets/css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
   <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>LOGIN &mdash; Pendaftar <?= $setting['nama_sekolah'] ?> </title>
	<link rel="shortcut icon" href="assets/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="row">
                            
                            <div class="col-sm-6 d-flex align-items-center">
							<div class="col-md-12 animated bounceInLeft">
								<?php if ($setting['jenjang'] == 1) { ?>
								<div class="card">
									<div class="card-header bg-info">
										<h4>FORMULIR PENDAFTARAN</h4>
									</div>
									<form id="form-daftar">
										<div class="card-body">
											
											<div class="form-group">
												<label for="asal">KOMPETENSI KEAHLIAN</label>
												<select class="form-control select2" style="width: 100%" name="jurusan" id="jurusan" >
													<option value=""></option>
													<?php $qu = mysqli_query($koneksi, "SELECT * FROM jurusan");
													while ($jur = mysqli_fetch_array($qu)) {
													?>
													<option value="<?= $jur['id_jurusan'] ?>"> <?= $jur['nama_jurusan'] ?></option>
													<?php } ?>
												</select>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
													<option value="2">Pindahan</option>
												</select>
												</div>
												<input type="hidden" class="form-control datepicker" name="tgl_daftar" required>
												<div class="form-group col-md-6">
													<label for="nisn">NISN Sebagai Username Anda</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="Masukkan NISN" autocomplete="off" required>
												</div>
											</div>

											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP</label>
												<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off" required>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control datepicker" name="tgllahir" required>
												</div>

											</div>
											<div class="form-group">
												<label for="inputPassword4">PASSWORD ( Mohon Diingat! )</label>
												<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Masukkan Password" required>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>

											<img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
											 </div>
												<div class="form-group col-md-6">
													<input class="form-control" type="text" name="kodepengaman" placeholder="masukan kode" required>
												</div>
										   
											 </div>
										</div>
										<div class="card-header bg-white">
											<button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">DAFTAR</button>
										</div>
									</form>
								</div>
								<?php } else { ?>
								<div class="card">
									<div class="card-header bg-info">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form id="form-daftar2">
										<div class="card-body">
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
													<option value="2">Pindahan</option>
												</select>
												</div>
												<div class="form-group col-md-6">
													<label for="nisn">NISN Sebagai Username Anda</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="Masukkan NISN" autocomplete="off" required>
												</div>
											</div>

											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control datepicker" name="tgllahir" required>
												</div>

											</div>
											<div class="form-group">
												<label for="inputPassword4">PASSWORD  ( Mohon Diingat! )</label>
												<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Masukkan Password" required>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>

											<img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
											 </div>
												<div class="form-group col-md-6">
													<input class="form-control" type="text" name="kodepengaman" placeholder="masukan kode" required>
												</div>
										   
											 </div>
										</div>
										<div class="card-footer">
											<button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">SIMPAN DATA</button>
										</div>
									</form>
								</div>
								<?php } ?>
							</div>
                            </div>
							
                        </div>
                    </div>
</body>
</html>
  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <!-- <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script> -->
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

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
                        title: 'Sukses!',
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