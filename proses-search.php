<?php 
error_reporting(0);
include 'konek-search.php' 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Logistic Super Cepat</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
        <div class="col-md-4">
          <img src="gbr/d.jpg" />
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
        <li><a href="#">Hubungi Kami</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container-fluid atas">
      <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-12 aku">
              <div class="gambar">
                  <img class="slides" src="gbr/gambarku.jpg" />
            </div>
          </div>

        </div>
      </div>   
    <!-- s -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1></h1>
        </div>
      </div>
      </div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<hr align="center">	<h3>LACAK KIRIMAN</h3>
					 
				</div>
			<div class="col-md-9">
				<h1>LACAK KIRIMAN</h1>
				<p>Mohon doa dan dukungan dari teman teman semua untuk memperkenalkan rancangan perusahaan kami dengan cara banyak-banyaklah mengirimkan barang anda keluar kota ataupun daerah setempat dengan layanan kami</p>
			<!-- proses pencaharian data yang ada di database -->
			<?php
			$search = $_POST['search'];
			if ($search !='') {
			 	$select = mysqli_query($conn, "SELECT * FROM sistem WHERE resi LIKE '".$search."'" );
			 } 
			
				
				while ($baris = mysqli_fetch_array($select)) {
			?>

			<table class="table table-hover table-striped table-bordered">
			<tr>
				<td>Resi</td>
				<td>Service</td>
				<td>Tujuan</td>
				<td>Consignee</td>
				<td>Date_Received</td>
				<td>Receiver</td>
				<td>Status</td>
			</tr>

			<tr>
				<td><?php echo $baris['resi'] ?></td>
				<td> <?php echo $baris['service'] ?> </td>
				<td><?php echo $baris['tujuan'] ?></td>
				<td><?php echo $baris['consignee'] ?></td>
				<td><?php echo $baris['date_receiver'] ?></td>
				<td><?php echo $baris['receiver'] ?></td>
				<td><?php echo $baris['status'] ?></td>

			</tr>
			<?php } ?>
		</table>
	</div>
</div>
</div>
</div>

<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				</div>
			<div class="col-md-9"><p>
				<br>
				<br>
			</p></div>
		</div>
	</div>
</div>

 <div class="container-fluid footer">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-4 ab">
      				<img src="gbr/kaki1.png">
      				<h4>Kantor Pusat</h4>
      				<p>Jalan Telekomunikasi no.1
      				<br>Kab.Bandung Jawa Barat 42507
      				<br>Indonesia</p>
      				<p>Contact Center. (021) 2928 9898
      				<br>Office. (62-21) 2928 9796
      				<br>Fax. (62-21) 2929 9697
      				<br>Email. lsc_care@lsc.co.id</p>
      			</div>
      			<div class="col-md-2 abc">
      				<h4>Perusahaan</h4>
      				<a href="">Profil Perusahaan</a>
      				<br><a href="">Penghargaan</a>
      				<br><a href="">CSR</a>
      			</div>
      			<div class="col-md-2 abcd">
      				<h4>Produk & Layanan</h4>
      				<a href="">LSC Express</a>
      				<br><a href="">LSC Reguler</a>
      				<br><a href="">LSC Logistic</a>
      			</div>
      			<div class="col-md-2 abcde">
      				<h4>Solusi Bisni</h4>
      				<a href="">Kemitraan</a>
      				<br><a href="">Corporate</a>
      				<br><a href="">Tentang Indonesia</a>
      				<div class="tbl">
      				<br><br><br><br><p><a href="" class="btn btn-success">Download Kode Pos</a></p></div>
      			</div>
      			<div class="col-md-2 logo">
      				<h4>Link Terkait</h4>
      				<a href="">Trace&Tracking</a>
      				<br><a href="">Shipping Rates</a>
      				<br><a href="">Our Networks</a>
      				<br><a href="">Berita</a>
      				<br><br><br><a href="" class="as"><img src="gbr/g.play.png"></a>
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