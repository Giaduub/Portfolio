<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';
      mail("gianni.dubief@gmail.com", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Portfolio Gianni DUBIEF</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>44 rue des arènes</h5>
								<h5>39100 DOLE</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>+33 695984186</h5>
								<h6>TOUS LES JOURS,8H - 19H</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>Gianni.dubief@gmail.com</h5>
								<h6>REPONSE SOUS 24H</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
			<a class="downlad-btn" href="CV/cv.pdf" target="blank">Télécharger le CV</a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="#" alt=""></div>
						<h2><b>Gianni DUBIEF</b></h2>
						<h4 class="font-yellow">Developpeur Web Junior</h4>
						<ul class="information margin-tb-30">
							<li><b>NAISSANCE : </b>Août 29, 1995</li>
							<li><b>EMAIL : </b>Gianni.dubief@gmail.com</li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://www.linkedin.com/in/gianni-dubief/" target="blank"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a " href="#"><i class="fas fa-envelope"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MON TRAVAIL</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>TOUT</b></a>
						<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
						<a href="#" data-filter=".branding"><b>CODE</b></a>
						<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
			
			<div class="p-item branding web-design graphic-design">
				<a href="http://giannid.promo-44.codeur.online/siteburger/" target="_blank" data-fluidbox>
				<img src="images/projetburg.jpg" alt="">	</a>
			</div><!-- p-item -->
			
			<div class="p-item branding graphic-design">
				<a href="images/Projet2.jpg" data-fluidbox>
					<img src="images/Projet2.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item web-design">
				<a href="images/portfolio-2-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-2-600x400.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item p-item-2 graphic-design">
				<a class="img" href="images/portfolio-8-300x400.jpg" data-fluidbox>
					<img src="images/portfolio-8-300x400.jpg" alt=""></a>
				<a class="img" href="images/portfolio-9-300x400.jpg" data-fluidbox>
					<img src="images/portfolio-9-300x400.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding graphic-design">
				<a href="images/portfolio-3-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-3-600x400.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item graphic-design web-design">
				<a href="images/portfolio-4-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-4-600x400.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item  graphic-design branding">
				<a href="images/portfolio-5-600x800.jpg" data-fluidbox>
					<img src="images/portfolio-5-600x800.jpg" alt=""></a>
			</div><!-- p-item -->
				
			<div class="p-item web-design branding">
				<a href="images/portfolio-6-600x800.jpg" data-fluidbox>
					<img src="images/portfolio-6-600x800.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item p-item-2 graphic-design">
				<a class="img" href="images/portfolio-10-300x400.jpg" data-fluidbox>
					<img src="images/portfolio-10-300x400.jpg" alt=""></a>
				<a class="img" href="images/portfolio-11-300x400.jpg" data-fluidbox>
					<img src="images/portfolio-11-300x400.jpg" alt=""></a>
			</div><!-- p-item -->
		
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>A propos de moi</b></h3>
						<h6 class="font-lite-black"><b>parcours professionnel</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque 
					sit amet sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
					Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. 
					Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur 
					adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla 
					effi citur at.Maecenas sed massa tristique.</p>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".80">
									<div></div>
									<h6 class="progress-title">HTML5 & CSS3</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".65">
									<div></div>
									<h6 class="progress-title">WEB DESIGN</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".67">
									<div></div>
									<h6 class="progress-title">JAVASCRIPT</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".60">
									<div></div>
									<h6 class="progress-title">PHP</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Experience professionnel</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				
					<div class="experience margin-b-50">
						<h4><b>JUNIOR PROJECT MANAGER</b></h4>
						<h5 class="font-yellow aj"><b>DESIGN STUDIO</b></h5>
						<h6 class="margin-t-10">MARCH 2015 - PRESENT</h6>
						<p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						<ul class="list margin-b-30">
							<li>Duis non volutpat arcu, eu mollis tellus.</li>
							<li>Quis consequat nulla effi citur at.</li>
							<li>Sed finibus aliquam neque sit.</li>
						</ul>
					</div><!-- experience -->
					
					<div class="experience margin-b-50">
						<h4><b>WEB MASTER/WEB DEVELOPER</b></h4>
						<h5 class="font-yellow aj"><b>DESIGN & WEB STUDIO</b></h5>
						<h6 class="margin-t-10">APRIL 2014 - FEBRUARY 2015</h6>
						<p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						<ul class="list margin-b-30">
							<li>Duis non volutpat arcu, eu mollis tellus.</li>
							<li>Quis consequat nulla effi citur at.</li>
							<li>Sed finibus aliquam neque sit.</li>
						</ul>
					</div><!-- experience -->
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>PARCOURS SCOLAIRE</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>BTS NOTARIAT </b></h4>
							<h5 class="font-yellow"><b>CNED POITIERS</b></h5>
							<h6 class="font-lite-black margin-t-10">Parcours pendant 2 ans</h6>
							<p class="margin-tb-30"> </p>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>Bac Professionnel - Electrotechnique</b></h4>
							<h5 class="font-yellow text-uppercase"><b>Lycée Jacques Duhamel</b></h5>
							<h6 class="font-lite-black margin-t-10">Diplômé en 2014</h6>
							<p class="margin-tb-30"> Diplômé d'un BAC professionnel en éléctrochnique, obtenu avec mention. </p>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4 class="text-uppercase"><b>BEP Electrotechnique</b></h4>
							<h5 class="font-yellow text-uppercase"><b>Lycée Jacques Duhamel</b></h5>
							<h6 class="font-lite-black margin-t-10">Diplômé en 2013</h6>
							<p class="margin-tb-30">Diplômé d'un BEP en éléctrochnique en 2013 après deux ans dans cette filière. BEP obtenu avec mention.  </p>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="0">0</span></b></h1>
						<h5 class="desc"><b>Coder Degrees</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="4">0</span></b></h1>
						<h5 class="desc"><b>Projet complété</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="0">0</span></b></h1>
						<h5 class="desc"><b>Clients satisfaits</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="4">0</span></b></h1>
						<h5 class="desc"><b>Projet terminé</b></h5>
					</div><!-- margin-b-30 -->
				</div><!-- col-md-3-->
				
			</div><!-- row-->
		</div><!-- container-->
    </section><!-- counter-section-->
	
	<footer>
		<p class="copyright">

		

<h2>Formulaire de contact !</h2>
      <form method="POST" action="">
         <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
         <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
         <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
         <input type="submit" value="Envoyer !" name="mailform"/>
      </form>
      <?php if(isset($msg)) {
         echo $msg;
      }
      ?>
		</p>


	</footer>
	
	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>