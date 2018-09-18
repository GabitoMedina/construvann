<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>Source Code - Sucrecoin</title>	
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Sucrecoin Primera Cryptomoneda Latinoamericana">
		<meta name="author" content="vps593.com">
		<?php include("includes/head.php"); ?>
	</head>
	<body>
	<div class="body">
	<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
		<?php include("includes/menu.php"); ?>
	</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Inicio</a></li>
									<li><a href="#">Download</a></li>
									<li class="active">Source</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Source code</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

							
<div class="col-md-12">
					<hr>

					<h4>Source</h4>
					
<p>
	<b>Compilacion. </b><br>
<code>
git clone https://github.com/charliegama/sucrecoin <br>
cd sucrecoin 							<br>
make -f makefile.unix RELEASE=1<br>
</code>
<br>
<b>Instalar dependencias Bitcoin. </b>
Source Code <br>
<br>
Compilacion. <br>
<code>
git clone https://github.com/charliegama/sucrecoin<br>
cd sucrecoin <br>
make -f makefile.unix RELEASE=1<br>
</code>


***************** instal Dependencias.  <br>
<code>
sudo apt-get install build-essential libssl-dev libdb-dev libdb++-dev libboost-all-dev git libssl1.0.0-dbg
</code><code>
sudo apt-get install libdb-dev libdb++-dev libboost-all-dev libminiupnpc-dev libminiupnpc-dev libevent-dev libcrypto++-dev libgmp3-dev
</code>
<br><br><br>
*****************************<br>
Versions used in this release:<br>
***********************************
<br><br>
GCC 4.3.3 <br>
OpenSSL 1.0.1c <br> 
Berkeley DB 4.8.30.NC <br>
Boost 1.37  <br>
miniupnpc 1.6 <br>
</p>

					</div>

				</div>

			</div>

	<footer id="footer">
		<?php include("includes/footer.php"); ?>
	</footer>
		</div>
		<?php include("includes/scripts.php"); ?>
		
	</body>
</html>
