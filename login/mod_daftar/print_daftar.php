<?php ob_start();
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
include "../../assets/modules/phpqrcode/qrlib.php";
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
$siswa = fetch($koneksi, 'daftar', ['id_daftar' => dekripsi($_GET['id'])]);
$tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

//isi qrcode jika di scan
$codeContents = $siswa['nisn'] . '-' . $siswa['nama'];

//simpan file kedalam temp
//nilai konfigurasi Frame di bawah 4 tidak direkomendasikan

QRcode::png($codeContents, $tempdir . $siswa['nisn'] . '.png', QR_ECLEVEL_M, 4);

?>
<!-- General CSS Files -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
     <link rel="shortcut icon" href="https://www.mr-ell.com/media_library/images/7c751732ad0e716986752287a3861548.png">

<!DOCTYPE html>

<html>
	<head>
		<title>FORMULIR PPDB <?= $siswa['nama'] ?></title>
	</head>
	<body>
		<img src="../../<?= $setting['kop'] ?>" width="100%" />
    <body>
        
        <hr>
		<b><center>FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN 2024</center></b>
		<br>
			
			<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
			<tr>
				<td colspan="1" align="left"><b>1.</b></td>
				<td colspan="4" align="left"><b>Registrasi Peserta Didik</b></td>
				
			</tr>
			<tr>
				<td width="5%"></td>
				<td width="35%" align="">Jenis Pendaftaran</td>
				<td width="5%" align="center">:</td>
				<td width="60%" align="left">
				    <?php if ($siswa['jenis'] == 1) { ?>
                                    <span class="badge badge-success">Siswa Baru</span>
                                <?php } elseif ($siswa['status'] == 2) { ?>
                                    <span class="badge badge-danger">Siswa Pindahan </span>
                                
                                <?php } ?>
				</td>
				
			</tr>
			
			<tr>
				<td></td>
				<td align="">Jalur Pendaftaran</td>
				<td align="center">:</td>
				<td align="left">Umum</td>
			</tr>
			<tr>
				<td></td>
				<td align="">Nomor Pendaftaran</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['no_daftar'] ?> ( Diisi Panitia )</td>
			</tr>
		
			<tr>
				<td></td>
				<td align="">Jurusan</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['jurusan'] ?></td>
			</tr>
			
			<tr>
				<td></td>
				<td align="">Nama Sekolah Asal</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['asal_sekolah'] ?></td>
			</tr>
			<tr>
				<td></td>
				<td align="">NPSN Sekolah Asal</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['npsn_asal'] ?></td>
			</tr>
			<tr>
				<td colspan="3"></td>
			</tr>
			</tbody>
	</table>
	
	
		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
			<tr>
				<td colspan="1" align="left"><b>2.</b></td>
				<td colspan="4" align="left"><b>Biodata Peserta Didik</b></td>
				
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td width="35%" align="">Nama Lengkap</td>
				<td width="5%" align="center">:</td>
				<td width="60%" align="left"><?= $siswa['nama'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">Jenis Kelamin</td>
				<td align="center">:</td>
				<td align="left"><?= ($siswa['jenkel'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></td>
			</tr>
			<tr><td width="5%"></td><td align="">NISN</td><td align="center">:</td><td align="left"><?= $siswa['nisn'] ?></td></tr>
			<tr><td width="5%"></td><td align="">NIK</td><td align="center">:</td><td align="left"><?= $siswa['nik'] ?></td></tr>
			<tr>
				<td width="5%"></td>
				<td align="">Tempat Lahir</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['tempat_lahir'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">Tanggal Lahir</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['tgl_lahir'] ?></td>
			</tr>
			
			
			
			</tbody>
		</table>
		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
			<tr>
				<td colspan="1" align="left"><b>3.</b></td>
				<td colspan="3" align="left"><b>Alamat Peserta Didik</b></td>
				
			</tr>
			<tr>
				<td width="5%"></td>
				<td width="35%" align="">Alamat Jalan</td>
				<td width="5%" align="center">:</td>
				<td width="60%" align="left"><?= $siswa['alamat'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">RT/RW</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['rt'] ?>/<?= $siswa['rw'] ?></td>
			</tr>
			
			
			<tr>
				<td width="5%"></td>
				<td align="">Kelurahan / Desa</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['desa'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">Kecamatan</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['kecamatan'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">Kabupaten</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['kota'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">Provinsi</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['provinsi'] ?></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="">No. Hp</td>
				<td align="center">:</td>
				<td align="left"><?= $siswa['no_hp'] ?></td>
			</tr>
			
			</tbody>
		</table>
		<br>
		<br>
			<table width="100%">
            <tr>
                <td style="text-align: center">
                    <font size="1">
                        <img class="img" src="temp/<?= $siswa['nisn'] ?>.png" ec="H" style="width: 30mm; background-color: white; color: black;">
                    </font>
                </td>
                
				<td style="text-align: center">
                    <font size="2">
						<img class="img" src="../../<?= $siswa['foto'] ?>" ec="H" style="width: 30mm; height: 40mm; background-color: white; color: black;">
					</font>
                </td>
				
				<td><td><td><td><td><td>
				
                <td style="text-align: left">
                    <font size="13px">
                       
                        <?= $setting['kec'] ?>, <?= date('d M Y ') ?>
                        <p>Pendaftar</p>
						<br></br>
						<p><strong><?= $siswa['nama'] ?></strong><p>
                        
                    </font>
                </td></td></td></td></td></td></td></td>
            </tr>
        </table>
		
		


			





        


</body>

</html>


<?php

$html = ob_get_clean();
require_once '../../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("PPDB2024_" . $siswa['nama'] . ".pdf", array("Attachment" => false));
exit(0);
?>