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
    <link rel="stylesheet" href="css/contato.css"/>


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
			<li><a href="index.php">Home</a></li>
			<li><a href="characters.html">Sobre Nós</a></li>
			<li><a href="contato.php">Contato</a></li>
			<li><a href="Download.php">Download</a></li>			
			<li><a href="Doador.php">Seja um Doador</a></li>
		</ul>
		<div class="header-add">
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
                     <p> Olá, <?php echo $_SESSION['usuario']; ?></p> <button><a href="logout.php"> <i class="fas fa-user"></i> Sair </a></button>
                    </div>                                          
                     
                    <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                    ?>                                               
		</div>
	</header>
    <!-- Header section end -->

    <section id="section-contato">
        <div class="container">
            <div class="row">  
                <div class="col-lg-4 mb-5"><h3 align="left">Contato</h3></div>
                <div class="col-lg">             
                    <form action="cadastro.php" method="POST">    			 
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="nome">Informe seu nome</label>
                                <input type="text" name="nome" id="nome" class="col" maxlength="45" required>
                            </div>

                            <div class="col-lg-6 mb-3">                      
                                <label for="sobrenome">Informe seu sobrenome</label> 
                                <input type="text" name="sobrenome" id="sobrenome"class="col" maxlength="45" required>
                            </div>                       
                        </div> 
                        
                        <div class="row mb-3">
                            <div class="col-lg mb-3">
                                <label for="email">Informe seu email</label>
                                <input type="email" name="email" id="email" class="col" required maxlength="60">
                            </div>                                    
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-lg-10 mb-3">
                                <label for="msg">Escreva sua mensagem</label>
                                <textarea name="msg" id="msg" cols="55" rows="5"></textarea>
                            </div>
                        </div>                 
                        <button type="submit" class="btn-form">Enviar</button>
                    </form>
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
					<a href="#"><i class="fab fa-youtube"></i><span>youtube</span></a>
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