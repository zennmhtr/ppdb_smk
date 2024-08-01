<ul class="sidebar-menu">
    <li class="menu-header bg-warning"></li>
		<li><a class="nav-link" href="?pg=formulir"><i class="fas fa-indent"></i> <span><b>Formulir</b></span></a></li>
		<li><a class="nav-link" href="?pg=berkas"><i class="fas fa-upload    "></i> <span><b>Upload Berkas</b></span></a></li>
		<li><a class="nav-link" href="?pg=cetakkartu"><i class="fas fa-print"></i> <span><b>Cetak Kartu Pendaftaran</b></span></a></li>
		<li><a class="nav-link" href="?pg=user"><i class="fas fa-user"></i> <span><b>Akun Siswa</b></span></a></li>
		<?php if ($siswa['status'] == 1) { ?>
		<li><a class="nav-link" href="?pg=df_ulang"><i class="fas fa-address-card   "></i> <span><b>Daftar Ulang</b></span><small class="label pull-right badge badge-danger">Wajib</small></a></li>
		<?php } else { 
			?>
		<?php } 
			?>
		<?php if ($siswa['status'] == 1) { ?>
			<li><a class="nav-link" href="?pg=bayar"><i class="fas fa-funnel-dollar fa-fw"></i> <span><b>Pembayaran</b></span></a></li>
		<?php } else { 
			?>
		<?php } ?>
		<li><a class="nav-link" href="?pg=pengumuman"><i class="fas fa-bullhorn fa-fw"></i> <span><b>Pengumuman</b></span></a></li>
</ul>
<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://<?= $setting['web'] ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
		  