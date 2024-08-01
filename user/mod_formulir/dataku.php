<!-- <div class="section-header">
    <h3>Detail Pendaftar</h3>
</div> -->
<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4><b>PROFIL DATA PENDAFTAR</b></h4>
            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="image" src="../<?= $siswa['foto'] ?>" class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <br>
                    <div class="author-box-job"><b>Status Pendaftaran</b></div>
                    <?php if ($siswa['status'] == 1) { ?>
                        <span class="badge badge-success">Diterima</span>
                    <?php } else { ?>
                        <span class="badge badge-warning">Diverifikasi</span>
                    <?php } ?>
                </div>
                <div class="author-box-details">

                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user    "></i> <b>Biodata Diri</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-friends    "></i> <b>Data Orang Tua</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-history    "></i> <b>Histori</b></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm ">
                                    <tbody>
                                        <tr>
                                            <td align="left"><b>NISN</b></td>
                                            <td align="left"><b><?= $siswa['nisn'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No. NIK</b></td>
                                            <td align="left"><b><?= $siswa['nik'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No. KK</b></td>
                                            <td align="left"><b><?= $siswa['no_kk'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap</b></td>
                                            <td align="left"><b><?= $siswa['nama'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tempat Tanggal Lahir</b></td>
                                            <td align="left"><b><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Jenis Kelamin</b></td>
                                            <td align="left"><b><?= ($siswa['jenkel'] == 'L') ? "LAKI - LAKI" : "PEREMPUAN"; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No Handphone</b></td>
                                            <td align="left"><b><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Asal Sekolah</b></td>
                                            <td align="left"><b><?= $siswa['asal_sekolah']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>NPSN Sekolah Asal</b></td>
                                            <td align="left"><b><?= $siswa['npsn_asal']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Alamat Siswa</b></td>
                                            <td align="left"><b><?= $siswa['alamat']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>RT / RW</b></td>
                                            <td align="left"><b><?= $siswa['rt']  ?>, <?= $siswa['rw']  ?></b></td>
                                        </tr>
                                        <td align="left"><b>Desa</b></td>
                                        <td align="left"><b><?= $siswa['desa']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Kecamatan</b></td>
                                            <td align="left"><b><?= $siswa['kecamatan']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Kota / Kabupaten</b></td>
                                            <td align="left"><b><?= $siswa['kota']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Provinsi</b></td>
                                            <td align="left"><b><?= $siswa['provinsi']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Kode Pos</b></td>
                                            <td align="left"><b><?= $siswa['kode_pos']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Anak Ke</b></td>
                                            <td align="left"><b><?= $siswa['anak_ke']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Saudara</b></td>
                                            <td align="left"><b><?= $siswa['saudara']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pernah PAUD</b></td>
                                            <td align="left"><b><?= $siswa['paud']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pernah TK/RA</b></td>
                                            <td align="left"><b><?= $siswa['tk']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Cita Cita</b></td>
                                            <td align="left"><b><?= $siswa['citacita']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Hobi</b></td>
                                            <td align="left"><b><?= $siswa['hobi']  ?></b></td>
                                        </tr>

                                        <tr>
                                            <td align="left"><b>Tinggal Bersama</b></td>
                                            <td align="left"><b><?= $siswa['status_tinggal']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Jarak Ke Sekolah ( Meter )</b></td>
                                            <td align="left"><b><?= $siswa['jarak']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Waktu Tempuh ( Menit )</b></td>
                                            <td align="left"><b><?= $siswa['waktu']  ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm ">
                                    <tbody>

                                        <tr>
                                            <td align="left"><b>Status Ayah</b></td>
                                            <td align="left"><b><i class="fas fa-id-card text-success"></i> <?= $siswa['status_ayah'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>NIK Ayah</b></td>
                                            <td align="left"><b><i class="fas fa-id-card text-success"></i> <?= $siswa['nik_ayah'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Ayah</b></td>
                                            <td align="left"><b><?= $siswa['nama_ayah'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tahun Lahir</b></td>
                                            <td align="left"><b><?= $siswa['tahun_ayah'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Ayah</b></td>
                                            <td align="left"><b><?= $siswa['pendidikan_ayah']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Ayah</b></td>
                                            <td align="left"><b><?= $siswa['pekerjaan_ayah']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Penghasilan Ayah</b></td>
                                            <td align="left"><b><?= $siswa['penghasilan_ayah']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No HP Ayah</b></td>
                                            <td align="left"><b><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_ayah']  ?></b></td>
                                        </tr>
                                        <!-- DATA LENGKAP IBU -->

                                        <tr>
                                            <td align="left"><b>Status Ibu</b></td>
                                            <td align="left"><b><i class="fas fa-id-card text-success"></i> <?= $siswa['status_ibu'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>NIK Ibu</b></td>
                                            <td align="left"><b><i class="fas fa-id-card text-success"></i> <?= $siswa['nik_ibu'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Ibu</b></td>
                                            <td align="left"><b><?= $siswa['nama_ibu'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tahun Lahir</b></td>
                                            <td align="left"><b><?= $siswa['tahun_ibu'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Ibu</b></td>
                                            <td align="left"><b><?= $siswa['pendidikan_ibu']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Ibu</b></td>
                                            <td align="left"><b><?= $siswa['pekerjaan_ibu']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Penghasilan Ibu</b></td>
                                            <td align="left"><b><?= $siswa['penghasilan_ibu']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No HP Ibu</b></td>
                                            <td align="left"><b><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_ibu']  ?></b></td>
                                        </tr>

                                        <!-- DATA LENGKAP WALI -->

                                        <tr>
                                            <td align="left"><b>NIK Wali</b></td>
                                            <td align="left"><b><i class="fas fa-id-card text-success"></i> <?= $siswa['nik_wali'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Wali</b></td>
                                            <td align="left"><b><?= $siswa['nama_wali'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tahun Lahir</b></td>
                                            <td align="left"><b><?= $siswa['tahun_wali'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Wali</b></td>
                                            <td align="left"><b><?= $siswa['pendidikan_wali']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Wali</b></td>
                                            <td align="left"><b><?= $siswa['pekerjaan_wali']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Penghasilan Wali</b></td>
                                            <td align="left"><b><?= $siswa['penghasilan_wali']  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No HP Wali</b></td>
                                            <td align="left"><b><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_wali']  ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                            <b>Harap periksa semua data agar tidak terjadi kesalahan / keliruan dalam penginputan Biodata, Data Orang dan Alamat, Mohon di isi dengan sebenar - benarnya.</b>
                        </div>
                    </div>

                    <div class="w-100 d-sm-none"></div>
                    <div class="float-right mt-sm-0 mt-3">
                        <a href="#" class="btn">View Posts <i class="fas fa-chevron-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>