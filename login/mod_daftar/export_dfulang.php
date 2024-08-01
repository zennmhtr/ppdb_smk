<?php
require("../../config/database.php");
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_pendaftarDiterima.xls");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
?>
<style>
    .str {
        mso-number-format: \@;
    }
</style>

	<center>
		<h3>DATA PENDAFTAR DI TERIMA</h3>
	</center>
<table border="1">
    <thead>
        <tr>
            <th class="text-left">
               No
            </th>
            <th>NIS</th>
			<th>Tanggal Konfrmasi</th>
			<th>NISN</th>
			<th>NIK</th>
            <th>Nama Pendaftar</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Provinsi</th>
			<th>Kota</th>
			<th>Kecamatan</th>
			<th>Desa</th>
			<th>No KK</th>
			<th>Nama Ayah</th>
			<th>Nik Ayah</th>
			<th>Tahun Lahir Ayah</th>
			<th>Pendidikan Ayah</th>
			<th>Pekerjaan Ayah</th>
			<th>Penghasilan Ayah</th>
			<th>Nama Ibu</th>
			<th>Nik Ibu</th>
			<th>Tahun Lahir Ibu</th>
			<th>Pendidikan Ibu</th>
			<th>Pekerjaan Ibu</th>
			<th>Penghasilan Ibu</th>
			<th>NPSN</th>
			<th>ASAL SEKOLAH</th>
			<th>Kelas</th>
			<th>Agama</th>
			<th>No HP</th>
			<th>Anak Ke</th>
			<th>Jumlah Saudara</th>
			<th>Pernah Paud</th>
			<th>Pernah TK</th>
			<th>Jenis Tempat Tinggal</th>
			<th>Alamat Lengkap</th>
			<th>Kode Pos </th>
			<th>Jarak Sekolah</th>
			<th>Jarak Tempuh </th>
			<th>Transport </th>
			
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "select * from daftar where konfirmasi='1'");
        $no = 0;
        while ($daftar = mysqli_fetch_array($query)) {
            $no++;
        ?>
            <tr>
                <td><?= $no; ?></td>
				<td class="str"><?= $daftar['nis'] ?></td>
				<td class="date"><?= $daftar['tgl_konfirmasi'] ?></td>
				<td class="str"><?= $daftar['nisn'] ?></td>
				<td class="str"><?= $daftar['nik'] ?></td>
                <td><?= $daftar['nama'] ?></td>
				<td><?= $daftar['jenkel'] ?></td>
				<td><?= $daftar['tempat_lahir'] ?></td>
				<td class="date"><?= $daftar['tgl_lahir'] ?></td>
				<td><?= $daftar['alamat'] ?></td>
				<td><?= $daftar['provinsi'] ?></td>
				<td><?= $daftar['kota'] ?></td>
				<td><?= $daftar['kecamatan'] ?></td>
				<td><?= $daftar['desa'] ?></td>
				<td class="str"><?= $daftar['no_kk'] ?></td>
				<td><?= $daftar['nama_ayah'] ?></td>
				<td class="str"><?= $daftar['nik_ayah'] ?></td>
				<td class="str"><?= $daftar['tahun_ayah'] ?></td>
				<td><?= $daftar['pendidikan_ayah'] ?></td>
				<td><?= $daftar['pekerjaan_ayah'] ?></td>
				<td><?= $daftar['penghasilan_ayah'] ?></td>
				<td><?= $daftar['nama_ibu'] ?></td>
				<td class="str"><?= $daftar['nik_ibu'] ?></td>
				<td class="str"><?= $daftar['tahun_ayah'] ?></td>
				<td><?= $daftar['pendidikan_ibu'] ?></td>
				<td><?= $daftar['pekerjaan_ibu'] ?></td>
				<td><?= $daftar['penghasilan_ibu'] ?></td>
				<td><?= $daftar['npsn_asal'] ?></td>
                <td><?= $daftar['asal_sekolah'] ?></td>
                <td><?= $daftar['kelas'] ?></td>
				 <td><?= $daftar['agama'] ?></td>
				<td class="str"><?= $daftar['no_hp'] ?></td>
				<td class="str"><?= $daftar['anak_ke'] ?></td>
				<td class="str"><?= $daftar['saudara'] ?></td>
				<td><?= $daftar['paud'] ?></td>
				 <td><?= $daftar['tk'] ?></td>
				 <td><?= $daftar['tinggal'] ?></td>
				<td><?= $daftar['alamat'] ?>,RT <?= $daftar['rt'] ?>, RW <?= $daftar['rw'] ?></td>
				<td class="str"><?= $daftar['kode_pos'] ?></td>
				<td><?= $daftar['jarak'] ?></td>
				<td class="str"><?= $daftar['waktu'] ?></td>
                <td><?= $daftar['transportasi'] ?></td>

            </tr>

        <?php }
        ?>


    </tbody>
</table>