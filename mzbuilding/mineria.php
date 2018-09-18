<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Minería - Sucrecoin</title>
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
									<li class="active">Minería</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Minería</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

						<div class="col-md-12">


							<h4>Recursos de sitio web </h4>

					Mineria -->  incluido preconfig
					<br><a href="http://sucrecoin.org/download/mineria/miner2017.rar">http://sucrecoin.org/download/mineria/miner2017.rar</a>
					<br><a href="http://sucrecoin.org/download/mineria/minerd.rar">http://sucrecoin.org/download/mineria/minerd.rar</a>

						</div>

<div class="col-md-12">
					<hr>

					<h4>Minería Sucrecoin</h4>
					<p>
						CPU mining requiere software de CPU mining.  Ésta guía se enfocará en el mejor software mining que existe.
Si tu pagas por la electricidad, éste podría no ser una manera beneficiosa de minar.
					</p>
					<p>
	<h4>cpuminer Setup (Windows)</h4>
1. Descargar la ultima versión desde: <a href="https://bitcointalk.org/index.php?topic=55038.0">bitcointalk</a><br>
2. Extraer la carpeta zip<br>
3. crear aceso directo a minerd.exe, editar las propiedades y configurar los parámetros listados abajo.<br>
<br><br>
minerd Command Line Options:<br>
Las lineas de comando estandar son estas.  Éstas conectarán minerd a una pool y empezará el minado:
<br>
<code>minerd -a scrypt -o [poolurl]:[port] -u [username].[workername] -p [password]</code>
<br><br>
Ejemplo de Pool Mining:
<br>
<code>minerd -a scrypt -o stratum+tcp://pool.sucrecoin.org:3256 -u <your wallet key> -t 5</code>
<br><br>
Ejemplo de Solo Mining (Mientras el cliente SucreCoin está en marcha):
<br>
<code>minerd -a scrypt -o 127.0.0.1:8122 -u <sucrecoin.conf user_name> -p <sucrecoin.conf password></code>
<br>
Parámetros opcionales útiles:
<code>
-t   ~   Número de threads a usar.</code>
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
