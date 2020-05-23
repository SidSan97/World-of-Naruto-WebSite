<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>World of Naruto</title>
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
			<li><a href="characters.html">Sobre Nós</a></li>
			<li><a href="game.html">Sobre o Jogo</a></li>
			<li><a href="Download.php">Download</a></li>			
			<li><a href="Doador.php">Seja um Doador</a></li>
		</ul>
		<div class="header-add">
			<!--p>Login/Cadastro</p>
			<button><a href="login.php"><i class="fas fa-user"></i> Entrar </a></button-->
					<?php
                    	if(isset($_SESSION['nao_autenticado'])):               
					?>
					
                   <div id="label">
                    <p>Login/Cadastro</p> <button><a href="login.php"> <i class="fas fa-user"></i> Entrar </a></button>
                   </div>

                    <?php
                      else:                      
                    ?>
                    <div id="label">
                     <p> Olá, <?php echo $_SESSION['username']; ?></p> <button><a href="logout.php"> <i class="fas fa-user"></i> Sair </a></button>
                    </div>                                          
                     
                    <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                    ?>                                               
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg" data-setbg="img/slider/1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Escolha seu personagem</h2>
							<p>Escolha entre os vários personagens disponiveis, cada um com caracteristicas únicas.</p>
							<a href="#" class="site-btn">Ver Sobre</a>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="img/slider/2.png">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Escolha sua arena de combate</h2>
							<p>Desfrute das diversas arenas disponiveis no jogo e parta para o combate!</p>
							<a href="#" class="site-btn">Ver sobre</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 blog-posts">
					<div class="blog-post featured-post">
						<img src="img/blog/1.png" alt="">
						<div class="post-date">19 Maio 2020</div>
						<h3>World of Naruto</h3>
						<div class="post-metas">
							<div class="post-meta">By SidSan</div>
							<!--div class="post-meta">in <a href="#">Games</a></div>
							<div class="post-meta">3 Comments</div-->
						</div>
						<p>Word of Naruto é um jogo multiplayer feito por fãs do anime que também amam RPG e jogos MOBA. Unindo o útil ao agradavél criamos o <strong>World of Naruto.</strong> Fãs do anime e amantes do MOBA podem se divertir com seu anime favorito na categoria gamer que mais gosta.</p>
						<a href="#" class="site-btn">Ver Sobre</a>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="blog-post">
								<img src="img/blog/2.png" alt="">
								<div class="post-date">19 Maio 2020</div>
								<h4>Lançada nova skill</h4>
								<div class="post-metas">
									<div class="post-meta">By SidSan</div>
									<!--div class="post-meta">in <a href="#">Games</a></div>
									<div class="post-meta">3 Comments</div-->
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
								<a href="#" class="read-more">Read More</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-post">
								<img src="img/blog/3.png" alt="">
								<div class="post-date">19 Maio 2020</div>
								<h4>Lançada nova arena</h4>
								<div class="post-metas">
									<div class="post-meta">By SidSan</div>									
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
								<a href="#" class="read-more">Read More</a>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
						<form class="sb-search">
							<div style="display: flex;">
								<input type="text" placeholder="Search" style="width: 90%;">
								<button class="btn-search"><i class="fas fa-search"></i></button>
							</div>
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Marcadores</h2>
						<ul class="sb-cata-list">
							<li>Multiplayer</li>
							<li>RPG</li>
							<li>Gratuito para Jogar</li>
							<li>Estrategico</li>
							<li>Competitivo</li>
							<li>Baseado em Equipes</li>
						</ul>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Ranking do Mês</h2>						
						<div id="ranking-div">
							<ul class="ranking-list">
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>
								<li><span class="col">1º Player1</span> <span class="col offset-4">2020 pontos</span></li>							
							</ul>
					    </div>
						<!--a href="#">Ver mais >></a-->
					</div>
					<div class="sb-widget">
						<a href="#" class="add">
							<img src="img/add-2.jpg" alt="">
						</a>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Blog list section -->
	<section class="galery-list-section spad">
		<div class="container">
			<h2 class="sb-title mb-5">Galeria</h2>
			
			<div class="row mb-3">
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
				<div class="col-lg mb-2">
					<img src="img/galery/2.png" height="300px">
				</div>
			</div>
		</div>
	</section>
	<!-- Blog list section end -->

	<!-- Video section -->
	<div class="video-section">
		<div class="container">
			<div class="video-logo">
				<img src="img/logo-2.png" alt="">
				<p>World of Naruto Gameplay</p>
			</div>
			<div class="video-popup-warp">
				<img src="img/video-bg.jpg" alt="">
				<a href="https://www.youtube.com/watch?v=xzCEdSKMkdU" class="video-play"><i class="fa fa-play"></i></a>
			</div>
		</div>
	</div>
	<!-- Video section end -->

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
