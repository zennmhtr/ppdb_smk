<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'ubah') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtoupper($nama)),
        'asal_sekolah' => $_POST['asal'],
        'no_hp' => str_replace(" ", "", $_POST['nohp']),
        'status' => $status
    ];

    $id_daftar = $_POST['id_daftar'];
    update($koneksi, 'daftar', $data, ['id_daftar' => $id_daftar]);
}
if ($pg == 'tambah') {
    $query = "SELECT max(no_daftar) as maxKode FROM daftar";
        $hasil = mysqli_query($koneksi, $query);
        $data  = mysqli_fetch_array($hasil);
        $kodedaftar = $data['maxKode'];
        $noUrut = (int) substr($kodedaftar, 8, 3);
        $noUrut++;
        $char = "PPDB" . date('Y');
        $newID = $char . sprintf("%03s", $noUrut);
    $nama = str_replace("'", "`", $_POST['nama']);
    $sekolah = fetch($koneksi, 'sekolah', ['npsn' => $_POST['asal']]);
    $data = [
        'no_daftar' => $newID,
        'jenis' => $_POST['jenis'],
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtolower($nama)),
        'npsn_asal' => $sekolah['npsn'],
        'asal_sekolah' => $sekolah['nama_sekolah'],
        'jurusan' => $_POST['jurusan'],
        'password' => $_POST['password'],
        'no_hp' => str_replace(" ", "", $_POST['nohp']),
        'foto' => 'default.png'

    ];
    $exec = insert($koneksi, 'daftar', $data);
    echo mysqli_error($koneksi);
}
if ($pg == 'hapus') {
    $id_daftar = $_POST['id_daftar'];
    delete($koneksi, 'daftar', ['id_daftar' => $id_daftar]);
}
//membatalkan proses daftar ulang
if ($pg == 'konfirmasi') {
    $$data = [
        
    ];

     $exec = delete($koneksi, 'daftar', $data, ['id_daftar' => $id]);
    if ($exec) {
        $pesan = [
            'pesan' => 'Selamat.... Data Pendaftar Berhasil Dikosongkan'
        ];
        echo 'ok';
    } else {
        $pesan = [
            'pesan' => mysqli_error($koneksi)
        ];
        echo mysqli_error($koneksi);
    }
}
if ($pg == 'batal') {

    $data = [
        'status' => 0
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    delete($koneksi, 'bayar', $where);
}
if ($pg == 'bataldf') {

    $data = [
        'konfirmasi' => 0
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    
}
if ($pg == 'status') {
    $status = (isset($_POST['status'])) ? $_POST['status'] : 0;
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtoupper($nama)),
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tgl_lahir' => $_POST['tgl_lahir'],
        'asal_sekolah' => $_POST['asal'],
        'npsn_asal' => $_POST['npsn_asal'],
        'no_hp' => str_replace(" ", "", $_POST['no_hp']),
        'status' => $status
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    $id_daftar = $_POST['id_daftar'];
    update($koneksi, 'daftar', $data, $where);
}
if ($pg == 'nilai') {
    $nilai = (isset($_POST['nilai'])) ? $_POST['nilai'] : 0;
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'bin1' => $_POST['bin1'],
        'mat1' => $_POST['mat1'],
        'ipa1' => $_POST['ipa1'],
        'big1' => $_POST['big1'],
        'bin2' => $_POST['bin2'],
        'mat2' => $_POST['mat2'],
        'ipa2' => $_POST['ipa2'],
        'big2' => $_POST['big2'],
        'bin3' => $_POST['bin3'],
        'mat3' => $_POST['mat3'],
        'ipa3' => $_POST['ipa3'],
        'big3' => $_POST['big3'],
        'bin4' => $_POST['bin4'],
        'mat4' => $_POST['mat4'],
        'ipa4' => $_POST['ipa4'],
        'big4' => $_POST['big4'],
        'bin5' => $_POST['bin5'],
        'mat5' => $_POST['mat5'],
        'ipa5' => $_POST['ipa5'],
        'big5' => $_POST['big5']
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    $id_daftar = $_POST['id_daftar'];
    update($koneksi, 'daftar', $data, $where);
}
if ($pg == 'simpandatadiri') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    $data = [
        'nis'             => (isset($_POST['nis'])) ? $_POST['nis'] : '',
        'asal_sekolah'    => $_POST['asal_sekolah'],
        'npsn_asal'       => $_POST['npsn_asal'],
        'jurusan'         => $_POST['jurusan'],
        'nisn'           => $_POST['nisn'],
        'nik'            => $_POST['nik'],
        'no_kk'          => $_POST['nokk'],
        'nama'           => mysqli_escape_string($koneksi, $_POST['nama']),
        'tempat_lahir'    => mysqli_escape_string($koneksi, $_POST['tempat']),
        'tgl_lahir'       => $_POST['tgllahir'],
        'jenkel'          => $_POST['jenkel'],
        'no_hp'           => $_POST['nohp'],
        'anak_ke'         => $_POST['anakke'],
        'saudara'         => $_POST['saudara'],
        'paud'            => $_POST['paud'],
        'tk'              => $_POST['tk'],
        'citacita'        => $_POST['citacita'],
        'hobi'            => $_POST['hobi'],
        'status_keluarga' => (isset($_POST['statuskeluarga'])) ? $_POST['statuskeluarga'] : '',
        'agama'           => $_POST['agama'],
        'no_kip'           => $_POST['kip']
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);
    echo "ok";
}


