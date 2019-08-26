<?php
        $id = $_POST['id_quest'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * from pertanyaan where id_quest = $id");
		foreach ($result as $row){
		?>
			<div class="panel-body">
				<p class="lead">Apakah anda yakin ingin menghapus Pertanyaan dengan ID <?php echo $row['id_quest']; ?></p>
			</div>
			<div class="col-lg-10">
					<input type="hidden" name="id" id="id_quest" value="<?php echo $row['id_quest']; ?>" class="form-control" readonly="">
			</div>

<?php } ?>