			<section class='content'>
							<div class='col-md-12'>
								<div class='box box-solid'>
									<div class='box-header'>
										<h3 class='box-title'>KARTU BUKTI PENDAFTARAN</h3>
										<div class='box-tools pull-right btn-group'>
											 <a class="btn btn-primary" href="" role="button"> <?= $siswa['nama'] ?></a>
										</div>
									</div>
									<div class='box-body' style='background:#c3c3c3; '>
									
<style>
			
			.box { border:1px solid #000; width:100%; height:130px; }
		</style>
 <font size="1">
 <font face="arial">
							<div style='background:#fff; width:100%; margin:0 auto; padding:35px; height:100%;'>
							<div  style='width:10.4cm;border:0px solid #666;'cellpadding='2' cellspacing='0' >
								
									<tr>
										<img src="../<?= $setting['kop'] ?>" width="100%" />
									</tr>
									
								
								<hr>
								<table border='0' width='100%' align='center'>
									<tr>
										<td width='100px' valign='top' align='center' rowspan='7'>
									<img src='../<?= $siswa['foto'] ?>' class='img'  style='max-width:60px' alt='+'>
									</td>
									</tr>
									<tr>
										<td valign='top'height='2px'>No Pendaftaran</td>
										<td valign='top'>: <?= $siswa['no_daftar'] ?></td>
									</tr>
									<tr>
										<td valign='top'height='2px'>Nama</td>
										<td valign='top'>: <?= $siswa['nama'] ?></td>
									</tr>
									<tr>
										<td valign='top'height='2px'>Kompetensi Keahlian</td>
										<td valign='top'>: <?= $siswa['jurusan'] ?></td>
									</tr>
									<tr>
										<td valign='top'>Asal Sekolah</td>
										<td valign='top'>: <?= $siswa['asal_sekolah'] ?></td>
									</tr>
									<tr>
										<td valign='top'>Username</td>
										<td valign='top'>: <?= $siswa['nisn'] ?></td>
									</tr>
									<tr>
										<td valign='top'>Password</td>
										<td valign='top'>: <?= $siswa['password'] ?></td>
									</tr>
																		<tr>
										<td></td>
									</tr>

									</table>
									<table  align='center'>
										<tr>
										
										<td valign='' align='left'>
										Kepala Sekolah <br><?= $setting['nama_sekolah'] ?></br><br><br><br>
										<b><?= $setting['kepala'] ?></b><br>
										<b>NIP. <?= $setting['nip'] ?></b>
										
										</td>
									</tr>
									</table>
													
			</div></div>
</font></font>
			</div></div></div></section>