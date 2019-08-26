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
			<label class="col-sm-2 control-label">Sub Judul</label>
			<div class="col-sm-10">
			<textarea name="sub" class="form-control" rows="3"><?php echo $row['sub_judul']; ?></textarea>

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
			<label class="col-sm-2 control-label">Kategori Urutan</label>
			<div class="col-sm-10">
				<select class="form-control" name="kategori_urutan">
					<option <?php if ($row['kategori_urutan'] == '1'){ echo 'selected'; } ?> >1</option>
					<option <?php if ($row['kategori_urutan'] == '2'){ echo 'selected'; } ?> >2</option>
					<option <?php if ($row['kategori_urutan'] == '3'){ echo 'selected'; } ?> >3</option>
					<option <?php if ($row['kategori_urutan'] == '4'){ echo 'selected'; } ?> >4</option>
					<option <?php if ($row['kategori_urutan'] == '5'){ echo 'selected'; } ?> >5</option>
					<option <?php if ($row['kategori_urutan'] == '6'){ echo 'selected'; } ?> >6</option>
					<option <?php if ($row['kategori_urutan'] == '7'){ echo 'selected'; } ?> >7</option>
					<option <?php if ($row['kategori_urutan'] == '8'){ echo 'selected'; } ?> >8</option>
					<option <?php if ($row['kategori_urutan'] == '9'){ echo 'selected'; } ?> >9</option>
					<option <?php if ($row['kategori_urutan'] == '10'){ echo 'selected'; } ?> >10</option>
					<option <?php if ($row['kategori_urutan'] == '11'){ echo 'selected'; } ?> >11</option>
					<option <?php if ($row['kategori_urutan'] == '12'){ echo 'selected'; } ?> >12</option>
					<option <?php if ($row['kategori_urutan'] == '13'){ echo 'selected'; } ?> >13</option>
					<option <?php if ($row['kategori_urutan'] == '14'){ echo 'selected'; } ?> >14</option>
					<option <?php if ($row['kategori_urutan'] == '15'){ echo 'selected'; } ?> >15</option>
					<option <?php if ($row['kategori_urutan'] == '16'){ echo 'selected'; } ?> >16</option>
					<option <?php if ($row['kategori_urutan'] == '17'){ echo 'selected'; } ?> >17</option>
					<option <?php if ($row['kategori_urutan'] == '18'){ echo 'selected'; } ?> >18</option>
					<option <?php if ($row['kategori_urutan'] == '19'){ echo 'selected'; } ?> >19</option>
					<option <?php if ($row['kategori_urutan'] == '20'){ echo 'selected'; } ?> >20</option>
				</select>
			</div>
		</div>
        <div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-control" name="kategori">
					<option <?php if ($row['kategori'] == 'Kuesioner Aplikasi'){ echo 'selected'; } ?> >Kuesioner Aplikasi</option>
				</select>
			</div>
		</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>