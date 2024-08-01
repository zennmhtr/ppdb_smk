<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<section class='content'>
														<div class='row'>
						<div class='col-md-12 notif'></div>
						<div class='col-md-6'>
							<form id="form-setting">
								<div class='box box-solid'>
									<div class='box-header with-border'>
										<h3 class='box-title'><b>PENGATURAN APLIKASI</b></h3>
										<div class='box-tools pull-right btn-group'>
											<button type='submit' id="save-btn" class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> <b>Simpan</b></button>
										</div>
									</div><!-- /.box-header -->
									<div class='box-body'>
										<div class='form-group'>
											<label><b>Nama Sekolah</b></label>
											<input type='text' name='nama_sekolah' value="<?= $setting['nama_sekolah'] ?>" class='form-control' required='true' />
										</div>
										<div class='form-group'>
											<div class='row'>
												<div class='col-md-6'>
													<label><b>NSM / NSS Sekolah</b></label>
													<input type='text' name='nsm' value="<?= $setting['nsm'] ?>" class='form-control' required='true' />
												</div>
												<div class='col-md-6'>
													<label><b>NPSN Sekolah</b></label>
													<input type='text' name='npsn' value="<?= $setting['npsn'] ?>" class='form-control' required='true' />
												</div>
											</div>
										</div>
										
										<div class='form-group'>
											<div class='row'>
												<div class="col-sm-6 col-md-6">
													<label><b>Logo</b></label>
													<input type='file' name='logo' class='form-control' />
												</div>
												<div class="col-sm-6 col-md-6">
													&nbsp;<br />
													 <img src="../<?= $setting['logo'] ?>" class="img-thumbnail" width="100">
												</div>
											</div>
										</div>
										<div class='form-group'>
											<div class='row'>
												<div class='col-md-12'>
													<label><b>Kop Sekolah</b></label>
													<input type='file' name='kop' class='form-control' />
												</div>
												<div class="col-sm-6 col-md-12">
													&nbsp;<br />
													 <img src="../<?= $setting['kop'] ?>" class="img-thumbnail" width="800">
												</div>
											</div>
										</div>
										<div class='form-group'>
											<div class='row'>
												<div class='col-md-12'>
													<label><b>Logo PPDB</b></label>
													<input type='file' name='logo_ppdb' class='form-control' />
												</div>
												<div class="col-sm-6 col-md-12">
													&nbsp;<br />
													 <img src="../<?= $setting['logo_ppdb'] ?>" class="img-thumbnail" width="800">
												</div>
											</div>
										</div>
										
									</div><!-- /.box-body -->
								</div><!-- /.box -->
							</form>
						</div>
						<script>
						$('.custom-file-input').on('change', function() {
							let fileName = $(this).val().split('\\').pop();
							$(this).next('.custom-file-label').addClass("selected").html(fileName);
						});
						$('#form-setting').on('submit', function(e) {
							e.preventDefault();
							$.ajax({
								type: 'post',
								url: 'mod_setting/crud_setting.php?pg=ubah',
								data: new FormData(this),
								processData: false,
								contentType: false,
								cache: false,
								beforeSend: function() {
									$('form button').on("click", function(e) {
										e.preventDefault();
									});
								},
								success: function(data) {

									iziToast.success({
										title: 'Sukses!',
										message: data,
										position: 'topRight'
									});
									setTimeout(function() {
										window.location.reload();
									}, 2000);


								}
							});
						});
					</script>
						<div class='col-md-6'>
							<form id="form-setting">
								<div class='box box-solid'>
									<div class='box-header with-border'>
										<h3 class='box-title'><b>PENGATURAN PPDB</b></h3>
										<div class='box-tools pull-right btn-group'>
											<button type='' id="btn" class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> </button>
										</div>
									</div><!-- /.box-header -->
									<div class='box-body'>
										<div class="row">
										  
										<div class="col-lg-12">
										<div class="card card-large-icons">
										  <div class="card-icon bg-success text-white">
											<i class="fas fa-users"></i>
										  </div>
										  <div class="card-body">
											<h4>PPDB Online</h4>
											<p>Penggunaan Fitur PPDB Online bisa di setting di sisi</p>
											<a href="?pg=s_ppdb" class="card-cta"><b>Change Setting</b> <i class="fas fa-chevron-right"></i></a>
										  </div>
										</div>
									  </div>
									 
									  
									 
									  <div class="col-lg-12">
										<div class="card card-large-icons">
										  <div class="card-icon bg-dark text-white">
											<i class="fas fa-phone"></i>
										  </div>
										  <div class="card-body">
											<h4>Kontak Pendaftaran</h4>
											<p>Silahkan Atur Kontak Pendaftaran Disini.</p>
											<a href="?pg=kontak" class="card-cta"><b>Change Setting</b> <i class="fas fa-chevron-right"></i></a>
										  </div>
										</div>
									  </div>
									 
									  
									 
									  <div class="col-lg-12">
										<div class="card card-large-icons">
										  <div class="card-icon bg-warning text-white">
											<i class="fas fa-edit"></i>
										  </div>
										  <div class="card-body">
											<h4>Info PPDB</h4>
											<p>Setting pengaturan info PPDB Anda disini.</p>
											<a href="?pg=pengumuman" class="card-cta"><b>Change Setting</b> <i class="fas fa-chevron-right"></i></a>
										  </div>
										</div>
									  </div>
									  <div class="col-lg-12">
										<div class="card card-large-icons">
										  <div class="card-icon bg-info text-white">
											<i class="fas fa-lock"></i>
										  </div>
										  <div class="card-body">
											<h4>Backup And Restore</h4>
											<p>Silahkan Backup dan restore File database anda Disini</p>
											<a href="?pg=backup" class="card-cta"><b>Change Setting</b> <i class="fas fa-chevron-right"></i></a>
										  </div>
										</div>
									  </div>
			  
			  
			
									
										
										
									</div><!-- /.box-body -->
								</div><!-- /.box -->
							</form>
						</div>
						
						
					</div>
												</section><!-- /.content -->

														<div class='row'>
						<div class='col-md-12 notif'></div>
						<div class='col-md-12'>
							<form id="form-live">
								<div class='box box-solid'>
									<div class='box-header with-border'>
										<h3 class='box-title'><b>PENGATURAN LIVE CHAT</b></h3>
										<div class='box-tools pull-right btn-group'>
											<button type='submit' id="save-btn" class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> <b>Simpan</b></button>
										</div>
									</div><!-- /.box-header -->
									<div class='box-body'>
											<div class='form-group'>
											<label><b>Text Klik Chat Daftar</b></label>
											<textarea class="form-control" name="klikchat"><?= $setting['klikchat'] ?></textarea>
										</div>
										<div class='form-group'>
											<label><b>Text Live Chat</b></label>
											<textarea class="form-control" name="livechat"><?= $setting['livechat'] ?></textarea>
										</div>
										<div class='form-group'>
											<label><b>No WA Live Chat</b></label>
											<input type="text" name="nolivechat" class="form-control" value="<?= $setting['nolivechat'] ?>" required>
										</div>
										
										
										
										
										
										
										
									</div><!-- /.box-body -->
								</div><!-- /.box -->
							</form>
						</div>
						</div>
						<script>
   
    $('#form-live').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_setting/crud_setting.php?pg=live',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap!',
                    message: data,
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>