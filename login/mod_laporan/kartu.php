<style type="text/css">
	.ttd{
		position: absolute;
		z-index: -1;
	}
</style>
<?php ob_start();
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
include "../../assets/modules/phpqrcode/qrlib.php";
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
$siswa = fetch($koneksi, 'daftar', ['id_daftar']);
$tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

//isi qrcode jika di scan
$codeContents = $siswa['nisn'] . '-' . $siswa['nama'];

//simpan file kedalam temp
//nilai konfigurasi Frame di bawah 4 tidak direkomendasikan

QRcode::png($codeContents, $tempdir . $siswa['nisn'] . '.png', QR_ECLEVEL_M, 4);

?>
<style>
	* {
		font-size: x-small;
	}

	.box {
		border: 1px solid #000;
		width: 100%;
		height: 150px;
	}
	.ukuran{
		font-size: 15px;
	}
	.ukuran2{
		font-size: 12px;
	}
	.user{
		font-size: 15px;
	}
</style>
<table width='100%' align='center' cellpadding='10'>
							<div style='background:#fff; width:80%; margin:0 auto; padding:35px; height:100%;'>
							<td width='50%'>
							<div  style='width:10.4cm;border:0px solid #666;'cellpadding='2' cellspacing='0' >
								
									<tr>
										<img src="../../<?= $setting['kop'] ?>" width="100%" />
									</tr>
									
								
								<hr>
								<table border='0' width='50%' align='center'>
								<tr>
										<img src="../../<?= $setting['kop'] ?>" width="100%" />
									</tr>
									
								
								<hr>
									<tr>
										<td width='100px' valign='top' align='center' rowspan='7'>
									<img src='../../<?= $siswa['foto'] ?>' class='img'  style='max-width:60px' alt='+'>
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
										<td valign='' align='left'> <img class="img" src="mod_laporan/temp/<?= $siswa['nisn'] ?>.png" ec="H" style="width: 10mm; background-color: white; color: black;"></td>
										<td valign='' align='left'>
										Kepala Sekolah <br><?= $setting['nama_sekolah'] ?></br><br><br><br>
										<b><?= $setting['kepala'] ?></b><br>
										<b>NIP. <?= $setting['nip'] ?></b>
										
										</td>
									</tr>
									</table>
													
			</div>
			</td>
			</div>
		</table>