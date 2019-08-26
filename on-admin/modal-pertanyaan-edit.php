<?php
        $id = $_POST['id_quest'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * FROM pertanyaan WHERE id_quest = $id");
		foreach ($result as $row){
		?>

<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-10">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Pertanyaan</label>
			<div class="col-sm-10">
				<input type="text" name="id_quest" value="<?php echo $id ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pertanyaan</label>
			<div class="col-sm-10">
			<textarea name="pertanyaan" class="form-control" rows="3" required autocomplete="off"><?php echo $row['pertanyaan']; ?></textarea>

			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 1</label>
			<div class="col-sm-10">
				<textarea name="pil1" class="form-control" rows="3"><?php echo $row['pil1']; ?></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 2</label>
			<div class="col-sm-10">
				<textarea name="pil2" class="form-control" rows="3"><?php echo $row['pil2']; ?></textarea>
			</div>
		</div>
<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 3</label>
			<div class="col-sm-10">
				<textarea name="pil3" class="form-control" rows="3"><?php echo $row['pil3']; ?></textarea>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 4</label>
			<div class="col-sm-10">
				<textarea name="pil4" class="form-control" rows="3"><?php echo $row['pil4']; ?></textarea>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 5</label>
			<div class="col-sm-10">
				<textarea name="pil5" class="form-control" rows="3"><?php echo $row['pil5']; ?></textarea>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Pilihan 6</label>
			<div class="col-sm-10">
				<textarea name="pil6" class="form-control" rows="3"><?php echo $row['pil6']; ?></textarea>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-control" name="kategori">
					<option <?php if ($row['kategori'] == 'Kuesioner Aplikasi'){ echo 'selected'; } ?> >Kuesioner Aplikasi</option>
					<option <?php if ($row['kategori'] == 'Pertanyaan Umum'){ echo 'selected'; } ?> >Pertanyaan Umum</option>
					<option <?php if ($row['kategori'] == 'Pertanyaan Tingkat Kematangan'){ echo 'selected'; } ?> >Pertanyaan Tingkat Kematangan</option>
				</select>
			</div>
		</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>