if ($pg == 'simpanalamat') {

    $data = [
        'alamat'            => mysqli_escape_string($koneksi, $_POST['alamat']),
        'rt'                => $_POST['rt'],
        'rw'                => $_POST['rw'],
        'desa'              => mysqli_escape_string($koneksi, $_POST['desa']),
        'kecamatan'         => mysqli_escape_string($koneksi, $_POST['kecamatan']),
        'kota'              => mysqli_escape_string($koneksi, $_POST['kota']),
        'provinsi'          => mysqli_escape_string($koneksi, $_POST['provinsi']),
        'kode_pos'          => $_POST['kodepos'],
        'tinggal'           => $_POST['tinggal'],
        'jarak'             => $_POST['jarak'],
        'waktu'             => $_POST['waktu'],
        'transportasi'      => $_POST['transportasi']

    ];
	$where = [
         'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "ok";
}

if ($pg == 'simpanortu') {

    $data = [
        'status_ayah'            => $_POST['status_ayah'],
		'nik_ayah'            => $_POST['nikayah'],
        'nama_ayah'           => mysqli_escape_string($koneksi, $_POST['namaayah']),
        'tahun_ayah'         => mysqli_escape_string($koneksi, $_POST['tahunayah']),
        
        'pendidikan_ayah'     => $_POST['pendidikan_ayah'],
        'pekerjaan_ayah'      => $_POST['pekerjaan_ayah'],
        'penghasilan_ayah'    => $_POST['penghasilan_ayah'],
        'no_hp_ayah'          => $_POST['nohpayah'],
        'status_ibu'            => $_POST['status_ibu'],
		'nik_ibu'             => $_POST['nikibu'],
        'nama_ibu'            => mysqli_escape_string($koneksi, $_POST['namaibu']),
        'tahun_ibu'          => mysqli_escape_string($koneksi, $_POST['tahunibu']),
        
        'pendidikan_ibu'      => $_POST['pendidikan_ibu'],
        'pekerjaan_ibu'       => $_POST['pekerjaan_ibu'],
        'penghasilan_ibu'     => $_POST['penghasilan_ibu'],
        'no_hp_ibu'           => $_POST['nohpibu'],
        'nik_wali'            => $_POST['nikwali'],
        'nama_wali'           => mysqli_escape_string($koneksi, $_POST['namawali']),
        'tahun_wali'         => mysqli_escape_string($koneksi, $_POST['tahunwali']),
        
        'pendidikan_wali'     => $_POST['pendidikan_wali'],
        'pekerjaan_wali'      => $_POST['pekerjaan_wali'],
        'penghasilan_wali'    => $_POST['penghasilan_wali'],
        'no_hp_wali'          => $_POST['nohpwali'],
    ];
	$where = [
         'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "ok";
}
