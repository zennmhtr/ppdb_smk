<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="?pg=setting" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>PPDB Online</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href='.'>Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="?pg=setting">Settings</a></div>
              <div class="breadcrumb-item">Pengumuman</div>
            </div>
          </div>



          <td><div class="section-body">
           
			<h2 class="section-title"><b>Pengaturan Pengumuman</b></h2>
            <p class="section-lead">
              Silahkan Sesuaikan Pengaturan PPDB Online Disini
            </p>
			
			 </td>
<div class="section-header">

    <button type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambahdata">
        <i class="far fa-edit"></i> Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form-tambah">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Pengumuman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul Pengumuman</label>
                            <input type="text" name="judul" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jenis Pengumuman</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="jenis" value="1" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">Internal</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="jenis" value="2" class="selectgroup-input">
                                    <span class="selectgroup-button">Eksternal</span>
                                </label>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Isi Pengumuman</label>
                            <textarea name="pengumuman" class="summernote" required></textarea>
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


</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><b>DATA PENGUMUMAN</b></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-1">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="text-center">
                                    <b>No</b>
                                </th>
                                <th><b>Judul Pengumuman</b></th>
                                <th><b>Pengumuman</b></th>
                                <th><b>Jenis</b></th>
                                <th width="150"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM pengumuman");
                            $no = 0;
                            while ($pengumuman = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr style="text-align: center;">
                                    <td><b><?= $no; ?></b></td>
                                    <td><b><?= $pengumuman['judul'] ?></b></td>
                                    <td style="text-align: left;"><?= $pengumuman['pengumuman'] ?></td>
                                    <td>
                                        <?php if ($pengumuman['jenis'] == 1) { ?>
                                            <span class="badge badge-success"><b>Internal</b></span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger"><b>Eksternal</b></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button data-id="<?= $pengumuman['id_pengumuman'] ?>" class="hapus btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit<?= $no ?>">
                                            <i class="far fa-edit"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-edit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <form id="form-edit<?= $no ?>" style="text-align: left;">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><b>Edit Data Pengumuman<b></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" value="<?= $pengumuman['id_pengumuman'] ?>" name="id_pengumuman" class="form-control" required="">
                                                            <div class="form-group">
                                                                <label><b>Judul Pengumuman</b></label>
                                                                <input type="text" name="judul" value="<?= $pengumuman['judul'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label"><b>Jenis Pengumuman</b></label>
                                                                <div class="selectgroup w-100">
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="jenis" value="1" class="selectgroup-input" checked="">
                                                                        <span class="selectgroup-button"><b>Internal</b></span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="jenis" value="2" class="selectgroup-input">
                                                                        <span class="selectgroup-button"><b>Eksternal</b></span>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><b>Isi Pengumuman</b></label>
                                                                <textarea name="pengumuman" class="summernote"><?= $pengumuman['pengumuman'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>Close</b></button>
                                                            <button type="submit" class="btn btn-primary"><b>Save</b></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    $('#form-edit<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_pengumuman/crud_pengumuman.php?pg=ubah',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'Sukses!',
                                                    message: 'Data Berhasil Diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                            <?php }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_pengumuman/crud_pengumuman.php?pg=tambah',
            data: $(this).serialize(),
            success: function(data) {

                iziToast.success({
                    title: 'Sukses!',
                    message: "Data Berhasil Ditambahkan",
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Apakah Anda Yakin?',
            text: 'Akan Menghapus Data Ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_pengumuman/crud_pengumuman.php?pg=hapus',
                    method: "POST",
                    data: 'id_pengumuman=' + id,
                    success: function(data) {
                        iziToast.success({
                            title: 'Sukses!',
                            message: 'Data Berhasil Dihapus',
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