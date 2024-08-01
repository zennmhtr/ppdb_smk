<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
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
           
			<h2 class="section-title"><b>Fitur Upload Berkas</b></h2>
            <p class="section-lead">
              Berkas yang di Upload Wajib Berbentuk Gambar / Foto
            </p>
			
		</td>

<form id="form-berkas">
    <div class="card" id="berkas-card">
       
        <div class="card-body">
            <div class="form-group row align-items-center">
                <h6 class="form-control-label col-sm-3 text-md-right"><b>Kartu Keluarga</b></h6>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="kk" class="custom-file-input" id="site-kk">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                    <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                </div>

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right"><b>Preview</b></label>
                <div class="col-sm-6 col-md-6">
                    <img src="../assets/upload/kk/kk12.jpg"<?= $siswa['kk'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
             <div class="form-group row align-items-center">
                <h6 class="form-control-label col-sm-3 text-md-right"><b>Akta Kelahiran</b></h6>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="akta" class="custom-file-input" id="site-akta">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                    <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                </div>

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right"><b>Preview</b></label>
                <div class="col-sm-6 col-md-6">
                    <img src="../assets/upload/akta/akta12.png"<?= $siswa['akta'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <h6 class="form-control-label col-sm-3 text-md-right"><b>Ijazah/SKL</b></h6>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="ijazah" class="custom-file-input" id="site-ijazah">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                    <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                </div>

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right"><b>Preview</b></label>
                <div class="col-sm-6 col-md-6">
                    <img src="../assets/upload/ijazah/ijazah31.jpg"<?= $siswa['ijazah'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
           <div class="form-group row align-items-center">
                <h6 class="form-control-label col-sm-3 text-md-right"><b>Kartu Indonesia Pintar</b></h6>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="kip" class="custom-file-input" id="site-kip">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                    <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                </div>

            </div>
			<div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right"><b>Preview</b></label>
                <div class="col-sm-6 col-md-6">
                    <img src="../assets/upload/kip/kip85.jpg"<?= $siswa['kip'] ?>" class="img-thumbnail" width="50%">
                </div>
            </div>
           
           
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button type="submit" class="btn btn-primary" id="save-btn"><b>Save Changes</b></button>
            <button class="btn btn-secondary" type="button"><b>Reset</b></button>
        </div>
    </div>
</form>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-berkas').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
             url: 'mod_berkas/crud_berkas.php?pg=ubah',
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




<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kk').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
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
                    title: 'Sukses! ',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-akta').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
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
                    title: 'Sukses! ',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-ijazah').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
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
                    title: 'Sukses! ',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kip').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
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
                    title: 'Sukses! ',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>