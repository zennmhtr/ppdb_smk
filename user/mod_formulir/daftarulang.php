<?php require "fungsi.php"; ?>
<div class="row">
    <div class="col-12 col-sm-8 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4><b>CETAK PENDAFTARAN DAFTAR ULANG</b></h4>
                <div class="card-header-action">
                </div>
            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="image" src="../<?= $siswa['foto'] ?>" class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <br>
                    <div class="author-box-job"><b>Status Pendaftaran</b></div>
                    <?php if ($siswa['status'] == 1) { ?>
                        <span class="badge badge-success">Diterima</span>
                    <?php } else { ?>
                        <span class="badge badge-Warning">Diverifikasi</span>
                    <?php } ?>
                </div>
		
                <div class="author-box-details">

                    
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <form id="form-datadiri">
								<div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>No Pendaftaran</b></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="no" class="form-control" value="<?= $siswa['no_daftar'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>Nama Lengkap</b></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nama" class="form-control" value="<?= $siswa['nama'] ?>"disabled >
                                    </div>
                                </div>
								<div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>NISN</b></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="nisn" class="form-control" value="<?= $siswa['nisn'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>Tempat dan Tanggal Lahir</b></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="tempat" class="form-control" value="<?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?>" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			
			 <?php if ($siswa['konfirmasi'] == 1) { ?>
			 <div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<b>TERIMA KASIH !!!</b><br />
				<b>Data Anda Telah Berhasil<b> <button class="badge badge-danger"> Dikonfirmasi Pada Tanggal  <?= $siswa['tgl_konfirmasi'] ?></button>
			</div>
			<div class="card-body">
		<div class="row">
		<div class="col-lg-4">
			
                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            1
                        </div>
                        <div class="activity-detail">
                            <h5>Formulir Anda</h5>
                           <a target="_blank" href="mod_formulir/print_du.php?id=<?= enkripsi($siswa['id_daftar']) ?>" type="button" class="badge badge-primary"><i class="fas fa-download    "></i> Download</a>
                        </div>
                    </div>

                </div>
				</div>
				<div class="col-lg-4">
			
                <!--<div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            2
                        </div>
                        <div class="activity-detail">
                            <h5>Kartu Pendaftar</h5>
                            <a href="?pg=kartu" type="button" class="badge badge-success"><i class="fas fa-eye    "></i> Lihat Kartu </a>
                        </div>
                    </div>

                </div>
				</div>
				<div class="col-lg-4">
			
                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            3
                        </div>
                        <div class="activity-detail">
                            <h5>Berkas Lainnya</h5>
                            <p><span class="badge badge-warning"><i class="fas fa-download    "></i>
                                    Download</span></p>
                        </div>
                    </div>

                </div>
				</div>-->
				</div>
				</div>
			
			
			
			
			
			
			<?php } else { ?>
			<div class="card-footer">
			<p><b>Dengan Ini Saya Menyatakan dengan sebenar benarnya Bahwa data yang saya kirim adalah benar dan sudah sesuai dengan Berkas yang ada, dan saya bertanggung jawab atas semua data yang telah dikirim melalui Aplikasi ini</b> </p>
			</div>
						
		<form id="form-konfirmasi">
					<input type="date" name="tgl_konfirmasi" class="form-control datepicker" value="<?= $daftar['tgl_konfirmasi'] ?>"hidden >
				
			
									
									<div class="form-group">
				
									
									<center><button type="submit" class="btn btn-primary btn-lg mt-2"><b>KONFIRMASI DATA</b></button></center>
			</div>
		</form>
		<?php } ?>
		</div>
		
    </div>

</div>


<style type="text/css">
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:10% auto;
		position: relative;
		width: 300px;
		color: #fff;
		text-decoration: none;
		background-color: #FFBA00;
		border-radius: 3px;
		box-shadow: 0 5px 0px 0px #eea900;
		display: block;
	}
	a.popup-link:hover {
		background-color: #ff9900;
		box-shadow: 0 3px 0px 0px #eea900;
		-webkit-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/
	/* animasi popup */

	@-webkit-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@-moz-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	/* end animasi popup */
	/*style untuk popup */	
	#popup {
		background-color: rgba(0,0,0,0.8);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		-webkit-animation:autopopup 2s;
		-moz-animation:autopopup 2s;
		animation:autopopup 2s;
	}
	#popup:target {
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
		opacity: 0;
		visibility: hidden;
	}

	@media (min-width: 768px){
		.popup-container {
			width:600px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:100%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:30px 50px;
		background-color: #fafafa;
		color:#333;
		border-radius: 3px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #333;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#fff;
	}
	/* end style popup */

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			font-size: 37px;
			text-transform: uppercase;
		}
		.popup-form .input-group {
			margin:10px auto;
		}
			.popup-form .input-group input {
				padding:17px;
				text-align: center;
				margin-bottom: 10px;
				border-radius:3px;
				font-size: 16px; 
				display: block;
				width: 100%;
			}
			.popup-form .input-group input:focus {
				outline-color:#FB8833; 
			}
			.popup-form .input-group input[type="email"] {
				border:0px;
				position: relative;
			}
			.popup-form .input-group input[type="submit"] {
				background-color: #FB8833;
				color: #fff;
				border: 0;
				cursor: pointer;
			}
			.popup-form .input-group input[type="submit"]:focus {
				box-shadow: inset 0 3px 7px 3px #ea7722;
			}
	/* end style isi popup */

	</style>
<?php if ($siswa['konfirmasi'] == 1) { ?>
<div class="popup-wrapper" id="popup">
	<div class="popup-container bg-green">

		<h3>HAI, <?= $siswa['nama'] ?> !!</h3>
		<form action="" method="post" class="popup-form">
			
			 <div class="alert alert-success alert-dismissable">
				TERIMA KASIH !!!<br />
				DATA ANDA TELAH BERHASIL DITERIMA OLEH ADMIN
				<br>
				<br>
				<button class="badge badge-danger"> Dikonfirmasi Pada Tanggal  <?= $siswa['tgl_konfirmasi'] ?></button>
			</div>
			
			
		</form>
		<a class="popup-close" href="#popup">X</a>
	</div>
</div>
<?php } else { ?>
<div class="popup-wrapper" id="popup">
	<div class="popup-container bg-green">

		<!-- Konten popup, silahkan ganti sesuai kebutughan -->
		<form action="" method="post" class="popup-form">
			<h3>INFO PPDB <?= date('Y') ?></h3>
			<h4>HAI, <?= $siswa['nama'] ?> !!</h4>
			<p>Silahkan Konfirmasi Jika anda Tetap Untuk Lanjut di <strong> <?= $setting['nama_sekolah'] ?> !! </strong><br/>
			<strong>Jika tidak Konfirmasi, Maka di anggap Mengundurkan Diri</strong></p>
			<div class="input-group">
				<a href="#popup"class="badge badge-warning"><b>Tutup!</b></a>
			</div>
		</form>
		<a class="popup-close" href="#popup">X</a>
	</div>
</div>
<?php } ?>


<script>
$('#form-konfirmasi').submit(function(e) {
            e.preventDefault();
        swal({
            title: 'Apakah Kamu Yakin ?',
            text: 'Akan Mengkonfirmasi Data Anda ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_formulir/crud_formulir.php?pg=konfirmasi',
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        iziToast.success({
                            title: 'Terimakasih!',
                            message: 'Data Berhasil Di Konfirmasi',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    }
                });
            }
        })

    });
</script>