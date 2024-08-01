<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'kartu') {
    include "mod_formulir/kartu.php";
} elseif ($pg == 'formulir') {
    include "mod_formulir/formulir.php";
} elseif ($pg == 'dataku') {
    include "mod_formulir/dataku.php";
} elseif ($pg == 'df_ulang') {
    include "mod_formulir/daftarulang.php";
} elseif ($pg == 'cetakkartu') {
    include "mod_formulir/cetakkartu.php";
} elseif ($pg == 'berkas') {
    include "mod_berkas/upload.php";
} elseif ($pg == 'blank') {
    include "blank.php";
} elseif ($pg == 'download') {
    include "mod_berkas/download.php";
} elseif ($pg == 'alumni') {
    include "../login/mod_siswa/alumni.php";

} elseif ($pg == 'detail') {
    include "mod_formulir/detail.php";  //Modul Detail Pendaftaran
} elseif ($pg == 'bayar') {
    include "mod_bayar/bayar.php";
} elseif ($pg == 'pengumuman') {
    include "mod_pengumuman/pengumuman.php";
} elseif ($pg == 'user') {
    include "mod_user/user.php";
} elseif ($pg == 'setting') {
    include "mod_setting/setting.php";
}
