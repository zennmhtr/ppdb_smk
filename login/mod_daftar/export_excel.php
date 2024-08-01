<?php
require("../../config/database.php");
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_PPDB.xls");
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
		<h3>DATA SISWA </h3>
	</center>
<table border="1">
    <thead>
        <tr>
            <th class="text-left">
               No
            </th>
<th>No Daftar</th>
<th>Asal Sekolah</th>
<th>NPSN Sekolah Asal</th>
<th>Pilihan Jurusan/Program</th>
<th>NISN</th>
<th>NIK</th>
<th>Nama Siswa</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Anak Ke</th>
<th>Jumlah Saudara</th>
<th>Cita Cita</th>
<th>Hobi</th>
<th>Email</th>
<th>No HP</th>
<th>Pernah Paud</th>
<th>Pernah TK</th>
<th>Hepatitis B</th>
<th>Polio</th>
<th>BCG</th>
<th>Campak</th>
<th>DPT</th>
<th>Covid</th>
<th>No KIP</th>
<th>No KK</th>
<th>Kepala Keluarga</th>
<th>Jenis Tempat Tinggal</th>
<th>Alamat</th>
<th>Provinsi</th>
<th>Kota</th>
<th>Kecamatan</th>
<th>Desa</th>
<th>Kode Pos</th>
<th>Jarak Sekolah</th>
<th>Jarak Tempuh </th>
<th>Transport </th>
<th>Status Ayah</th>
<th>Nik Ayah</th>
<th>Nama Ayah</th>
<th>Tanggal Lahir Ayah</th>
<th>Pendidikan Ayah</th>
<th>Pekerjaan Ayah</th>
<th>Penghasilan Ayah</th>
<th>No HP Ayah</th>
<th>Status ibu</th>
<th>Nik Ibu</xth>
<th>Nama Ibu</th>
<th>Tanggal Lahir Ibu</th>
<th>Pendidikan Ibu</th>
<th>Pekerjaan Ibu</th>
<th>Penghasilan Ibu</th>
<th>No HP Ibu</th>


			
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "select * from daftar");
        $no = 0;
        while ($siswa = mysqli_fetch_array($query)) {
            $no++;
        ?>
            <tr>
                <td><?= $no; ?></td>
<td><?= $siswa['no_daftar'] ?></td>
<td><?= $siswa['asal_sekolah'] ?></td>
<td><?= $siswa['npsn_asal'] ?></td>
<td><?= $siswa['jurusan'] ?></td>
<td class="str"><?= $siswa['nisn'] ?></td>
<td class="str"><?= $siswa['nik'] ?></td>
<td><?= $siswa['nama'] ?></td>
<td><?= $siswa['tempat_lahir'] ?></td>
<td class="str"><?= $siswa['tgl_lahir'] ?></td>
<td><?= $siswa['jenkel'] ?></td>
<td><?= $siswa['agama'] ?></td>
<td class="str"><?= $siswa['anak_ke'] ?></td>
<td class="str"><?= $siswa['saudara'] ?></td>
<td><?= $siswa['citacita'] ?></td>
<td><?= $siswa['hobi'] ?></td>
<td><?= $siswa['email'] ?></td>
<td class="str"><?= $siswa['no_hp'] ?></td>
<td><?= $siswa['paud'] ?></td>
<td><?= $siswa['tk'] ?></td>
<td><?= $siswa['hepatitis'] ?></td>
<td><?= $siswa['polio'] ?></td>
<td><?= $siswa['bcg'] ?></td>
<td><?= $siswa['campak'] ?></td>
<td><?= $siswa['dpt'] ?></td>
<td><?= $siswa['covid'] ?></td>
<td class="str"><?= $siswa['no_kip'] ?></td>
<td class="str"><?= $siswa['no_kk'] ?></td>
<td><?= $siswa['kepala_keluarga'] ?></td>
<td><?= $siswa['status_tinggal'] ?></td>
<td><?= $siswa['alamat'] ?>,RT <?= $siswa['rt'] ?>, RW <?= $siswa['rw'] ?></td>
<td><?= $siswa['provinsi'] ?></td>
<td><?= $siswa['kota'] ?></td>
<td><?= $siswa['kecamatan'] ?></td>
<td><?= $siswa['desa'] ?></td>
<td class="str"><?= $siswa['kode_pos'] ?></td>
<td><?= $siswa['jarak'] ?></td>
<td class="str"><?= $siswa['waktu'] ?></td>
<td><?= $siswa['transportasi'] ?></td>
<td><?= $siswa['status_ayah'] ?></td>
<td class="str"><?= $siswa['nik_ayah'] ?></td>
<td><?= $siswa['nama_ayah'] ?></td>
<td class="str"><?= $siswa['tahun_ayah'] ?></td>
<td><?= $siswa['pendidikan_ayah'] ?></td>
<td><?= $siswa['pekerjaan_ayah'] ?></td>
<td><?= $siswa['penghasilan_ayah'] ?></td>
<td class="str"><?= $siswa['no_hp_ayah'] ?></td>
<td><?= $siswa['status_ibu'] ?></td>
<td class="str"><?= $siswa['nik_ibu'] ?></td>
<td><?= $siswa['nama_ibu'] ?></td>
<td class="str"><?= $siswa['tahun_ibu'] ?></td>
<td><?= $siswa['pendidikan_ibu'] ?></td>
<td><?= $siswa['pekerjaan_ibu'] ?></td>
<td><?= $siswa['penghasilan_ibu'] ?></td>
<td class="str"><?= $siswa['no_hp_ibu'] ?></td>
<td><?= $siswa['bin1'] ?></td>
<td><?= $siswa['mat1'] ?></td>
<td><?= $siswa['ipa1'] ?></td>
<td><?= $siswa['big1'] ?></td>
<td><?= $siswa['bin2'] ?></td>
<td><?= $siswa['mat2'] ?></td>
<td><?= $siswa['ipa2'] ?></td>
<td><?= $siswa['big2'] ?></td>
<td><?= $siswa['bin3'] ?></td>
<td><?= $siswa['mat3'] ?></td>
<td><?= $siswa['ipa3'] ?></td>
<td><?= $siswa['big3'] ?></td>
<td><?= $siswa['bin4'] ?></td>
<td><?= $siswa['mat4'] ?></td>
<td><?= $siswa['ipa4'] ?></td>
<td><?= $siswa['big4'] ?></td>
<td><?= $siswa['bin5'] ?></td>
<td><?= $siswa['mat5'] ?></td>
<td><?= $siswa['ipa5'] ?></td>
<td><?= $siswa['big5'] ?></td>


            </tr>

        <?php }
        ?>


    </tbody>
</table>