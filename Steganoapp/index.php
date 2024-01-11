<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Steganografi</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

</div>
</nav>
<div class="navbar navbar-fixed-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Kelompok 3</a>
    <div class="navbar-header">
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#enkripsi">Enkripsi</a></li>
        <li><a href="#dekripsi">Dekripsi</a></li>
      </ul>
    </div>
   </div>
</div>

<div class="header alt vert">
  <div class="container">
    <div>&nbsp;</div>
    <h2>Steganografi</h2>
      <p class="lead">Seni menyembunyikan pesan dengan gambar</p>
      <div>&nbsp;</div>
      <a href="#enkripsi" class="btn btn-default btn-lg">Mulai</a>
  </div>
</div>

<hr>

<div id="enkripsi" class="blurb">
  <div class="container">
    <div class="row">
      <form action="encrypt.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="exampleInputFile">Background</label>
			<input type="file" name="background">
			<p class="help-block">Gambar untuk background.</p>
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">Pesan Gambar</label>
			<input type="file" name="pesan">
			<p class="help-block">Pesan gambar yang akan disembunyikan.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Enkrip</button>
		</form>
    </div>
  </div>
</div>

<hr>

<div id="dekripsi" class="featurette">
  <div class="container">
    <div class="row">
      <form action="decrypt.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="exampleInputFile">Pilih Gambar</label>
			<input type="file" name="pesan">
			<p class="help-block">Gambar yang telah disisipi pesan rahasia.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Pecahkan</button>
		</form>
    </div>
  </div>
</div>


<hr>

<div id="profiles" class="profiles">
  <div class="container">
    <div class="row">
      <!-- Profile Pertama -->
      <div class="col-md-6">
        <div class="profile">
          <img src="ProfileIqbal.jpg" alt="Profile 1" class="img-circle">
          <h3>Muhammad Iqbal Hanafi</h3>
          <p>Seorang desainer kreatif dengan hasrat untuk menciptakan visual yang memukau. Dengan keahlian desain grafisnya, ia membawa ide-ide menjadi kenyataan.</p>
        </div>
      </div>

      <!-- Profile Kedua -->
      <div class="col-md-6">
        <div class="profile">
          <img src="ProfileAqsal.jpg" alt="Profile 2" class="img-circle">
          <h3>Aqsal Rheznandya Prasadhana</h3>
          <p> Seorang penggemar teknologi yang selalu mencari inovasi. Dengan keahliannya dalam pemrograman, ia berkontribusi pada pengembangan proyek-proyek kreatif.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="copyright" class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>