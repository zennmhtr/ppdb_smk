<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="row">
<div class="col-12 col-sm-12 col-lg-12">
<div class="card">
  <div class="card-header">
    <h4><b>PROFILE LEMBAGA SEKOLAH</b></h4>
  </div>
  <div class="card-body">
    <ul class="nav nav-tabs" id="myTab5" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
          <i class="fas fa-home"></i> <b>Profil Sekolah</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
          <i class="fas fa-id-card"></i> <b>Alamat Lembaga</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact" aria-selected="false">
          <i class="fas fa-mail-bulk"></i> <b>Kontak Sekolah</b></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" id="kepala-tab5" data-toggle="tab" href="#kepala5" role="tab" aria-controls="kepala" aria-selected="false">
          <i class="fas fa-mail-bulk"></i> <b>Data Kepala Sekolah</b></a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent5">
      <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
        <form id="form-setting1">
            <div class="card" id="settings-card">
                
                     <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">NSS / NSM</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="nsm" class="form-control" value="<?= $setting['nsm'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">NPSN </label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="npsn" class="form-control" value="<?= $setting['npsn'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Sekolah</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="nama" class="form-control" value="<?= $setting['nama_sekolah'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">Jenjang Sekolah</label>
                        <div class="col-sm-6 col-md-9">
                            
                            <select name="jenjang"  class="form-control input-sm input-select"value="<?= $setting['jenjang'] ?>" >
								  <option value="<?= $setting['jenjang'] ?>" >
										<?php if ($setting['jenjang'] == 1) { ?>
											<span class="badge badge-success">MA/SMA/SMK</span>
										<?php } elseif ($setting['jenjang'] == 2) { ?>
											<span class="badge badge-danger">SMP/MTS </span>
										<?php } else { ?>
											<span class="badge badge-warning">SD/MI</span>
										<?php } ?>
								  </option>
								 <option value="1" >MA/SMA/SMK</option>
                                <option value="2" >SMP/MTS</option>
								<option value="3" >SD/MI</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">Status Sekolah</label>
                        <div class="col-sm-6 col-md-9">
                            
                            <select name="status"  class="form-control input-sm input-select"value="<?= $setting['status'] ?>" required>
                                <option value="<?= $setting['status'] ?>" ><?= $setting['status'] ?></option>
								<option value="Negeri" >Negeri</option>
                                <option value="Swasta" >Swasta</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer bg-whitesmoke text-md-right">
                    <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                </div>
           
        </form>
		 </div>
		  
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-setting1').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_setting/crud_setting.php?pg=profile',
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
                }, 1000);


            }
        });
    });
</script>
      <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
        <form id="form-setting2">
            <div class="card" id="settings-card">
                
                     <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Alamat Lengkap</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="alamat" class="form-control" value="<?= $setting['alamat'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Provinsi </label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="provinsi" class="form-control" value="<?= $setting['provinsi'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kabupaten</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="kab" class="form-control" value="<?= $setting['kab'] ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">Kecamatan</label>
                        <div class="col-sm-6 col-md-9">
                            
                            <input type="text" name="kec" class="form-control" value="<?= $setting['kec'] ?>" required>
                                
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer bg-whitesmoke text-md-right">
                    <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                </div>
            
        </form>
		</form>
		 </div>
		  
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-setting2').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_setting/crud_setting.php?pg=alamat',
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
                }, 1000);


            }
        });
    });
</script>
      
      <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
               <form id="form-setting3">
            <div class="card" id="settings-card">
                
                     <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">No Telepon</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="no_telp" class="form-control" value="<?= $setting['no_telp'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Email </label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="email" class="form-control" value="<?= $setting['email'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Website</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="web" class="form-control" value="<?= $setting['web'] ?>" required>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="card-footer bg-whitesmoke text-md-right">
                    <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                </div>
            
        </form>
		</form>
		 </div>
		  
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-setting3').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_setting/crud_setting.php?pg=kontak',
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
                }, 1000);


            }
        });
    });
</script>
<div class="tab-pane fade" id="kepala5" role="tabpanel" aria-labelledby="kepala-tab5">
               <form id="form-setting4">
            <div class="card" id="settings-card">
                
                     <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Kepala Sekolah</label>
                        <div class="col-sm-6 col-md-9">
                           <input type="text" name="kepala" class="form-control" value="<?= $setting['kepala'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">NIP</label>
                        <div class="col-sm-6 col-md-9">
                            <input type="text" name="nip" class="form-control" value="<?= $setting['nip'] ?>" required>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card-footer bg-whitesmoke text-md-right">
                    <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                </div>
            
        </form>
		</form>
		 </div>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-setting4').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_setting/crud_setting.php?pg=kepala',
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
                }, 1000);


            }
        });
    });
</script>		 
	   </div>
    </div>
  </div>
</div>
</div>
</div>