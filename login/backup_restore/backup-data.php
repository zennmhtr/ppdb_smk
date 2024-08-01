<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
			
<div class='row'>
<div class='col-md-12 notif'>
	</div>
	<div class='col-md-6'>
		<div class='box box-solid'>
			<div class='box-header '>
				<h3 class='box-title'>Backup Data</h3>
			</div><!-- /.box-header -->
			<div class='box-body'>
				<p>Klik Tombol dibawah ini untuk membackup database </p>
				<button id='btnbackup' class='btn btn-flat btn-success'><i class='fa fa-database'></i> Backup Data</button>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
	<div class='col-md-6'>
		<div class='box box-solid'>
			<div class='box-header '>
				<h3 class='box-title'>Restore Data</h3>
			</div><!-- /.box-header -->
			<div class='box-body'>
				<form method="post" action="" enctype="multipart/form-data"
					<p>Klik Tombol dibawah ini untuk merestore database </p>
					<div class='row'>
					<div class='col-md-8'>
						 <input type="file" name="backup_file" class="input-file" />
					</div>
						<input type="submit" class='btn btn-flat btn-success' name="restore" value="Restore"
            class="btn-action" />
				</form>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
		
	</div>


</div>

<?php
if (! empty($response)) {
    ?>
<div class="response <?php echo $response["type"]; ?>">
<?php echo nl2br($response["message"]); ?>
</div>
<?php
}
?>
<?php
// SETTING DATABASE RESTORE
$conn = mysqli_connect("localhost", "root", "", "ppdbpro");
if (! empty($_FILES)) {
    // Validating SQL file type by extensions
    if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
        "sql"
    ))) {
        $response = array(
            "type" => "error",
            "message" => "Invalid File Type"
        );
    } else {
        if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
            move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
            $response = restoreMysqlDB($_FILES["backup_file"]["name"], $conn);
        }
    }
}

function restoreMysqlDB($filePath, $conn)
{
    $sql = '';
    $error = '';
    
    if (file_exists($filePath)) {
        $lines = file($filePath);
        
       foreach ($lines as $line) {
            
            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            
            $sql .= $line;
            
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (! $result) {
                    $error .= mysqli_error($conn) . "\n";
                }
                $sql = '';
            }
        } // end foreach
}
exec('rm ' . $filePath);

echo 
'<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	 Database Berhasil Di Restore<br />
	
</div>';
        
       
}

?>
<script>
	$('#btnbackup').click(function() {
				$('.notif').load('backup_restore/backup.php');
				console.log('sukses');
			});
	
	
	
</script>
