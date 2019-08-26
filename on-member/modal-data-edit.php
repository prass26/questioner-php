<?php
        $id = $_POST['id_tempat'];
        // mengambil data berdasarkan id
        include '../config.php';
		$result = mysqli_query($dbconnect, "SELECT * FROM view_kos LEFT JOIN foto ON view_kos.id_tempat = foto.id_tempat WHERE view_kos.id_tempat = $id GROUP BY view_kos.id_tempat");
		foreach ($result as $row){
			$nominal = intval(preg_replace('/[^0-9]+/', '', $row['harga']), 10);
			$nominal1 = preg_replace('/[0-9]+/', '', $row['harga']);
		?>

<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-10">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Berita</label>
			<div class="col-sm-10">
				<input type="text" name="id_tempat" value="<?php echo $id ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Penulis</label>
			<div class="col-sm-10">
				<input type="text" name="id_user" value="<?php echo $row['id_user'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Penulis</label>
			<div class="col-sm-10">
				<input type="text" name="nama" value="<?php echo $row['nama_pemilik'] ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">No Hp</label>
			<div class="col-sm-10">
				<input type="text" name="hp" value="<?php echo $row['no_hp'] ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<textarea name="alamat" class="form-control" rows="3" required autocomplete="off"><?php echo $row['alamat']; ?></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Harga</label>
			<div class="col-xs-4">
				<input type="text" name="harga1" value="<?php echo $nominal ?>" class="form-control" required autocomplete="off">
			</div>
			<div class="col-xs-3">
				<select class="form-control" name="harga2">
					<option <?php if ($nominal1 == '/Bulan'){ echo 'selected'; } ?> >/Bulan</option>
					<option <?php if ($nominal1 == '/Tahun'){ echo 'selected'; } ?> >/Tahun</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-control" name="kategori">
					<option <?php if ($row['kategori'] == 'Umum'){ echo 'selected'; } ?> >Umum</option>
					<option <?php if ($row['kategori'] == 'Putra'){ echo 'selected'; } ?> >Putra</option>
					<option <?php if ($row['kategori'] == 'Putri'){ echo 'selected'; } ?> >Putri</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Deskripsi</label>
			<div class="col-sm-10">
				<textarea name="deskripsi" class="form-control" rows="3" required autocomplete="off"><?php echo $row['deskripsi']; ?></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kasur</label>
			<div class="col-sm-10">
				<select class="form-control" name="kasur">
					<option <?php if ($row['kasur'] == '0'){ echo 'selected'; } ?> >0</option>
					<option <?php if ($row['kasur'] == '1'){ echo 'selected'; } ?> >1</option>
					<option <?php if ($row['kasur'] == '2'){ echo 'selected'; } ?> >2</option>
					<option <?php if ($row['kasur'] == '3'){ echo 'selected'; } ?> >3</option>
					<option <?php if ($row['kasur'] == '4'){ echo 'selected'; } ?> >4</option>
					<option <?php if ($row['kasur'] == '5'){ echo 'selected'; } ?> >5</option>
					<option <?php if ($row['kasur'] == '6'){ echo 'selected'; } ?> >6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Lemari</label>
			<div class="col-sm-10">
				<select class="form-control" name="lemari">
					<option <?php if ($row['lemari'] == '0'){ echo 'selected'; } ?> >0</option>
					<option <?php if ($row['lemari'] == '1'){ echo 'selected'; } ?> >1</option>
					<option <?php if ($row['lemari'] == '2'){ echo 'selected'; } ?> >2</option>
					<option <?php if ($row['lemari'] == '3'){ echo 'selected'; } ?> >3</option>
					<option <?php if ($row['lemari'] == '4'){ echo 'selected'; } ?> >4</option>
					<option <?php if ($row['lemari'] == '5'){ echo 'selected'; } ?> >5</option>
					<option <?php if ($row['lemari'] == '6'){ echo 'selected'; } ?> >6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Meja</label>
			<div class="col-sm-10">
				<select class="form-control" name="meja">
					<option <?php if ($row['meja'] == '0'){ echo 'selected'; } ?> >0</option>
					<option <?php if ($row['meja'] == '1'){ echo 'selected'; } ?> >1</option>
					<option <?php if ($row['meja'] == '2'){ echo 'selected'; } ?> >2</option>
					<option <?php if ($row['meja'] == '3'){ echo 'selected'; } ?> >3</option>
					<option <?php if ($row['meja'] == '4'){ echo 'selected'; } ?> >4</option>
					<option <?php if ($row['meja'] == '5'){ echo 'selected'; } ?> >5</option>
					<option <?php if ($row['meja'] == '6'){ echo 'selected'; } ?> >6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kamar Mandi</label>
			<div class="col-sm-10">
				<select class="form-control" name="kamar_mandi">
					<option <?php if ($row['kamar_mandi'] == '0'){ echo 'selected'; } ?> >0</option>
					<option <?php if ($row['kamar_mandi'] == '1'){ echo 'selected'; } ?> >1</option>
					<option <?php if ($row['kamar_mandi'] == '2'){ echo 'selected'; } ?> >2</option>
					<option <?php if ($row['kamar_mandi'] == '3'){ echo 'selected'; } ?> >3</option>
					<option <?php if ($row['kamar_mandi'] == '4'){ echo 'selected'; } ?> >4</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Wifi</label>
			<div class="col-sm-10">
				<select class="form-control" name="wifi">
					<option <?php if ($row['wifi'] == 'Tidak'){ echo 'selected'; } ?> >Tidak</option>
					<option <?php if ($row['wifi'] == '5Mb/s'){ echo 'selected'; } ?> >5Mb/s</option>
					<option <?php if ($row['wifi'] == '10Mb/s'){ echo 'selected'; } ?> >10Mb/s</option>
					<option <?php if ($row['wifi'] == '20Mb/s'){ echo 'selected'; } ?> >20Mb/s</option>
					<option <?php if ($row['wifi'] == '50Mb/s'){ echo 'selected'; } ?> >50Mb/s</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Dapur</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="dapur" <?php if ($row['dapur'] == 'Ya'){ echo 'checked'; } ?> >
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" value="Tidak" name="dapur" <?php if ($row['dapur'] == 'Tidak'){ echo 'checked'; } ?> >
					<label> Tidak </label>
				</div>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Air</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="air" <?php if ($row['free_air'] == 'Ya'){ echo 'checked'; } ?> >
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" value="Tidak" name="air" <?php if ($row['free_air'] == 'Tidak'){ echo 'checked'; } ?> >
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Listrik</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="listrik" <?php if ($row['free_listrik'] == 'Ya'){ echo 'checked'; } ?> >
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" value="Tidak" name="listrik" <?php if ($row['free_listrik'] == 'Tidak'){ echo 'checked'; } ?> >
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Parkir</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="parkir" <?php if ($row['parkir'] == 'Ya'){ echo 'checked'; } ?> >
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" value="Tidak" name="parkir" <?php if ($row['parkir'] == 'Tidak'){ echo 'checked'; } ?> >
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">CCTV</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="cctv" <?php if ($row['cctv'] == 'Ya'){ echo 'checked'; } ?> >
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" value="Tidak" name="cctv" <?php if ($row['cctv'] == 'Tidak'){ echo 'checked'; } ?> >
					<label> Tidak </label>
				</div>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Keterangan</label>
			<div class="col-sm-10">
				<select class="form-control" name="keterangan">
					<option <?php if ($row['keterangan'] == 'Kos'){ echo 'selected'; } ?> >Kos</option>
					<option <?php if ($row['keterangan'] == 'Kontrakan'){ echo 'selected'; } ?> >Kontrakan</option>
				</select>
			</div>
		</div>
	</div>
</div>
<?php } ?>