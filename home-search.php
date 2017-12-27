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
      <div class="logo">
        <div class="col-md-4">
          <img src="gbr/d.jpg" />
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
                  <img class="slides" src="gbr/kl.jpg" />
                  <img class="slides" src="gbr/l.jpg" />
                  <!-- <img class="slides" src="gbr/s.jpg" /> -->
                  <img class="slides" src="gbr/gambarku2.jpg" />
                  <img class="slides" src="gbr/gambarku3.jpg" />
                  <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
                  <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
            </div>
          </div>

        </div>
      </div>   
    <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1></h1>
        </div>
      </div>
      </div> -->
      
      <div class="container-fluid kedua">
        <div class="container">
        <div class="row">
          <div class="col-sm-4 a">
            <h2>LACAK KIRIMAN</h2>
		<form action="proses-search.php" method="POST">
			<input class="lacak" type="text" name="search" placeholder="Trace & Track" maxlength="11" required="required">
			<button type="submit" name="submit" class="btn btn-success" >TRACKING</button>
			<?php 
				if (isset($_POST['submit'])) {
					header("location:proses-search.php");
				}
			 ?>

	</div>
	<div class="col-sm-5 b">
                    <h2>TARIF KIRIMAN</h2>
                    <form action="" method="POST">
                      <input class="lacak1" type="text" name="dari" placeholder="Origin">
                      <input class="lacak1" type="text" name="ke" placeholder="Destination">
                       <input class="lacak2" type="text" name="berat" placeholder="1 KG">
                       <a href="" class="btn btn-success">CHECK</a>
                    </div>
                      <div class="col-sm-3 c">
                  <h2>TITIK LAYANAN</h2>
                <form action="" method="POST">
                <input class="lacak3" type="text" name="cari_lokasi" placeholder="Find Location Near" maxlength="11">
                <a href="" class="btn btn-success glyphicon glyphicon-search"></a>
            </div>
          </div>
        </div>
      </div>
      

      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1></h1>
        </div>
      </div>
    </div> -->
      
      <div class="container-fluid ">
        <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h2><small>Produk</small></h2>
            <hr color="#1233ed" align="center"><img src="gbr/sikentangLSC.jpg">
            <h4><small>Dengan pengalaman selama 27 tahun, Logistic Super Cepat melayani kebutuhan pelanggan setianya, dengan jasa pengiriman dalam dan luar negeri.</small></h4>
            <h1></h1>
            <h5><a href=""><p class="glyphicon glyphicon-chevron-right"></p>LSC Express</a>
            <br><a href=""><p class="glyphicon glyphicon-chevron-right"></p>LSC Reguler</a>
            <br><a href=""><p class="glyphicon glyphicon-chevron-right"></p>LSC Logistic</a></h5>
          </div>
          <div class="col-sm-3">
            <h2><small>Publikasi</small></h2>
            <hr align="center"><p>05/12/2017</p>
            <a href="" class="aliffont"><h2>Ratusan Anak Sumbang Karya dalam Rangkaian HUT LSC Ke-1 Tahun di Bojong Soang</h2></a>
            <h4><small>Bandung, Desember 2017 – Setelah euforia perayaan HUT ke-1 Logistic Super Cepat di Telkom University Convention Hall</h4></small>
            <hr align="center"><p><a href="">HUT ke 27 JNE Berbagi dengan 27 Panti Asuhan dan Dhuafa di Jateng-DIY</a></p>
            <hr align="center"><p><a href="">Penyelenggaraan Harbokir 2017 Dalam Rangka HUT LSC Ke-1 Semakin Viral</a></p>
            <hr align="center">

          </div>
          <div color="#1233ed" class="col-sm-3">
            <h2><small>Event</small></h1>
            <hr align="center"><img src="gbr/mewarnai.jpg">
            <p>05/12/2017</p>
            <h3><a href="">Mewarnai Indonesia</a></h3>

          </div>
          <div color="#1233ed" class="col-sm-3">
            <h2><small>Ask Kentang</small></h2>
            <hr align="center"><img src="gbr/tanyakentang.jpg">
				<h4>Subject</h4>
				<!-- <select class="masuk" name="tujuan"> -->
					<select class="form-control">
						<?php
								$tanya = array ("Customer Service","Sousi Bisnis","LSC Logistic","LSC Express","Trace & Tracking");
								foreach ($tanya as $no => $array) {
									echo "<option value='$array'>".$array."</option>";
								}
							?>
					</select>
					<br>
					<a href="" class="btn btn-success">Ask Now</a>
					<hr align="center"><h3 style="text-align: right;">(021) 2928 9898 <p class="glyphicon glyphicon-phone-alt"></p></h3>
					<h3 style="text-align: right;">lsc_care@lsc.co.id <p class="glyphicon glyphicon-envelope"></p></h3>
					<hr align="center">
					<a href=""><i class="fa fa-facebook fa-lg"></i></a>


          </div>
        </div>
      </div>
      </div>

      <div class="container-fluid">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
      				<h1></h1>
      			</div>
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
      <script>
      var index = 1;
      function plusIndex(n){
        index = index + n;
        showImage(index);
      }

      showImage(1);
      function showImage(n){
        var i;
        var x = document.getElementsByClassName("slides");
        if ( n > x.length ) { index = 1 };
        if ( n < 1 ) { index = x.length };

        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        x[index-1].style.display = "block";
      }
      autoSlide();
      function autoSlide(){
        var i;
        var x = document.getElementsByClassName("slides");

        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        if (index > x.length) { index =1};
        x[index-1].style.display = "block";
        index++;
        setTimeout(autoSlide,2000);
      }
    </script>
</html>