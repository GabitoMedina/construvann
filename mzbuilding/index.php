<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Basic -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio - Sucrecoin</title>
	<?php include("includes/head.php"); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106748363-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());
		gtag('config', 'UA-106748363-1');
	</script>
	
</head>
<body>
	<div class="body">
		<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
		<?php include("includes/menu.php"); ?>
		</header>

		<div class="main" role="main">
			<div class="slider-container rev_slider_wrapper">
				<div class="slider rev_slider" data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}" data-plugin-revolution-slider="" id="revolutionSlider">
					<ul>
						<li data-transition="fade"><img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="img/home.png" />
							<div class="tp-caption top-label" data-start="500" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="155" data-y="100"><img alt="" src="img/slides/block.png" /></div>

							<div class="tp-caption blackboard-text" data-start="1000" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="285" data-y="180" style="font-size: 30px;">Tecnolog&iacute;a y<br />
								conectividad global</div>

								<div class="tp-caption blackboard-text" data-start="1200" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="295" data-y="280" style="font-size: 40px;">Blockchain!</div>

								<div class="tp-caption main-label" data-mask_in="x:0px;y:0px;" data-start="1800" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-whitespace="nowrap" data-x="685" data-y="190">SUCRECOIN</div>

								<div class="tp-caption bottom-label" data-elementdelay="0.05" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-responsive_offset="on" data-splitin="chars" data-splitout="none" data-start="2000" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;" data-transform_out="opacity:0;s:500;" data-x="685" data-y="250">CON TECNOLOG&Iacute;A BITCOIN</div>
							</li>
							<li data-transition="fade"><img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="img/home2.jpg" />
								<div class="tp-caption top-label" data-start="500" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="155" data-y="100"><img alt="" src="img/slides/block.png" /></div>

								<div class="tp-caption blackboard-text" data-start="1000" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="285" data-y="180" style="font-size: 30px;">Tecnolog&iacute;a y<br />
									conectividad global</div>

									<div class="tp-caption blackboard-text" data-start="1200" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-x="295" data-y="280" style="font-size: 40px;">Blockchain!</div>

									<div class="tp-caption main-label" data-mask_in="x:0px;y:0px;" data-start="1800" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-whitespace="nowrap" data-x="685" data-y="190">SUCRECOIN</div>

									<div class="tp-caption bottom-label" data-elementdelay="0.05" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-responsive_offset="on" data-splitin="chars" data-splitout="none" data-start="2000" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;" data-transform_out="opacity:0;s:500;" data-x="685" data-y="250">CON TECNOLOG&Iacute;A BITCOIN</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="home-intro" id="home-intro">
						<div class="container">
							<div class="row">
						<div class="col-md-8">
					<p>
						Convierte tus dólares a monedas XSR
						<span>Ingresa el valor en USD o XSR y se convertirá automáticamente </span>
					</p>
				</div>
				<div class="col-md-4">
					<div class="get-started">
						<?php $content = file_get_contents("http://sucrecoin.org/public/valor-xsr"); ?>
						<input type="hidden" id="val" value="<?php echo $content; ?>">
						<div>
							<div style="width: 42%; display: inline-block;">
								<input type="number" step="any" id="a" min="0" placeholder="USD" style="border: none; border-bottom: 1px solid red; padding: 10px;">
							</div>
							<div style="width: 10%; display: inline-block;">
								<div style="width: 100%; display: inline-block;">
									<i class="fa fa-arrow-right"></i>
								</div>
								<div style="width: 100%; display: inline-block;">
									<i class="fa fa-arrow-left"></i>
								</div>
							</div>
							<div style="width: 42%; display: inline-block;">
								<input type="number" step="any" id="b" min="0" placeholder="XSR" style="border: none; border-bottom: 1px solid red; padding: 10px;">
							</div>
						</div>
					</div>
				</div>
			</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row center">
					<div class="col-md-12">
						<h1 class="mb-sm word-rotator-title">Sucrecoin, la cryptomoneda m&aacute;s <strong class="inverted"> <span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}"> <span class="word-rotate-items"> <span>f&aacute;cil</span> <span>r&aacute;pida</span> <span>accesible</span> </span> </span> </strong> </h1>

						<p class="lead">Env&iacute;a, transfiere, y compra al instante en la criptomoneda que m&aacute;s te convenga.</p>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<hr class="tall" /></div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>&Uacute;ltimos <strong>Precios</strong></h2>

							<div class="row">
								<div class="col-sm-1"></div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Bitcoin" src="img/btn_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">BTC</h4>

											<p class="tall" id="price_btc">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Bitcoin Cash" src="img/ripple_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">BCH</h4>

											<p class="tall" id="price_bch">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Ethereum" src="img/eth_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Ethereum</h4>

											<p class="tall" id="price_eth">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Ripple" src="img/ripple_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Ripple</h4>

											<p class="tall" id="price_ripple">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price litecoin" src="img/litecoin_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Litecoin</h4>

											<p class="tall" id="price_litecoin">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-1"></div>
							</div>

							<div class="row">
								<div class="col-sm-1"></div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Dash" src="img/dash_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Dash</h4>

											<p class="tall" id="price_dash">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Neo" src="img/neo_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Neo</h4>

											<p class="tall" id="price_neo">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Iota" src="img/iota_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Iota</h4>

											<p class="tall" id="price_iota">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Monero" src="img/monero_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Monero</h4>

											<p class="tall" id="price_monero">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-2">
									<div class="feature-box">
										<div class="feature-box-icon"><img alt="price Nem" src="img/nem_ico.png" /></div>

										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Nem</h4>

											<p class="tall" id="price_nem">0.00</p>
										</div>
									</div>
								</div>

								<div class="col-sm-1"></div>
							</div>
						</div>
					</div>

					<hr class="tall" />
					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-sm word-rotator-title">No esperes m&aacute;s y se parte de <strong> <span class="word-rotate" data-plugin-options="{'delay': 3500, 'animDelay': 400}"> <span class="word-rotate-items"> <span>Sucrecoin</span> <span> una Cryptomoneda</span> <span>la Innovacion</span> </span> </span> </strong></h2>
							<div class="container">
							<div class="row">
							<hr class="tall" /></div>
							</div>
							<h1>Por que SucreCoin</h1>

							<h4 class="heading-primary lead tall">Damos Loor a los Heroes de Latinoamerica <a href="https://es.wikipedia.org/wiki/Antonio_Jos%C3%A9_de_Sucre"><strong>'General Antonio Jose de Sucre'</strong></a>,<br />
								A la extinta&nbsp;Moneda Ecuatoriana <a href="https://es.wikipedia.org/wiki/Sucre_ecuatoriano"><strong>'El Sucre'</strong></a>.&nbsp;</h4>
							</div>
						</div>
						<hr class="tall" />

						<!-- 15/05/18:aumento de logos -->

						<div class="row center">
							
							<div>
								<?php include('includes/logos.php'); ?>
								
							</div>
							
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
<script>

	$(document).ready(function () {
	   var xsr = $("#val").val();
       $('#a').keyup(function () {
       		var a = $('#a').val();
       		$('#b').val(a/xsr);
       });
       $('#b').keyup(function () {
       		var b = $('#b').val();
       		$('#a').val(b*xsr);
        });
   });

	function priceEth(){
		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				eth = datos["USD"];
				$("#price_eth").html("$ "+parseFloat(eth));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});
		return false;
	}

	function priceBtc(){
		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				BTC = datos["USD"];
				$("#price_btc").html("$ "+parseFloat(BTC));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});
		return false;
	}

	function priceXRP(){
		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_ripple").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});
		return false;
	}


	function priceResto(){

		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_bch").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});


		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_litecoin").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});

		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=DSH&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_dash").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});

		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=NEO&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_neo").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});


		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=IOT&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_iota").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});


		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_monero").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});


		$.ajax({
			async:true,
			dataType: "json",
			type: "GET",
			url: "https://min-api.cryptocompare.com/data/price?fsym=XEM&tsyms=USD" ,
			global: true,
			ifModified: false,
			processData:true,
			contentType: "application/x-www-form-urlencoded",
			success: function(datos){
				xrp = datos["USD"];
				$("#price_nem").html("$ "+parseFloat(xrp));
			} ,
			error: function(jqXHR, exception){
				console.log(datos);
			}
		});





	}


	priceEth();
	priceBtc();
	priceXRP();
	priceResto();







</script>
<script src="build/js/custom.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-106748363-1', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>

</html>

