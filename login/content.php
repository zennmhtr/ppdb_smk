<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'df_ulang') {
    include "mod_daftar/daftarulang.php";
} elseif ($pg == 'daftar') {
    include "mod_daftar/daftar.php";
} elseif ($pg == 'berkas_ppdb') {
    include "mod_daftar/daftar_berkas.php";
} elseif ($pg == 'l_ppdbyes') {
    include "mod_laporan/laporanyes.php";
} elseif ($pg == 'move') {
    include "mod_daftar/move.php";
} elseif ($pg == 'ubahsiswa') {
    include "mod_siswa/formulir.php";
} elseif ($pg == 'ubahdaftar') {
    include "mod_daftar/formulir.php";
} elseif ($pg == 'profil_lembaga') {
    include "mod_setting/profil_lembaga.php";
} elseif ($pg == 'detail') {
    include "mod_daftar/detail.php";  //Modul Detail Pendaftaran
} elseif ($pg == 'detailsiswa') {
    include "mod_siswa/detail.php";  //Modul Detail Pendaftaran
} elseif ($pg == 'diterima') {
    include "mod_daftar/daftar_diterima.php";  //modul pendaftar diterima
} elseif ($pg == 'ditolak') {
    include "mod_daftar/daftar_ditolak.php";  //modul pendaftar ditolak / cadangan
} elseif ($pg == 'siswa') {
    include "mod_siswa/daftar.php";
} elseif ($pg == 'ubah_kelas') {
    include "mod_siswa/ubah_kelas.php";
} elseif ($pg == 'akunppdb') {
    include "mod_laporan/kartu.php";
} elseif ($pg == 'masuk') {
    include "mod_siswa/mutasi_masuk.php";
} elseif ($pg == 'backup') {
    include "backup_restore/backup-data.php";
} elseif ($pg == 'restore') {
    include "backup_restore/restore.php";
} elseif ($pg == 'pindah') {
    include "mod_siswa/mutasi_keluar.php";
} elseif ($pg == 'rekapsiswa') {
    include "mod_siswa/ringkasan.php";
} elseif ($pg == 'luluskan') {
    include "mod_siswa/luluskan.php";
} elseif ($pg == 'alumni') {
    include "mod_siswa/alumni.php";
} elseif ($pg == 'detail_siswa') {
    include "mod_siswa/detail.php";  //Modul Detail Pendaftaran
} elseif ($pg == 'guru') {
    include "mod_gtk/daftar.php";
} elseif ($pg == 'detail_gtk') {
    include "mod_gtk/detail.php";  
} elseif ($pg == 'sekolah') {
    cek_login_admin();
    include "mod_sekolah/sekolah.php";
} elseif ($pg == 'kelas') {
    cek_login_admin();
    include "mod_jenjang/jenjang.php";
} elseif ($pg == 'jurusan') {
    cek_login_admin();
    include "mod_jurusan/jurusan.php";
} elseif ($pg == 'jenis') {
    cek_login_admin();
    include "mod_jenis/jenis.php";
} elseif ($pg == 'biaya') {
    cek_login_admin();
    include "mod_biaya/biaya.php";
} elseif ($pg == 'bayar') {
    include "mod_bayar/bayar.php";
} elseif ($pg == 'user-profile') {
    include "mod_user/user-profile.php";

} elseif ($pg == 'pengumuman') {
    include "mod_pengumuman/pengumuman.php";
} elseif ($pg == 'user') {
    cek_login_admin();
    include "mod_user/user.php";
} elseif ($pg == 'usersiswa') {
    cek_login_admin();
    include "mod_user/usersiswa.php";
} elseif ($pg == 'setting') {
    cek_login_admin();
    include "mod_setting/setting.php";
} elseif ($pg == 'setting2') {
    cek_login_admin();
    include "mod_setting/setting2.php";
} elseif ($pg == 's_ppdb') {
    include "mod_setting/s_ppdb.php";
} elseif ($pg == 'kontak') {
    cek_login_admin();
    include "mod_kontak/kontak.php";
} elseif ($pg == 'infobayar') {
    cek_login_admin();
    include "mod_web/pembayaran.php";
} elseif ($pg == 'syarat') {
    cek_login_admin();
    include "mod_web/syarat.php";
}
