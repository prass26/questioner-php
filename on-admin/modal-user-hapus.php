<?php
        $id = $_POST['user_id'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * from users where id_user = $id");
		foreach ($result as $row){
		?>
			<div class="panel-body">
				<p class="lead">Apakah anda yakin ingin menghapus User ID <?php echo $row['id_user']; ?></p>
			</div>
			<div class="col-lg-10">
					<input type="hidden" name="id" id="id_user" value="<?php echo $row['id_user']; ?>" class="form-control" readonly="">
			</div>

<?php } ?>