<?php
        $id = $_POST['id_tempat'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * from view_kos where id_tempat = $id");
		foreach ($result as $row){
		?>
			<div class="panel-body">
				<p class="lead">Apakah anda yakin ingin menghapus ID Berita <?php echo $row['id_tempat']; ?></p>
			</div>
			<div class="col-lg-10">
					<input type="hidden" name="id" id="id_user" value="<?php echo $row['id_tempat']; ?>" class="form-control" readonly="">
			</div>

<?php } ?>