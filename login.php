<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/naruto2.png" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/login.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="logo">
		</a>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>			
			<li><a href="reviews.html">Download</a></li>
			<li><a href="single-post.html">Seja um Doador</a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<section id="section-login">
		<div class="container">
			<div class="row">
				<div class="col-lg offset-xl-1 offset-lg-1 offset-md-2 offset-sm-1 offset-1 mb-3">
					<div class="quadro-login">
						<h3 align="center">Login</h3>
						<form action="" class="form-login" method="POST">
							<input type="text" placeholder="Nome de usuario" name="usuario" class="input mb-4">
							<input type="password" placeholder="Digite sua senha" name="senha" class="input mb-3">
							<label id="checkword">
								<input type="checkbox">
								Lembrar senha
							</label>

							<div style="width: 100%; display: flex; justify-content:center">
								<button class="btn-form">Entrar</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-lg offset-xl-0 offset-lg-0 offset-md-2 offset-sm-1 offset-1">
					<div class="quadro-login" style="padding-top: 24%">
						<h3 align="center">Não é membro? <br> Cadastre-se agora mesmo</h3>

						<div style="width: 100%; display: flex; justify-content:center">
							<button class="btn-form" style="width: auto"> <a href="cadastrar.php">Fazer cadastro</a></button>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</section>

<!-- Footer section -->
<div class="footer-section">
		<div class="container">
			<p class="text-rodape">
			  World of Naruto é uma brincadeira entre fãs de Naruto e Ragnarok, não é um produto comercial, 
			  não tem fins comerciais nem lucrativos e está restrito a ser um passa-tempo lúdico. <br> 
			  Copyright BORUTO: NARUTO NEXT GENERATIONS © 2002 MASASHI KISHIMOTO/ 2017 BORUTO All Right Reserved <br>
			  Template created by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</p>		
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links" style="display: flex; justify-content: center;">
					<a href="#"><i class="fab fa-instagram"></i><span>instagram</span></a>
					<a href="#"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
					<a href="#"><i class="fab fa-facebook"></i><span>facebook</span></a>
					<!--a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a-->
					<a href="#"><i class="fab fa-youtube"></i><span>youtube</span></a>
					<!--a href="#"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a-->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->
															
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>