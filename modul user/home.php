<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Masukkan Judul Dokumen</title>
	<link rel="stylesheet" type="text/css" href="res/css/style.css" media="all"/>
</head>
<body>
	
	<div id="container">
		
		<!-- Header Section -->
		<div id="header" class="frame">
			<div class="kolom-7">
				<img src="res/img/logo.png" alt="" id="logo"/>
			</div>
			<div class="kolom-4">
				<div id="user-panel">

					<div id="user" class="frame">
						<img id="user-pict" class="kolom-5" src="res/img/userpict_h.png" alt=""/>
						<div id="user-text" class="kolom-7">
						 <?php session_start(); ?>
						 <?php if(isset($_COOKIE['username'])){ $hoho = $_SESSION['username'];?>
							<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member"><?php echo "$hoho" ?></a></span>!</h3>
							<p id="user-control">
								<span class="edit-logout">	<a href='logout.php' id='logout2'>Logout</a></span>
							</p>
							<?php }else {
								UNSET($_SESSION['username']);  
								UNSET($_SESSION['password']); 
								session_destroy();  
							?>
							<div id = "logreg">
							<p id="user-control">
								
									<span class="edit-logout">	<a id="login2" href="javascript:login('show')">Login</a></span>
									&nbsp;or&nbsp;
									<span class="edit-logout">	<a id="register2" href="registrasi.php">Register</a></span>
								
							</p>
							<br/></div>
							<?php } ?>
							<a href="#" class="btn">Check Your Cart</a>
						</div>
					</div>
										
					<div id="search-bar" class="frame">
						<form name="search-form" action="search.php" onsubmit="return validateForm('search-form', 'src', 'Ketikkan barang yang dicari...')">
							<input id="search-box" class="kolom-9" type="text" name="src" value="Ketikkan barang yang dicari..." onfocus="checkclear(this)" onblur="checkempty(this, 'Ketikkan barang yang dicari...')">
							<input id="search-button" class="kolom-1" type="submit" value="">
						</form>					
					</div>
				</div>
			</div>			
		</div>
		<div id="popupbox"> 
			<form name="login" id="login" action="cek_login.php" method="post">
				<center><a href="javascript:login('hide')" id ="close">[X] close</a></center> 
				<center>Username:</center>
				<center><input name="username" size="14" /></center>
				<center>Password:</center>
				<center><input name="password" type="password" size="14" /></center>
				<center><input type="button" name="button" id= "sbmtlogin"  onclick="forLogin()" value="login" /></center>
			</form>

</div> 
		<!-- End of Header -->
		
		<!-- Navbar Section -->
		<div id="navbar" class="frame">
			<ul>
				<li><a href="#">Beras</a></li>
				<li><a href="#">Daging</a></li>
				<li><a href="#">Sayuran</a></li>
				<li><a href="#">Frozen Food</a></li>
				<li><a href="#">Snack</a></li>
			</ul>
		</div>
		<!-- End of Navbar -->
		
		<br/>
		<a id="best-buy-btn" href="#best-buy" class="btn">See Best Buy!!</a>
		
		<!-- Slideshow Section -->
		<div id="slideshow" class="frame">
			<div class="item">
				<img class="img-konten" src="res/img/slideshow/gulali_world.png" alt=""/>
				<div class="caption">
					<p class="text">
						Check out our snack section! We have a lot of snack 
						from Gulali World!!
					</p>
				</div>
			</div>
			<a href="#" class="btn-left">&lsaquo;</a>
			<a href="#" class="btn-right">&rsaquo;</a>
		</div>
		<img src="res/img/baloon.png" alt=""/>
		<!-- End of Section -->
		
		<div id="best-buy" class="frame">
			<div id="bbuy-text" class="kolom-4">
				<p id="bbuy-a">Best Buy</p>
				<p id="bbuy-b">Products</p>
			</div>
			<div class="kolom-8">
				<div class="frame">
					<div class="kolom-4 product">
						<a href="">
							<img class="gambar" src="res/img/product/prdct-daging-sapi.jpg" alt=""/>
							<p class="nama-produk">Daging Sapi</p>
							<p class="asal-produk">from Daging</p>
						</a>
					</div>
					<div class="kolom-4 product">
						<a href="">
							<img class="gambar" src="res/img/product/prdct-bayam-itali.jpg" alt=""/>
							<p class="nama-produk">Bayam Itali</p>
							<p class="asal-produk">from Sayuran</p>	
						</a>						
					</div>
					<div class="kolom-4 product">
						<a href="#">
							<img class="gambar" src="res/img/product/prdct-beras-carrefour.jpg" alt=""/>
							<p class="nama-produk">Beras Carrefour</p>
							<p class="asal-produk">from Beras</p>
						</a>							
					</div>
					<div class="kolom-4 product">
						<a href="">
							<img class="gambar" src="res/img/product/prdct-nugget-fiesta.jpg" alt=""/>
							<p class="nama-produk">Chicken Nugget</p>
							<p class="asal-produk">from Frozen Food</p>		
						</a>						
					</div>
					<div class="kolom-4 product">
						<a href="">
							<img class="gambar" src="res/img/product/prdct-icecream-magnum.png" alt=""/>
							<p class="nama-produk">Ice Cream</p>
							<p class="asal-produk">from Snack</p>
						</a>						
					</div>					
				</div>
			</div>
		</div>
	</div>
	
	<!-- Javascript -->
	<script src="res/js/common.js" type="text/javascript"></script>
	<script src="popup.js"></script> 
	<script src="Ajaxlogin.js"></script> 
	<script>
	function forLogin(){
		if (AJAXPost()!=' 100 '){
			var username = AJAXPost();
			document.getElementById('sbmtlogin').value="Login\nLogin Sukses";
			var newhtml =		'<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member">'+username+'</a></span>!</h3><p id="user-control"><span class="edit-logout">	<a href="logout.php" id="logout2">Logout</a></span></p>';
			document.getElementById("logreg").innerHTML=newhtml;
	
		}else{
			document.getElementById('sbmtlogin').value="Login\nusername/password salah";
		}
	}
	</script>	
	
	
</body>
</html>