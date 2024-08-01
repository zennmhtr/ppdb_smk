<!-- <div class="section-header">
    <h3>Detail Pendaftar</h3>
</div> -->
<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="row">
	<div class="col-12 col-sm-8 col-lg-12">
		<div class="card author-box card-primary">
			<div class="card-header">
				<h4><b>AKUN PENDAFTARAN SISWA</b></h4>
				<div class="card-header-action">
				</div>
			</div>
			<div class="card-body">
				<div class="author-box-left">
					<img alt="image" src="../<?= $siswa['foto'] ?>" class="rounded-circle author-box-picture">
					<div class="clearfix"></div>
					<br>
					<div class="author-box-job"><b>Status Akun</b></div>
					<?php if ($siswa['status'] == 1) { ?>
						<span class="badge badge-success">Aktif</span>
					<?php } elseif ($siswa['status'] == 2) { ?>
						<span class="badge badge-danger">Non Aktif</span>
					<?php } else { ?>
						<span class="badge badge-warning">Diverifikasi</span>
					<?php } ?>
				</div>
				<div class="author-box-details">
					<div class="tab-content" id="myTabContent2">
						<div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
							<form id="form-datadiri">
								<div class="form-group row mb-2">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>NISN</b></label>
									<div class="col-sm-12 col-md-6 " >
										<input type="number" name="nisn" class="form-control" value="<?= $siswa['nisn'] ?>" disabled>
									</div>
								</div>
								<div class="form-group row mb-2">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>Password Akun</b></label>
									<div class="col-sm-12 col-md-6">
										<input type="number" name="password" class="form-control" value="<?= $siswa['password'] ?>" disabled>
									</div>
								</div>
								<div class="form-group row mb-2">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>Nama Lengkap</b></label>
									<div class="col-sm-8 col-md-6">
										<input type="text" name="nama" class="form-control" value="<?= $siswa['nama'] ?>" disabled>
									</div>
								</div>
								<div class="form-group row mb-2">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>Jenis Kelamin</b></label>
									<div class="col-sm-12 col-md-6">
										<input type="text" name="tempat" class="form-control" value="<?= ($siswa['jenkel'] == 'L') ? "LAKI - LAKI" : ""; ?>" disabled>	
									</div>
								</div>
								<div class="form-group row mb-2">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>No. Handphone</b></label>
									<div class="col-sm-12 col-md-6">
										<input type="text" name="tempat" class="form-control" value="<?= ($siswa['no_hp']) ?>" disabled>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>