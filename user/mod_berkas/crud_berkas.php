<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
$id = $_SESSION['id_daftar'];
if ($pg == 'ubah') {
    
    
		
        $ektensi = ['jpg','jpeg','png'];
        if ($_FILES['kk']['name'] <> '') {
            $kk = $_FILES['kk']['name'];
            $temp = $_FILES['kk']['tmp_name'];
            $ext = explode('.', $kk);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/upload/kk/kk' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'kk' => $dest
                    ];
                    $exec = update($koneksi, 'daftar', $data2, ['id_daftar' => $id]);
                } else {
                    echo "gagal";
                }
            }
        }
		if ($_FILES['ijazah']['name'] <> '') {
            $ijazah = $_FILES['ijazah']['name'];
            $temp = $_FILES['ijazah']['tmp_name'];
            $ext = explode('.', $ijazah);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/upload/ijazah/ijazah' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'ijazah' => $dest
                    ];
                    $exec = update($koneksi, 'daftar', $data2, ['id_daftar' => $id]);
                } else {
                    echo "gagal";
                }
            }
        }
		if ($_FILES['akta']['name'] <> '') {
            $akta = $_FILES['akta']['name'];
            $temp = $_FILES['akta']['tmp_name'];
            $ext = explode('.', $akta);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/upload/akta/akta' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'akta' => $dest
                    ];
                    $exec = update($koneksi, 'daftar', $data2, ['id_daftar' => $id]);
                } else {
                    echo "gagal";
                }
            }
        }
		if ($_FILES['kip']['name'] <> '') {
            $kip = $_FILES['kip']['name'];
            $temp = $_FILES['kip']['tmp_name'];
            $ext = explode('.', $kip);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/upload/kip/kip' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'kip' => $dest
                    ];
                    $exec = update($koneksi, 'daftar', $data2, ['id_daftar' => $id]);
                } else {
                    echo "gagal";
                }
            }
        }
		
        // if ($_FILES['ttd']['name'] <> '') {
        //     $kk = $_FILES['ttd']['name'];
        //     $temp = $_FILES['ttd']['tmp_name'];
        //     $ext = explode('.', $kk);
        //     $ext = end($ext);
        //     if (in_array($ext, $ektensi)) {
        //         $dest = 'dist/img/ttd' . '.' . $ext;
        //         $upload = move_uploaded_file($temp, '../' . $dest);
        //     }
        // }
    } else {
        echo "Gagal menyimpan";
    }
	 