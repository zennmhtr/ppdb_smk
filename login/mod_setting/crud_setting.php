<?php
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'aktif') {
    $ppdb = $_POST['ppdb'];
    update($koneksi, 'setting', ['ppdb' => 1], ['ppdb' => $ppdb]);
}
if ($pg == 'tutup') {
    $ppdb = $_POST['ppdb'];
    update($koneksi, 'setting', ['ppdb' => 0], ['ppdb' => $ppdb]);
}
if ($pg == 'ppdbon') {

    $data = [
        'ppdb' => 1
    ];
    $where = [
         'id_setting' => 1
    ];
    update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";
}
if ($pg == 'ppdb1') {
    $data = [
        'ppdb' => $_POST['ppdb']
	
    ];
	$where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}



if ($pg == 'ubahppdb') {
    $data = [
        
        'ppdb' => $_POST['ppdb'],
        
    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    
}
if ($pg == 'live') {
    $data = [
        
        'klikchat' => $_POST['klikchat'],
		'livechat' => $_POST['livechat'],
		'nolivechat' => $_POST['nolivechat'],
        
    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    
}
if ($pg == 'ubah') {
    $data = [
        
        'nama_sekolah' => $_POST['nama_sekolah'],
        'nsm' => $_POST['nsm'],
        'npsn' => $_POST['npsn']
        
    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    if ($exec) {
        $ektensi = ['jpg', 'png'];
        if ($_FILES['logo']['name'] <> '') {
            $logo = $_FILES['logo']['name'];
            $temp = $_FILES['logo']['tmp_name'];
            $ext = explode('.', $logo);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/img/logo/logo' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'logo' => $dest
                    ];
                    $exec = update($koneksi, 'setting', $data2, $where);
                } else {
                    echo "gagal";
                }
            }
        }
		if ($_FILES['kop']['name'] <> '') {
            $kop = $_FILES['kop']['name'];
            $temp = $_FILES['kop']['tmp_name'];
            $ext = explode('.', $kop);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/img/kop/kop'  . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'kop' => $dest
                    ];
                    $exec = update($koneksi, 'setting', $data2, $where);
                } else {
                    echo "gagal";
                }
            }
        }
		if ($_FILES['logo_ppdb']['name'] <> '') {
            $logo_ppdb = $_FILES['logo_ppdb']['name'];
            $temp = $_FILES['logo_ppdb']['tmp_name'];
            $ext = explode('.', $logo_ppdb);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/img/logo/logo_ppdb' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'logo_ppdb' => $dest
                    ];
                    $exec = update($koneksi, 'setting', $data2, $where);
                } else {
                    echo "gagal";
                }
            }
        }
        // if ($_FILES['ttd']['name'] <> '') {
        //     $logo = $_FILES['ttd']['name'];
        //     $temp = $_FILES['ttd']['tmp_name'];
        //     $ext = explode('.', $logo);
        //     $ext = end($ext);
        //     if (in_array($ext, $ektensi)) {
        //         $dest = 'dist/img/ttd' . '.' . $ext;
        //         $upload = move_uploaded_file($temp, '../' . $dest);
        //     }
        // }
    } else {
        echo "Gagal menyimpan";
    }
}
if ($pg == 'profile') {
	 $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nsm' => $_POST['nsm'],
		'npsn' => $_POST['npsn'],
		'jenjang' => $_POST['jenjang'],
		'nama_sekolah' => ucwords(strtoupper($nama)),
        'status' => $_POST['status'],
        
    ];
	$where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}
if ($pg == 'alamat') {
    $data = [
        'alamat' => $_POST['alamat'],
		'provinsi' => $_POST['provinsi'],
		'kab' => $_POST['kab'],
        'kec' => $_POST['kec'],
        
    ];
	$where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}
if ($pg == 'kontak') {
    $data = [
        'no_telp' => $_POST['no_telp'],
		'email' => $_POST['email'],
		'web' => $_POST['web'],
                
    ];
	$where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}
if ($pg == 'kepala') {
    $data = [
        'kepala' => $_POST['kepala'],
		'nip' => $_POST['nip'],
		
                
    ];
	$where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}
if ($pg == 'ubah2') {
$data = [
       
		'nama_sekolah' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'kota' => $_POST['kota'],
		'npsn' => $_POST['npsn'],
        
        
    ];
    $where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    
                    echo "Terimakasih";

}
if ($pg == 'infobayar') {
    $data = [
        'infobayar' => $_POST['info']
    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);

    if ($exec) {
        echo "ok";
    } else {
        echo "Gagal menyimpan";
    }
}
if ($pg == 'aktifppdb') {
    $data = [
        'tgl_pengumuman' => $_POST['tgl_pengumuman']
		
    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);

    if ($exec) {
        echo "ok";
    } else {
        echo "Gagal menyimpan";
    }
}
