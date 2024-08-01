

<font face="arial">
			<section class='content'>
																					<div class='row'>
							<div class='col-md-12'>
								<div class='box box-solid'>
									<div class='box-header'>
										<h3 class='box-title'>Preview Laporan PPDB</h3>
										<div class='box-tools pull-right btn-group'>
											 <a class="btn btn-primary" href="mod_laporan/print_daftar.php" role="button"><i class="fas fa-print"></i> CETAK</a>
										</div>
									</div>
									<div class='box-body' style='background:#c3c3c3;  height:1275px;'>
										<div class='table-responsive'>
											<div style='background:#fff; width:80%; margin:0 auto; padding:35px; height:90%;'>
												<!-- <table border='0' width='100%'> -->
												<img src="../<?= $setting['kop'] ?>" width="100%" />
												
												<hr>
												
												<table style="width:100%">
													<tr>
														
														<td colspan='2' align='center'>
																<b>LAPORAN PENERIMAAN PESERTA DIDIK BARU</b>
														</td>
														
													</tr>
													<tr>
														<td colspan='2' align='center'>
															<b><?= $setting['nama_sekolah'] ?></b>
														</td>
													</tr>
													<tr>
														<td colspan='2' align='center'>
															<b>TAHUN PELAJARAN <?php echo date("Y");?> / <?php echo date('Y', mktime( 0, 0, 0, date('n'), date('j'), date('y') + 1));?></b>
														</td>
													</tr>
												</table>
												<br>
												<table border='0' width='100%' align='center'>
													<tr height='30'>
														<td height='30' colspan='4' style='text-align: justify;'>Data Siswa Baru Tahun Pelajaran  <b> <?php echo date("Y");?> / <?php echo date('Y', mktime( 0, 0, 0, date('n'), date('j'), date('y') + 1));?></b> pada Sekolah <b><?= $setting['nama_sekolah'] ?></b></td>
													</tr>
												</table>
												<br>
												<table  width='100%' style="font-size:12px" border='1px' class="table table-sm table-bordered" class="text-center" >
												<thead style="background-color:cornflowerblue;">
													<tr  width='90%' style="text-align: center;">
														<th class="text-center">
															<b>No</b>
														</th>
														<th><b>NISN</b></th>
														<th><b>Nama Pendaftar</b></th>
														<th><b>JK</b></th>
														<th><b>Asal Sekolah</b></th>
														<th><b>Status Penerimaan</b></th>
														
													</tr>
													</thead>
													
													<tbody>
														<?php
														$query = mysqli_query($koneksi, "SELECT * FROM daftar ");
														$no = 0;
														while ($daftar = mysqli_fetch_array($query)) {
															$no++;
															$bayar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(jumlah_bayar) AS total FROM bayar WHERE id_daftar='$daftar[id_daftar]' "));
														?>
															<tr style="text-align: center;">
																<td><b><?= $no; ?></b></td>
																<td><b><?= $daftar['nisn'] ?></b></td>
																<td><b><?= $daftar['nama'] ?></b></td>
																<td><b><?= $daftar['jenkel'] ?></b></td>
																<td><b><?= $daftar['asal_sekolah'] ?></b></td>
																<td>
																<?php if ($daftar['status'] == 1) { ?>
																<span class="badge badge-success">Diterima</span>
																<?php } elseif ($daftar['status'] == 2) { ?>
																<span class="badge badge-danger">Dicadangkan </span>
																<?php } else { ?>
																<span class="badge badge-warning">Diverifikasi</span>
																<?php } ?>
																</td>
															   
																
																
																
															</tr>
															
														<?php }
														?>


													</tbody>
													
													
													
												</table>
												<table width="100%" style="margin-left: 200px;margin-right:100px;font-size:12px">
												<tr>
												   
													<td width="60%" height='30'>
													  
														<p>Panitia PPDB</p>
														<br><br><br>
													   ......................
														<p></p>

												   
												
												   
													<td width="40%" height='50'>
														<?= $setting['kec'] ?>, <?= date('d M Y') ?>
														<p>Kepala <?= $setting['nama_sekolah'] ?></p>
														<br><br><br>
														<?= $setting['kepala'] ?>
														<p></p>

													</td>
													
												</tr>
											</table>
		

												<br><br><br><br><br>
												<table width='100%' height='30'>
													<tbody>
														<tr>
															<td width='25px' style='border:1px solid black'></td>
															<td width='5px'>&nbsp;</td>
															<td style='border:1px solid black;font-weight:bold;font-size:14px;text-align:center;'><?= $setting['nama_sekolah'] ?></td>
															<td width='5px'>&nbsp;</td>
															<td width='25px' style='border:1px solid black'></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
												</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		
</font>