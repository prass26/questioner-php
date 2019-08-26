<?php
        $id = $_POST['id_tempat'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * from fasilitas where id_tempat = $id");
		foreach ($result as $row){
		?>

<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-10">
					<input type="hidden" name="id" id="id" value="<?php echo $row['id_tempat'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kasur</label>
			<div class="col-sm-10">
				<input type="text" name="kasur" value="<?php echo $row['kasur'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Lemari</label>
			<div class="col-sm-10">
				<input type="text" name="lemari" value="<?php echo $row['lemari'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Meja</label>
			<div class="col-sm-10">
				<input type="email" name="meja" value="<?php echo $row['meja'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kamar Mandi</label>
			<div class="col-sm-10">
				<input type="text" name="kamar_mandi" value="<?php echo $row['kamar_mandi'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Wifi</label>
			<div class="col-sm-10">
				<input type="text" name="wifi" value="<?php echo $row['wifi'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Dapur</label>
			<div class="col-sm-10">
				<input type="text" name="dapur" value="<?php echo $row['dapur'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Air</label>
			<div class="col-sm-10">
				<input type="text" name="air" value="<?php echo $row['free_air'] ?>" class="form-control" readonly>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Listrik</label>
			<div class="col-sm-10">
				<input type="text" name="listrik" value="<?php echo $row['free_listrik'] ?>" class="form-control" readonly>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Parkir</label>
			<div class="col-sm-10">
				<input type="text" name="parkir" value="<?php echo $row['parkir'] ?>" class="form-control" readonly>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">CCTV</label>
			<div class="col-sm-10">
				<input type="text" name="cctv" value="<?php echo $row['cctv'] ?>" class="form-control" readonly>
			</div>
		</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Gambar</label>
			<div class="col-sm-10">
				<?php } ?>

				<?php 
				$result = mysqli_query($dbconnect, "SELECT * from foto where id_tempat = $id");
				foreach ($result as $row){
				?>

				<center><img src="../uploads/data/<?php echo $row['gambar'] ?>" border="0" width="350"/></center><br>
				<?php } ?>
			</div>
		</div>
	</div>
</div>