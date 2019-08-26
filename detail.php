<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - SIKOMA</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">SIKOMA (Sistem Informasi Kost & Kontrakan Malang)</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-slide-to="0" class="active"></li>
          <li data-slide-to="1"></li>
          <li data-slide-to="2"></li>
          <li data-slide-to="3"></li>
          <li data-slide-to="4"></li>
          <li data-slide-to="5"></li>
          <li data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('uploads/data/sikoma.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Selamat Datang Di SIKOMA</h3>
              <p>Portal Kost & Kontrakan Daerah Malang Raya.</p>
            </div>
          </div>
          <?php
          include 'config.php';
		  $id = $_GET["id"];
          $result = mysqli_query($dbconnect, "SELECT * FROM foto WHERE id_tempat = $id");
          foreach ($result as $row){ ?>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('uploads/data/<?php echo $row['gambar']?>')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
   <!-- Post Content Column -->
        <?php
        $id = $_GET['id'];
        // mengambil data berdasarkan id
		$result = mysqli_query($dbconnect, "SELECT * from view_kos where id_tempat = $id");
		foreach ($result as $row){
		?>
        <p>&nbsp;
        <hr>
        <div class="panel-body">
	    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="75%">
        <tr><th width="335px"><center>Nama Pemilik</center></th><td><?php echo $row['nama_pemilik'] ?></td><tr>
        <tr><th width="335px"><center>No HP</center></th><td><?php echo $row['no_hp'] ?></td><tr>
        <tr><th width="335px"><center>Alamat</center></th><td><?php echo $row['alamat'] ?></td><tr>
        <tr><th width="335px"><center>Harga</center></th><td><?php echo $row['harga'] ?></td><tr>
        <tr><th width="335px"><center>Kategori</center></th><td><?php echo $row['kategori'] ?></td><tr>
        <tr><th width="335px"><center>Keterangan</center></th><td><?php echo $row['keterangan'] ?></td><tr>
        <tr><th width="335px"><center>Deskripsi</center></th><td><?php echo $row['deskripsi'] ?></td><tr>
        <tr><th width="335px"><center>Kasur</center></th><td><?php echo $row['kasur'] ?></td><tr>
        <tr><th width="335px"><center>Lemari</center></th><td><?php echo $row['lemari'] ?></td><tr>
        <tr><th width="335px"><center>Meja</center></th><td><?php echo $row['meja'] ?></td><tr>
        <tr><th width="335px"><center>WiFi</center></th><td><?php echo $row['wifi'] ?></td><tr>
        <tr><th width="335px"><center>Dapur</center></th><td><?php echo $row['dapur'] ?></td><tr>
        <tr><th width="335px"><center>Free Air</center></th><td><?php echo $row['free_air'] ?></td><tr>
        <tr><th width="335px"><center>Free Listrik</center></th><td><?php echo $row['free_listrik'] ?></td><tr>
        <tr><th width="335px"><center>Parkir</center></th><td><?php echo $row['parkir'] ?></td><tr>
        <tr><th width="335px"><center>CCTV</center></th><td><?php echo $row['cctv'] ?></td><tr>
        </table>
		<?php } ?>

        <hr>

          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <!-- Footer -->
    <footer id="about" class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><b>Copyright &copy; Pend TI UM '15</b></p>
        <p class="m-0 text-center text-white">Prasetyo Adi Nugroho (150533600535)</p>
        <p class="m-0 text-center text-white">Puguh Sasmito (150533604474)</p>
        <p class="m-0 text-center text-white">Septian Adi Pratama (150533604474)</p>
        <p class="m-0 text-center text-white">Vrenta Sekar (150533604967)</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
