<form enctype="multipart/form-data" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">File Database (*.sql)</label>
        <div class="col-sm-7">
            <input type="text" name="nip" class="form-control" maxlength="12">
            <input type="file" name="datafile" size="30" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-7">
            <button type="submit" name="restore" class="btn btn-danger">Restore Database</button>
        </div>
    </div>
</form>
<?php
    if(isset($_POST['restore'])){
        $koneksi = mysqli_connect("localhost","root","","db_sppdinas");
        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
        $nama_file = $_FILES['datafile']['name'];
        $ukuran = $_FILES['datafile']['size'];
        if ($nama_file == ""){
            echo "Fatal Error";
        }
        else {
            $uploaddir = './pages/backup-restore/restore/';
            $alamatfile = $uploaddir.$nama_file;
            if (move_uploaded_file($_FILES['datafile']['tmp_name'], $alamatfile)){
                $filename = './pages/backup-restore/restore/'.$nama_file;
                $templine = '';
                $lines = file($filename);
                foreach ($lines as $line){
                    if (substr($line, 0, 2) == '--' || $line == '')
                    continue;
                    $templine .= $line;
                    if (substr(trim($line), -1, 1) == ';'){
                        if (!mysqli_query($koneksi, $templine)) {
                            echo 'Error performing query \'' . $templine . '\': ' . mysqli_error($koneksi) . '<br>';
                        }
                        $templine = '';
                    }
                }
                echo "Restore Database Telah Berhasil, Silahkan dicek !";
            }
            else{
                echo "Restore Database Gagal, kode error = " . $_FILES['location']['error'];
            }    
        }
        mysqli_close($koneksi);
    }
?>
