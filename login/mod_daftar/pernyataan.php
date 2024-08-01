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
// $tempdir = "../../temp/"; //Nama folder tempat menyimpan file qrcode
// if (!file_exists($tempdir)) //Buat folder bername temp
//     mkdir($tempdir);

// //isi qrcode jika di scan
// $codeContents = $bayar['id_bayar'] . '-' . $siswa['nama'];

// //simpan file kedalam temp
// //nilai konfigurasi Frame di bawah 4 tidak direkomendasikan

// QRcode::png($codeContents, $tempdir . $id_bayar . '.png', QR_ECLEVEL_L, 3, 6);

?>
<!-- General CSS Files -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
     <link rel="shortcut icon" href="https://www.mr-ell.com/media_library/images/7c751732ad0e716986752287a3861548.png">

<!DOCTYPE html>

<html>
	<head>
		<title>Surat Pernyataan <?= $siswa['nama'] ?></title>
	</head>
	<body>
		<img src="../../assets/img/kop/kop.png" width="100%" />
    <body>
    
    
    <hr>
    <center>
        <h5><b>SURAT PERNYATAAN SISWA</b></h5>
        
    </center>

   <p>Yang bertanda tangan dibawah ini, saya :</p>
    
        	<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-bottom:0px solid #a5a5a5;">
			<tbody>
			<tr>
				<td width="35%" align="left"><b>Nama Lengkap</b></td>
				<td width="5%" align="left"><b>:</b></td>
				<td width="60%" align="left"><b><?= $siswa['nama'] ?></b></td>
			</tr>
			
			<tr>
				<td align="left"><b>Jenis Kelamin</b></td>
				<td align="left"><b>:</b></td>
				<td align="left"><b><?= ($siswa['jenkel'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></b></td>
			</tr>
			<tr><td align="left"><b>NISN</b></td>
				<td align="left"><b>:</b></td>
				<td align="left"><b><?= $siswa['nisn'] ?></b></td>
			</tr>
		
			<tr>
				<td align="left"><b>Tempat Lahir</b></td>
				<td align="left"><b>:</b></td>
				<td align="left"><b><?= $siswa['tempat_lahir'] ?></b></td>
			</tr>
			<tr>
				<td align="left"><b>Tanggal Lahir</b></td>
				<td align="left"><b>:</b></td>
				<td align="left"><b><?= $siswa['tgl_lahir'] ?></b></td>
			</tr>
			
			
			</tbody>
		</table>
		<br>
		<p>Dengan ini menyatakan bahwa saya mendaftar di SMK Bina Karya 2 Karawang dan sanggup Sekolah di SMK Bina Karya 2 Karawang serta mengikuti semua aturan - aturan yang berlaku di SMK Bina Karya 2 Karawang</p>
		<p>Apabila dikemudian Hari Saya melanggar Aturan di SMK Bina Karya 2 Karawang, Saya siap untuk menerima sanksi sesuai aturan yang berlaku di SMK Bina Karya 2 Karawang</p>
		<p>Demikian Surat pernyataan ini dibuat sebagai tanda keseriusan saya untuk belajar di SMK Bina Karya 2 Karawang</p>

		<table width="100%" cellpadding="2" cellspacing="2" border="0">
			<tbody>
			<tr>
				<td align="left">Saya yang bertanda tangan dibawah ini menyatakan bahwa data yang tertera diatas adalah yang sebenarnya.</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<tr align="left">
				<td align="right">Karawang, <?= date('d M Y') ?></td>
			</tr>
<tr><td>.</td></tr>
<tr><td>.</td></tr>

			<tr><td align="right"><?= $siswa['nama'] ?></td></tr>
			</tbody>
       

    </div>
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
$dompdf->stream("surat_pernyataan.pdf", array("Attachment" => false));
exit(0);
?>