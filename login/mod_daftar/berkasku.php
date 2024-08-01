<!-- Modal -->
<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php $siswa = fetch($koneksi, 'daftar', ['id_daftar' => dekripsi($_GET['id'])]); ?>
          <div class="section-header">
            <div class="section-header-back">
              <a href="." class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Berkas PPDB Online</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href='.'>Dashboard</a></div>
              <div class="breadcrumb-item active">Upload</a></div>
              
            </div>
          </div>

         <td>
		 <div class="section-body">
           
			<h2 class="section-title">Data Berkas Yang Sudah Di Upload</h2>
            <p class="section-lead">
              
            </p>
			
		</td>

<form id="form-berkas">
    <div class="card" id="berkas-card">
       
        <div class="card-body">
           
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Kartu Keluarga</label>
                

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-6">
                    <img src="../<?= $siswa['kk'] ?>" class="img-thumbnail" width="50%">
                </div>
				
            </div>
             <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Akta Kelahiran</label>
               

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-6">
                    <img src="../<?= $siswa['akta'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Ijazah/SKL</label>
                

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-6">
                    <img src="../<?= $siswa['ijazah'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
           <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Kartu Indonesia Pintar</label>
               

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-6">
                    <img src="../<?= $siswa['kip'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
           
           
        </div>
       
    </div>
</form>

