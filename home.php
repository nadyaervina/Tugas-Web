<?php
	// buat login ke admin
	session_start();
	if (empty($_SESSION['login'])) {
		header("location:login-home.php");
	}
?>
<!DOCTYPE html>
<?php 
		include  "konek.php";
 ?>
<html>
	<head>
		<title>Welcome Delivery Fast</title>
		<link rel="stylesheet" type="text/css" href="bedalagi.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<style type="text/css">
				label {
				color:red;
				}
		</style>
		
	</head>
	
	<body>
		<!--Format Text//komentar ini -->
		<div class="container">
			<div class="main">
		<div align="center">
		<h2>Delivery Fast</h2>
		
		<div align="center"  style="color:black;">
			<table width="500">
			
			<form action="" method="POST">
				<!-- input pengiriman barang -->
				<p>Nomor Resi</p>
				<input class="input" type="text" name="resi" placeholder="Nomor Resi" maxlength="11">
				
				<p>Service</p>
				<input type="radio" name="service" value="Reguler" > Reguler 
				<input type="radio" name="service" value="Express" > Express

				<p>Destination</p>
				<select class="masuk" name="tujuan">
						<option>-TUJUAN-</option>
						<?php
								$tujuan = array ("Bandung","Bekasi","Bogor","Depok","Jakarta","Medan","Tanggerang","Wonosobo");
								foreach ($tujuan as $no => $array) {
									echo "<option value='$array'>".$array."</option>";
								}
							?>
					</select>

				<p>Consignee</p>
				<input class="input" type="text" name="consignee" placeholder="Consignee">

				<p>Date Received</p>
						<select class="masuk" name="date">
							<option>Tanggal</option>
							<?php
								for ($date=1; $date <=31 ; $date++) { 
									echo "<option value=".$date.">".$date."</option>";
								}
							?>
						</select>
						<select class="masuk" name="month">
							<option>Bulan</option>
							<?php
								$month = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember",);
								foreach ($month as $no => $array) {
									echo "<option value=".($no+1).">".$array."</option>";
								}
							?>
						</select>
						<select class="masuk" name="year">
							<option>Tahun</option>
							<?php
								for ($year=2017; $year <=2030 ; $year++) { 
									echo "<option value=".$year.">".$year."</option>";
								}
							?>
						</select>

					<p>Receiver</p>
					<input class="input" type="text" name="receiver" placeholder="Receiver">
			
					<p>Status</p>
					<input type="radio" name="status" value="OnProses" > On Proses 
					<input type="radio" name="status" value="Sucsess" > Succsess 
					<p></p>
					<input class="input" type="submit" name="submit" value="Simpan">
					<input class="logout" type="submit" name="logout" value="Logout">

			</form>
			<!-- buat memasukan data yg di input ke database -->
			<?php 
				if (isset($_POST['submit'])) {
					$resi = $_POST['resi'];
					$service = $_POST['service'];
					$tujuan = $_POST['tujuan'];
					$consignee = $_POST['consignee'];
					$date_receiver = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
					$receiver = $_POST['receiver'];
					$status = $_POST['status'];
					
					$sql = "INSERT INTO `sistem`(`no`, `resi`, `service`, `tujuan`, `consignee`, `date_receiver`, `receiver`, `status`) VALUES ('','$resi','$service','$tujuan','$consignee','$date_receiver','$receiver','$status')";
					mysqli_query($conn,$sql);
					if (mysqli_affected_rows($conn) >0) {
						echo "<script> alert('sukses');</script>";
					}
					else{
						echo "<script> alert('yahh');</script>";
					}
				 }

				 if (isset($_POST['logout'])) {
				 	session_destroy();
				 	header("location:login-home.php");
				 }
			 ?>
			</table>
			</div>
			</div>
		</div>
	</div>
	</body>
	<!-- bootstrap -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>