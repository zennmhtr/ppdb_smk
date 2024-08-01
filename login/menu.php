 <?php
	$akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
	$awal = new DateTime(); // Waktu sekarang atau akhir
	$diff  = $awal->diff($akhir);

	?>
	
	<ul class="sidebar-menu ">
    <li class="menu-header bg-warning"></li>
	
	
	
    <?php if ($user['level'] == 'admin') { ?>
    <?php } ?>

    <li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-home fa-fw"></i> <span><b>Kelembagaan</b></span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link text-success" href="?pg=profil_lembaga"><b>Profil Lembaga</b></a></li>               
            </ul>
        </li>
    
    <li class="dropdown ">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span><b>Data PPDB</b></span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="?pg=daftar"><b>Semua Data</b></a></li>
			<li><a class="nav-link" href="?pg=berkas_ppdb"><b>Daftar Berkas</b></a></li>
            <li><a class="nav-link text-success" href="?pg=diterima"><b>Data Diterima</b></a></li>
			<li><a class="nav-link text-warning" href="?pg=df_ulang"><b>Data Daftar Ulang</b></a></li>
            <li><a class="nav-link text-danger" href="?pg=ditolak"><b>Data Ditolak / Cadangan</b></a></li>
			<li><a class="nav-link text-primary" href="?pg=bayar"><b>Data Pembayaran</b></a></li>
        </ul>
    </li>
	<?php if ($user['level'] == 'admin') { ?>
        <li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire fa-fw"></i> <span><b>Data Master</b></span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link text-danger" href="?pg=sekolah"><b>Data Master Sekolah</b></a></li>
                <li><a class="nav-link text-warning" href="?pg=jurusan"><b>Data Master Jurusan</b></a></li>
                <li><a class="nav-link text-success" href="?pg=jenis"><b>Data Master Jenis Daftar</b></a></li>
            </ul>
        </li>
    <?php } ?>
	<?php if ($user['level'] == 'admin') { ?>
        <li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-print"></i> <span><b>Cetak Data</b></span></a>
            <ul class="dropdown-menu">
				<li><a class="nav-link text-success" href="?pg=l_ppdbyes"><b>Data Penerimaan PPDB</b></a></li>
				
               
            </ul>
        </li>
		<li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span><b>Akun</b></span></a>
            <ul class="dropdown-menu">
				<li><a class="nav-link text-primary" href="?pg=user"><b>Akun Admin</b></a></li>
            </ul>
        </li>
    <?php } ?>
	
	
	<?php if ($akhir <= $awal) { ?>
	<?php } ?>

    

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <button type="button" class="btn btn-primary btn-lg btn-block btn-icon-split"data-toggle="modal" data-target="#ppdb">
              <i class="fas fa-rocket"></i> <b>AKTIFKAN PPDB</b>
            </button>
          </div>
</ul>
<div class="modal fade" id="ppdb" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-ppdb">
                <div class="modal-header">
                    <h5 class="modal-title">Silahkan Pilih Tanggal PPDB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    Silahkan Sesuaikan Tanggal Mulai PPDB DISINI
					<input type="date" name="tgl_pengumuman" class="form-control" value="<?= $setting['tgl_pengumuman'] ?>" >
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#form-ppdb').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_setting/crud_setting.php?pg=aktifppdb',
            data: $(this).serialize(),
            success: function(data) {
                if (data == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Data Berhasil diaktifkan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                    $('#tambahdata').modal('hide');
                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: 'Data Gagal ditambahkan ',
                        position: 'topRight'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
</script>