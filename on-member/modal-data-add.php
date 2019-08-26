<?php
session_start();
?>
<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-10">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID User</label>
			<div class="col-sm-10">
				<input type="text" name="id_user" value="<?php echo $_SESSION['sess_id'] ?>" class="form-control" readonly>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Pemilik</label>
			<div class="col-sm-10">
				<input type="text" name="nama" value="" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">No Hp</label>
			<div class="col-sm-10">
				<input type="text" name="hp" value="" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<textarea name="alamat" class="form-control" rows="3" required autocomplete="off"></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Harga</label>
			<div class="col-xs-4">
				<input type="text" name="harga1" value="" class="form-control" required autocomplete="off">
			</div>
			<div class="col-xs-3">
				<select class="form-control" name="harga2">
					<option>/Bulan</option>
					<option>/Tahun</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-control" name="kategori">
					<option>Umum</option>
					<option>Putra</option>
					<option>Putri</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Deskripsi</label>
			<div class="col-sm-10">
				<textarea name="deskripsi" class="form-control" rows="3" required autocomplete="off"></textarea>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kasur</label>
			<div class="col-sm-10">
				<select class="form-control" name="kasur">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Lemari</label>
			<div class="col-sm-10">
				<select class="form-control" name="lemari">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Meja</label>
			<div class="col-sm-10">
				<select class="form-control" name="meja">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kamar Mandi</label>
			<div class="col-sm-10">
				<select class="form-control" name="kamar_mandi">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Wifi</label>
			<div class="col-sm-10">
				<select class="form-control" name="wifi">
					<option>Tidak</option>
					<option>5Mb/s</option>
					<option>10Mb/s</option>
					<option>20Mb/s</option>
					<option>50Mb/s</option>
				</select>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Dapur</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="dapur">
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input checked type="radio" value="Tidak" name="dapur">
					<label> Tidak </label>
				</div>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Air</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="air">
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input checked type="radio" value="Tidak" name="air">
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Free Listrik</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="listrik">
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input checked type="radio" value="Tidak" name="listrik">
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Parkir</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="parkir">
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input checked type="radio" value="Tidak" name="parkir">
					<label> Tidak </label>
				</div>
			</div>
		</div><div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">CCTV</label>
			<div class="col-sm-10">
				<div class="radio radio-inline">
					<input type="radio" value="Ya" name="cctv">
					<label> Ya </label>
				</div>
				<div class="radio radio-inline">
					<input checked type="radio" value="Tidak" name="cctv">
					<label> Tidak </label>
				</div>
			</div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Gambar</label>
			<div class="col-sm-10">
				<div class="input-group">
	                <label class="input-group-btn">
	                    <span class="btn btn-primary">
	                        Browse&hellip; <input type="file" style="display: none;" name="upload[]" accept="image/x-png,image/jpeg" required multiple>
	                    </span>
	                </label>
	                <input type="text" class="form-control" readonly>
	            </div>
	        </div>
		</div>
		<div class="hr-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Keterangan</label>
			<div class="col-sm-10">
				<select class="form-control" name="keterangan">
					<option>Kos</option>
					<option>Kontrakan</option>
				</select>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function() {
	// We can attach the `fileselect` event to all file inputs on the page
	$(document).on('change', ':file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});

  // We can watch for our custom `fileselect` event like this
	$(document).ready( function() {
	    $(':file').on('fileselect', function(event, numFiles, label) {
	        var input = $(this).parents('.input-group').find(':text'),
	            log = numFiles > 1 ? numFiles + ' files selected' : label;
	        if( input.length ) {
	            input.val(log);
	        } else {
	            if( log ) alert(log);
	        }
	    });
	});  
});
</script>