<?php
    $id = $_POST['user_id'];
    // mengambil data berdasarkan id
    include '../config.php';
	$result = mysqli_query($dbconnect, "SELECT * from users where id_user = '$id'");
	foreach ($result as $row){
?>

<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<label class="col-lg-2 control-label">ID</label>
			<div class="col-lg-10">
					<input type="text" name="id" id="id_user" value="<?php echo $row['id_user']; ?>" class="form-control" readonly="">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="name" value="<?php echo $row['nama']; ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">No. HP</label>
			<div class="col-sm-10">
				<input type="text" name="hp" value="<?php echo $row['no_hp']; ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
		<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<textarea name="alamat" value="" class="form-control" rows="3" required autocomplete="off"><?php echo $row['alamat']; ?></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">E-Mail</label>
			<div class="col-sm-10">
				<input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="password" value="" class="form-control" placeholder="KOSONGKAN JIKA TIDAK INGIN MENGUBAH PASSWORD" autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Level</label>
			<div class="col-sm-10">
				<select class="form-control" name="level">
					<option <?php if ($row['level_user'] == 'admin'){ echo 'selected'; } ?> >admin</option>
					<option <?php if ($row['level_user'] == 'member'){ echo 'selected'; } ?> >member</option>
				</select>
			</div>
		</div>
	</div>
</div>
<?php } ?>