<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!-- Basic --><meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio - Sucrecoin</title>
	<meta name="keywords" content="HTML5 Template" /><meta name="description" content="Porto - Responsive HTML5 Template"><meta name="author" content="okler.net"><!-- Favicon -->
	<?php include("includes/head.php"); ?>
</head>
<body>
	<div class="body">
		<header data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}" id="header">
			<?php include("includes/menu.php"); ?>
		</header>

		<div class="main" role="main">
			<section class="page-header">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="#">Inicio</a></li>
								<li class="active">Contactanos</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h1>Contactanos</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="alert alert-success hidden mt-lg" id="contactSuccess"><strong>Success!</strong> Your message has been sent to us.</div>

						<div class="alert alert-danger hidden mt-lg" id="contactError"><strong>Error!</strong> There was an error sending your message.</div>

						<h2 class="mb-sm mt-sm"><strong>Contactanos</strong></h2>

						<form action="php/contact-form.php" id="contactForm" method="POST">
							<div class="row">
								<div class="form-group">
									<div class="col-md-6"><label>Tu nombre: *</label> <input class="form-control" data-msg-required="Please enter your name." id="name" maxlength="100" name="name" required="" type="text" value="" /></div>

									<div class="col-md-6"><label>Email: *</label> <input class="form-control" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." id="email" maxlength="100" name="email" required="" type="email" value="" /></div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12"><label>Asunto</label> <input class="form-control" data-msg-required="Please enter the subject." id="subject" maxlength="100" name="subject" required="" type="text" value="" /></div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12"><label>Mensaje: *</label><textarea class="form-control" data-msg-required="Please enter your message." id="message" maxlength="5000" name="message" required="" rows="10"></textarea></div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12"><input class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading..." type="submit" value="Send Message" /></div>
							</div>
						</form>
					</div>

					<div class="col-md-6">
						<h4 class="heading-primary mt-lg"></h4>

						<h4 class="heading-primary">¿Por qué <strong>Sucrecoin</strong>?</h4><p>
El Sucre es la moneda antigua de los Ecuatorianos hasta el año 2000, dicho año las acciones de un gobierno no conservador devaluó el costo de la moneda, Al entablar un reemplazo de Moneda los billetes quedaron para la Historia del Pais.
</p><p>En Febrero del 2017, dimos el paso para crear una cryptomoneda y Brindar Honor a los próceres de las distintas independencias en Latinoamerica. </p>

						<h4 class="heading-primary">Síguenos <strong>en</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li>
									<i class="fa fa-facebook"></i><strong>Facebook:</strong>
									<a href="https://www.facebook.com/sucrecoin/" target="_blank">Sucrecoin en Facebook<i class="fa fa-external-link"></i>
									</a>
								</li>
								<li><i class="fa fa-twitter"></i> <strong>Twitter:</strong> <a href="https://twitter.com/sucrecoin_xsr" target="_blank">@SucreCoin_XSR en Twitter <i class="fa fa-external-link"></i></a></li>
								<li><i class="fa fa-youtube"></i> <strong>Youtube:</strong> <a href="https://www.youtube.com/channel/UC3z_b8e_wCC2R2VCKvXF1eQ" target="_blank">Sucrecoin en Youtube <i class="fa fa-external-link"></i></a></li>
								<li><i class="fa fa-instagram"></i> <strong>Instagram:</strong> <a href="https://www.instagram.com/sucrecoin/" target="_blank">@sucrecoin en Instagram <i class="fa fa-external-link"></i></a></li>
								
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:hola@sucrecoin.org">hola@sucrecoin.org</a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action-content">
								<h3>Sucrecoin <strong>la moneda virtual</strong> que debes utilizar</h3>

								<p></p>
							</div>

							<div class="call-to-action-btn"><a class="btn btn-lg btn-primary" href="http://sucrecoin.org/public" target="_blank">Registrate</a></div>
						</div>
					</div>
				</div>			

			</section>
			<div class="row">
				<hr class="tall" />
			</div>
				<!-- /***** 20/03/2018: AUMENTO DE LOGOS*****/ -->
			<div>
				<?php include('includes/logos.php'); ?>
			</div>				
						


			<footer id="footer">
				<?php include("includes/footer.php"); ?>
			</footer>
		</div>
		<?php include("includes/scripts.php"); ?></body>
		</html>