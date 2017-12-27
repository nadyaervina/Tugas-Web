<?php 
	session_start();
	if (!empty($_SESSION['login'])) {
		header("location:home.php");
	}
 ?>
<!DOCTYPE html>
<?php
	include  "koneksi.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LSC EXPRESS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css-login-home.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default menu">
  <div class="container-fluid">
    <div class="row">
      <div class="logo">
        <div class="col-md-4">
          <!-- <img src="gbr/kaki1.png" /> -->
        </div>
        </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Perusahaan</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Produk & Layanan</a></li>
        <li><a href="#">Solusi Bisnis</a></li>
        <li><a href="#">Karir</a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <form action="proses.php" method="POST">
                <div class="form-group">
                  <input type="text" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                <input type="password" name="password" placeholder="********" required="required">
                </div> 
                <input type="submit" name="submit" class="btn btn-primary" value="Log In">
            </form>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h1>Uknown Admin</h1>
				<p>Please Log in di Kanan Pojok Atas</p>
			</div>
			<div class="col-md-6"><h2>Kata Kata Bijak Motivasi Kerja Dan Ketekunan</h2>
			<p>Rasa semangat perlu ditingkatkan dengan kata kata bijak motivasi kerja agar hasil yang didapat bisa maksimal dan tidak ada yang sia-sia.</p>
			<p>Kerja pada dasarnya merupakan keharusan bagi setiap manusia. Tak ada pengecualian kecuali mungkin bagi mereka yang malas. Namun ketahuilah bahwa kemalasan hanya akan mendatangkan kemelaratan dalam hidup. Karena kehidupan membutuhkan para pekerja keras bukan para pemalas dan pecundang.</p>
			<p><img src="gbr/saelu.jpg" class="gambar"></p>
			<p>Sebuah syair yang tidak asing lagi bagi telinga kita bahkan menyuruh kita untuk bekerja dengan kesungguhan yang tinggi. "Bekerjalah kamu untuk duniamu seolah-olah kamu akan hidup selamanya, dan bekerjalah kamu untuk akhiratmu seolah-olah kamu akan mati besok." Pesan eksplisit dari syair tersebut adalah agar kita memiliki kesungguhan dalam bekerja baik untuk dunia maupun akhirat (ibadah).</p>
			</div>
			<div class="col-md-3">
				<h1>Recent Post</h1>
				<hr align="center"><a href="">Motivasi seorang Pengusaha Muda yang Kaya Raya</a>
				<hr align="center"><a href="">Keluarga Lebih dari Segalanya</a>
			</div>
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/s.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>