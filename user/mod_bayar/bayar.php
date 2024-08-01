<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><b>DATA BIAYA PEMBAYARAN</b></h4>
                <div class="card-header-action">
                    <?php $query = mysqli_query($koneksi, "SELECT sum(jumlah) AS total FROM biaya");
                    $total = mysqli_fetch_array($query);
                    ?>
                    <span class="badge badge-primary"><b>Total Biaya Rp. <?= $total['total'] ?></b></span>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsiv">
                    <table class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="text-center">
                                    <b>No</b>
                                </th>
                                <th><b>Nama Biaya Pembayaran</b></th>
                                <th><b>Jumlah Biaya Pembayaran</b></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM biaya");
                            $no = 0;
                            while ($biaya = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr style="text-align: center;">
                                    <td><b><?= $no; ?></b></td>
                                    <td><b><?= $biaya['nama_biaya'] ?></b></td>
                                    <td><b><?= $biaya['jumlah'] ?></b></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4><b>DATA TRANSAKSI PEMBAYARAN</b></h4>
                <div class="card-header-action">
                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modelId">
                        <i class="fas fa-info-circle    "></i> Info Pembayaran
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Info Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?= $setting['infobayar'] ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
                        <i class="fas fa-plus-circle    "></i> Tambah Bayar
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary"><b>TAMBAH PEMBAYARAN</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-bayar">
                                <div class="modal-body">
                                    <input type="hidden" value="<?= $siswa['id_daftar'] ?>" name="id">
                                    <div class="form-group">
                                        <label for="jumlah_bayar"><b>Jumlah Pembayaran Rp.<b></label>
                                        <input type="text" class="form-control uang" name="jumlah_bayar" id="jumlah_bayar" aria-describedby="helpjumlah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl"><b>Tanggal Pembayaran</b></label>
                                        <input type="text" class="form-control datepicker" name="tgl" id="tgl" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bukti"><b>Bukti Pembayaran</b></label>
                                        <input type="file" class="form-control-file" name="bukti" id="bukti" accept="image/*" aria-describedby="fileHelpId" required>
                                        <small id="fileHelpId" class="form-text text-muted">Upload File JPG / PNG</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tablebayar" style="font-size: 12px">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="text-center">
                                    <b>No</b>
                                </th>
                                <th><b>Kode Transaksi</b></th>
                                <th><b>Nama Siswa</b></th>
                                <th><b>Jumlah Bayar</b></th>
                                <th><b>Tanggal Bayar</b></th>
                                <th><b>Verifikasi</b></th>
                                <th><b>Bukti Pembayaran</b></th>
                                <th><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM bayar a JOIN daftar b ON a.id_daftar=b.id_daftar WHERE a.id_daftar='$siswa[id_daftar]'");
                            $no = 0;
                            while ($bayar = mysqli_fetch_array($query)) {
                                $user = fetch($koneksi, 'user', ['id_user' => $bayar['id_user']]);
                                $no++;
                            ?>
                                <tr style="text-align: center;">
                                    <td><b><?= $no; ?></b></td>
                                    <td><b><?= $bayar['id_bayar'] ?></b></td>
                                    <td><b><?= $bayar['nama'] ?></b></td>
                                    <td><b><?= "Rp " . number_format($bayar['jumlah_bayar'], 0, ",", ".") ?></b></td>
                                    <td><b><?= $bayar['tgl_bayar'] ?></b></td>
                                    <td><b>
                                        <?php if ($bayar['verifikasi'] == 1) { ?>
                                            <span class="badge badge-success">Pembayaran Diterima</span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">Proses Cek</span>
                                        <?php } ?>
                                    </b></td>
                                    <td><a target="_blank" class="btn btn-primary btn-sm" href="mod_bayar/<?= $bayar['bukti'] ?>" role="button"><i class="fas fa-eye"></i> Bukti</a></td>
                                    <td>
                                        <?php if ($bayar['verifikasi'] == 0) { ?>
                                            <button data-id="<?= $bayar['id_bayar'] ?>" class="hapus btn btn-danger btn-sm"><i class="fas fa-trash    "></i> Batal</button>
                                        <?php } else { ?>
                                            <a target="_blank" href="mod_bayar/print_kwitansi.php?id=<?= enkripsi($bayar['id_bayar']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-print    "></i> Cetak</a>

                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>

                </div>
                <?php
                $bayar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(jumlah_bayar) AS total FROM bayar WHERE id_daftar='$siswa[id_daftar]'"));
                $sisa = $total['total'] - $bayar['total'];
                ?>
                <table class="table table-sm table-striped mt-4" style="font-size:15px">
                    <tbody>
                        <tr>
                            <th scope="row" width="200">TOTAL PEMBAYARAN</th>
                            <td><?= "Rp " . number_format($bayar['total'], 0, ",", ".") ?></td>
                        </tr>
                        <tr>
                            <th scope="row">SISA BAYAR</th>
                            <td><?= "Rp " . number_format($sisa, 0, ",", ".") ?></td>
                        </tr>
                        <tr>
                            <th scope="row">STATUS</th>
                            <td>
                                <?php if ($sisa <= 0) { ?>
                                    <span class="badge badge-success">SUDAH LUNAS</span>
                                <?php } else { ?>
                                    <span class="badge badge-danger">BELUM LUNAS</span>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    var cleaveI = new Cleave('.uang', {
        numeral: true
    });
</script>

<script>
    $('#form-bayar').submit(function(e) {
    e.preventDefault();
    
    $.ajax({
        type: 'POST',
        url: 'mod_bayar/crud_bayar.php?pg=tambah',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function() {
            $('form button').prop("disabled", true);
        },
        success: function(response) {
            if (response.trim() == 'ok') {
                $('#tambahdata').modal('hide');
                iziToast.success({
                    title: 'Sukses!',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            } else {
                iziToast.error({
                    title: 'Gagal!',
                    message: 'Data Gagal Disimpan: ' + response,
                    position: 'topRight'
                });
            }
        },
        error: function(xhr, status, error) {
            iziToast.error({
                title: 'Error!',
                message: 'Terjadi kesalahan pada permintaan: ' + error,
                position: 'topRight'
            });
        },
        complete: function() {
            $('form button').prop("disabled", false);
        }
    });

    return false;
});

    $('#tablebayar').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Are you sure?',
            text: 'Akan Menghapus Data Ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_bayar/crud_bayar.php?pg=hapus',
                    method: "POST",
                    data: 'id_bayar=' + id,
                    success: function(data) {
                        iziToast.success({
                            title: 'Sukses!',
                            message: 'Pembayaran Berhasil Dibatalkan',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })
    });
</script>