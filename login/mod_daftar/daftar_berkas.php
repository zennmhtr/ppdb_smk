<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<!-- Modal -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><b>DATA BERKAS PPDB</b></h4>
            </div>
			
            <div class="card-body">
			<p>
				<small><b>Jika Tulisan Terdapat <a class="btn btn-sm btn-success"> <b>Lihat Disini</b> </a> Siswa Sudah Mengupload Berkas</b></small></p>
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-bordered table-sm" id="table-1">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="text-center">
                                    <b>No</b>
                                </th>
                                <th><b>Nama Pendaftar</b></th>
                                <th><b>Asal Sekolah</b></th>
                                <th><b>Kartu Keluarga</b></th>
								<th><b>Ijazah / SKl</b></th>
								<th><b>Akta</b></th>
								<th><b>SKTM / KIP</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM daftar");
                            $no = 0;
                            while ($daftar = mysqli_fetch_array($query)) {
                                $no++;
                                $bayar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(jumlah_bayar) AS total FROM bayar WHERE id_daftar='$daftar[id_daftar]'"));
                            ?>
                                <tr style="text-align: center;">
                                    <td><b><?= $no; ?></b></td>
                                    
                                    <td><b><?= $daftar['nama'] ?></b></td>
                                    <td><b><?= $daftar['asal_sekolah'] ?></b></td>
                                    
                                    <td>
                                     <?php if ($daftar['kk'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Kartu Keluarga" href="../<?= $daftar['kk'] ?>" class="btn btn-sm btn-success"> <b>Lihat Disini</b> </a><?php } ?> 
                                     </td>
									 <td>
									 <?php if ($daftar['ijazah'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Ijazah/SKl" href="../<?= $daftar['ijazah'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-address-card    "></i></a><?php } ?> 
                                    </td>
									 <td>
									 <?php if ($daftar['akta'] <> null) { ?> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Akta Kelahiran" href="../<?= $daftar['akta'] ?>" class="btn btn-sm btn-warning"><i class="far fa-address-card    "></i></a><?php } ?> 
                                    </td>
									 <td>
									 <?php if ($daftar['kip'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="KIP/SKTM" href="../<?= $daftar['kip'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-envelope    "></i></a><?php } ?> 
                                        <!-- Button trigger modal -->
                                    </td>
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
