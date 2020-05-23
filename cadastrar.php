<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça agora o seu cadastro</title>

    <meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	
	<!-- Favicon -->
	<link href="img/naruto2.png" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/cadastrar.css">
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
			<li><a href="index.php">Home</a></li>
			<li><a href="characters.html">Sobre Nós</a></li>
			<li><a href="game.html">Sobre o Jogo</a></li>
			<li><a href="reviews.html">Download</a></li>
			<!--li><a href="news.html">Forúm</a></li-->
			<li><a href="single-post.html">Seja um Doador</a></li>
			<!--li><a href="single-post.html">Login/Cadastro</a></li-->
		</ul>		
	</header>
    <!-- Header section end -->
    
    <!--Seção cadastro-->
    <section id="section-cadastro">
        <div class="container">
            <div class="row">  
                <div class="col-lg-4 mb-5"><h3 align="left">Faça o seu cadastro</h3></div>
                <div class="col-lg">             
                    <form action="cadastro.php" method="POST">

				<?php
              if(isset($_SESSION['status_cadastro'])):
             ?>
             <div class="notification2" style="background-color: green;">
                 <span>Cadastro efetuado!</span><br>
                 <span>Faça o login clicando <a href="login.php">aqui</a></span> 
             </div>

             <?php
              endif;
              unset($_SESSION['status_cadastro']);        
             ?>

             <?php 
              if(isset($_SESSION['usuario_existe'])):
             ?>                     
             <div class="notification2" style="background-color: red">
               <p>Usuário já existe. Cheque novamente os dados!</p>
             </div>

             <?php
              endif;           
              unset($_SESSION['usuario_existe']);
			 ?>
			 
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="nome">Informe seu nome</label>
                                <input type="text" name="nome" id="nome" class="col">
                            </div>

                            <div class="col-lg-6 mb-3">                      
                                <label for="sobrenome">Informe seu sobrenome</label> 
                                <input type="text" name="sobrenome" id="sobrenome"class="col">
                            </div>                       
                        </div> 
                        
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="email">Informe seu email</label>
                                <input type="email" name="email" id="email" class="col">
                            </div>

                            <div class="col-lg-6 mb-3">                      
                                <label for="username">Escolha aqui seu nome de usuário</label> 
                                <input type="text" name="username" id="username"class="col">
                            </div>                       
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="senha">Digite sua senha</label>
                                <input type="password" name="senha" id="senha" class="col">
                            </div>

                            <div class="col-lg-6 mb-3">                      
                                <label for="senha">Repita a senha informada</label> 
                                <input type="password" class="col" name="senha2">
                            </div>                       
                        </div>
                        
                        <button type="submit" class="btn-form">Concluido</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- Footer section -->
<div class="footer-section">
		<div class="container">
		  <div class="container">
			<p class="text-rodape">
			  World of Naruto é uma brincadeira entre fãs de Naruto e Ragnarok, não é um produto comercial, 
			  não tem fins comerciais nem lucrativos e está restrito a ser um passa-tempo lúdico. <br> 
			  Copyright BORUTO: NARUTO NEXT GENERATIONS © 2002 MASASHI KISHIMOTO/ 2017 BORUTO All Right Reserved <br>
			  Template created by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</p>		
		  </div>
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