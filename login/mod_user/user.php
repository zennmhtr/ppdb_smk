<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<section class='content'>
<div class='row'>
						<div class='col-md-8'>
							<div class='box box-solid'>
								<div class='box-header'>
									<h3 class='box-title'><img src='../assets/img/logo/logo.png' width='20'> <b>Manajemen User Admin</b></h3>
								</div><!-- /.box-header -->
								<div class='box-body'>
									<div class='table-responsive'>
										<table id="table-1" class='table table-bordered table-striped'>
											<thead>
												<tr style="text-align: center;">
													<th class="text-center">
														<b>No</b>
													</th>
													<th><b>Nama User Admin<b></th>
													<th><b>Username</b></th>
													<th><b>Status</b></th>
													<th><b>Action</b></th>
												</tr>
											</thead>
											 <tbody>
												<?php
												 $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE LEVEL='admin'");
												$no = 0;
												while ($user = mysqli_fetch_array($query)) {
													$no++;
												?>
													<tr style="text-align: center;">
														<td><b><?= $no; ?></b></td>
														<td><b><?= $user['nama_user'] ?></b></td>
														<td><b><?= $user['username'] ?></b></td>
														
														<td>
															<?php if ($user['status'] == 1) { ?>
																<span class="badge badge-success">Aktif</span>
															<?php } else { ?>
																<span class="badge badge-danger">Non Aktif</span>
															<?php } ?>
														</td>
														<td>
															<button data-id="<?= $user['id_user'] ?>" class="hapus btn btn-danger btn-sm"><i class="fas fa-trash-alt    "></i> Hapus</button>
															<!-- Button trigger modal -->
															<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit<?= $no ?>">
																<i class="fas fa-edit    "></i> Edit
															</button>

															<!-- Modal -->
															<div class="modal fade" id="modal-edit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<form id="form-edit<?= $no ?>" style="text-align: left;">
																			<div class="modal-header">
																				<h5 class="modal-title"><b>Edit Data Admin</b></h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<input type="hidden" value="<?= $user['id_user'] ?>" name="id_user" class="form-control" required="">
																				<div class="form-group">
																					<label><b>Nama User Admin</b></label>
																					<input type="text" name="nama" value="<?= $user['nama_user'] ?>" class="form-control" required="">
																				</div>
																				<div class="form-group">
																					<label><b>Username</b></label>
																					<input type="text" name="username" value="<?= $user['username'] ?>" class="form-control" required="">
																				</div>
																				<div class="form-group">
																					<label for="level"><b>Level User</b></label>
																					<select class="form-control" name="level" id="level" required>
																						<option value=""><b>Pilih Level</b></option>
																						<option value="admin"><b>Administrator</b></option>
																						
																					</select>
																				</div>
																				<div class="form-group">
																					<label><b>Ganti Password</b></label>
																					<input type="password" name="password" class="form-control">
																				</div>
																				<div class="form-group">
																					<div class="control-label">Status User</div>
																					<label class="custom-switch mt-2">
																						<input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ($user['status'] == 1) {
																																										echo "checked";
																																									} ?>>
																						<span class="custom-switch-indicator"></span>
																						<span class="custom-switch-description"> Pilih Status</span>
																					</label>
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
														</td>
													</tr>
													<script>
														$('#form-edit<?= $no ?>').submit(function(e) {
															e.preventDefault();
															$.ajax({
																type: 'POST',
																url: 'mod_user/crud_user.php?pg=ubah',
																data: $(this).serialize(),
																success: function(data) {
																	if (data == 'OK') {
																		iziToast.success({
																			title: 'Sukses!',
																			message: 'Data Berhasil Diubah',
																			position: 'topRight'
																		});
																		setTimeout(function() {
																			window.location.reload();
																		}, 2000);
																		$('#modal-edit<?= $no ?>').modal('hide');
																	} else {
																		iziToast.error({
																			title: 'Gagal!',
																			message: 'Data Gagal Ditambahkan atau Username Sudah Ada',
																			position: 'topRight'
																		});
																	}

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
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div>
						<div class='col-md-4'>
																							<form id="form-tambah">
									<div class='box box-solid'>
										<div class='box-header '>
											<h4 class='box-title'><b>Tambah User Admin</b></h4>
											<div class='box-tools pull-right btn-group'>
												<button type='submit' class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> <b>Simpan</b></button>
											</div>
										</div><!-- /.box-header -->
										<div class='box-body'>
																						
											<div class='form-group'>
												<label><b>Nama Lengkap</b></label>
												<input type="text" name="nama" class="form-control" required="">
											</div>
											<div class='form-group'>
												<label><b>Username</b></label>
												<input type="text" name="username" class="form-control" required="">
											</div>
											<div class="form-group">
												<label for="level"><b>Level User</b></label>
												<select class="form-control" name="level" id="level" required>
													<option value="">Pilih Level</option>
													<option value="admin"><b>Administrator</b></option>
													
												</select>
											</div>

											<div class='form-group'>
												<div class='row'>
													<div class='col-md-12'>
														<label><b>Password</b></label>
														 <input type="password" name="password" class="form-control" required="">
													</div>
													
												</div>
											</div>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</form>
													</div>
					</div>
							</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
<script>
    $(function() {
        $("#txtConfirmPassword").keyup(function() {
            var password = $("#txtNewPassword").val();
            $("#divCheckPasswordMatch").html(password == $(this).val() ? "Passwords match." : "Passwords do not match!");
        });

    });
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_user/crud_user.php?pg=tambah',
            data: $(this).serialize(),
            success: function(data) {
                if (data == 'OK') {
                    iziToast.success({
                        title: 'Sukses!',
                        message: 'Data Berhasil Ditambahkan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                    $('#tambahdata').modal('hide');
                } else {
                    iziToast.error({
                        title: 'Gagal!',
                        message: 'Data Gagal Ditambahkan atau Username Sudah Ada',
                        position: 'topRight'
                    });
                }
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
            text: 'Akan Menghapus Data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_user/crud_user.php?pg=hapus',
                    method: "POST",
                    data: 'id_user=' + id,
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