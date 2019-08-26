<?php
        $id = $_POST['id_quest'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * from pertanyaan where id_quest = $id");
		foreach ($result as $row){
		?>

<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-10">
					<input type="hidden" name="id" id="id" value="<?php echo $row['id_quest'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Sub Judul</label>
			<div class="col-sm-10">
				<input type="textarea" name="sub" value="<?php echo $row['sub_judul'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pertanyaan</label>
			<div class="col-sm-10">
				<input type="text" name="kasur" value="<?php echo $row['pertanyaan'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 1</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil1" value="<?php echo $row['pil1'] ?>" class="form-control" readonly>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 2</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil2" value="<?php echo $row['pil2'] ?>" class="form-control" readonly>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 3</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil3" value="<?php echo $row['pil3'] ?>" class="form-control" readonly>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 4</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil4" value="<?php echo $row['pil4'] ?>" class="form-control" readonly>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 5</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil5" value="<?php echo $row['pil5'] ?>" class="form-control" readonly>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 6</label>
			<div class="col-sm-10">
				<input type="textarea" name="pil6" value="<?php echo $row['pil6'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori Urutan</label>
			<div class="col-sm-10">
				<input type="textarea" name="kategori_urutan" value="<?php echo $row['kategori_urutan'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<input type="textarea" name="kategori" value="<?php echo $row['kategori'] ?>" class="form-control" readonly>
			</div>
		</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>