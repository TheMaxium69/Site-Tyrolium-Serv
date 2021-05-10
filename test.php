<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
				<title>Tyrolium Server Site</title>
					<link href="http://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Sword.png" rel="shortcut icon">			
					<link rel="stylesheet" type="text/css" media="screen" href="http://tyrolium.fr/ServerMC/test.css">
					<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		</head>
	<body>
		<!-- Haut De Page -->
    			<header>				
    				<div class="head">
						<nav class="menu-nav">
							<div> 
								<li class="img">
									<img src="http://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC.png">
								</li>
								<li class="btn">
									<a class="acc" href="http://tyrolium.fr/ServerMC">
										Accueil
									</a>
								</li>
								<li class="btn">
									<a class="jou" href="http://tyrolium.fr/ServerMC/Jouer">
										Jouer
									</a>				
								</li>
								<li class="btn">
									<a class="cre" href="http://tyrolium.fr/ServerMC/Launcher">
										Launcher
									</a>
								</li>
								<li class="btn">
									<a class="cre" href="http://tyrolium.fr/ServerMC/Credits">
										Credits
									</a>
								</li>
								<li class="bou">
									<a class="bou" href="http://tyrolium.tebex.io/category/tyroliumserverboutique">
										Boutique
									</a>
								</li>
							</div>
						</nav>
						<nav class="menu-nav2">
							<div>
								<li class="pro">
									<a class="pro" href="http://tyrolium.fr/ServerMC/Profil">
										Profil
									</a>
								</li>
								<li class="tyro">
									<a class="tyro" href="http://tyrolium.fr/">
										Entreprise
									</a>
								</li>
							</div>
						</nav>							
					</div>
					<div class="color"></div>
  				 </header>
		<!-- Contenu -->
			<!-- Debut -->
				<div class="d1">
					<div class="all">
							<p class="j">
							<a class="j" href="http://tyrolium.fr/ServerMC/Jouer"> JOUER
							</a>
							</p>
							<p class="t">
								Gratuit<br>
								Creation de compte + Launcher
							</p>

					</div>	
				</div>
			<!--Gauche-->
				<div class="d2">
					<div class="a">
						<div class="a1">
							<div class="titre">
								<p class="date">15:30 30/04/2020</p>
								<p class="pseudo">Maxime TOURNIER | Fondateur</p>
							</div>
							<div class="contenu">
								<p class="Contenu">
									Date de sortie le 26 Avril 2020 à 15heures.<br>
									<br>
									<img src="http://tyrolium.fr/Contenu/Image/Annonce2.png" width="560">
								</p>
							</div>
						</div>
						<div class="a1">  
							<div class="titre">
								<p class="date">15:00 30/04/2020</p>
								<p class="pseudo">Maxime TOURNIER | Fondateur</p>
							</div>
							<div class="contenu">
								<p class="Contenu">
									Trailer Disponible.<br>
									<br>
									<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/rNq089toP6g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</p>
							</div>
						</div>
						<div class="a1">  
							<div class="titre">
								<p class="date">21:00 21/03/2020</p>
								<p class="pseudo">Maxime TOURNIER | Fondateur</p>
							</div>
							<div class="contenu">
								<p class="Contenu">
									30/03 <br>
									<br>
									<img src="http://tyrolium.fr/Contenu/Image/Annonce1.png" width="510">
								</p>
							</div>
						</div>
					</div>
				<!-- Droite -->
					<div class="b">
						<div class="b1">
							<div class="titre">
								<p class="titre">Statistiques</p>
							</div>
							<div class="contenu">
								<div class="img">									
									<img src="http://tyrolium.fr/Contenu/Image/Cube.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Joueurs Connectés :</p>
									</div>
									<div class="contenux">
										<p>
													<?php 
													$playeronline = file_get_contents('https://minecraft-api.com/api/ping/playeronline.php?ip=mc.tyrolium.fr&port=25565');
													echo $playeronline;
													?><br>
									</div>
								</div>
							</div>
						</div>
						<div class="b1">
							<div class="contenu">
								<div class="img">									
									<img src="http://tyrolium.fr/Contenu/Image/Profil.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Comptes Tyrolium créés :</p>
									</div>
									<div class="contenux">
										<p>
											<?php
												include 'db.php';
												global $db;
													$q = $db->query("SELECT COUNT(*) AS nbt FROM users");
													$result = $q->fetch();												
													$q->closeCursor();
												echo $result['nbt'];
											?>
										</p>
									</div>
								</div>
							</div>								
						</div>
						<!-- <div class="b1">
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/Discord.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Nombre De Profils Discord :</p>
									</div>
									<div class="contenux">
										<p>
											<?php
												echo "NN";
											?>
										</p>
									</div>
								</div>
							</div>								
						</div> -->
						<div class="b1">
							<div class="titre">
								<p class="titre">Resaux</p>
							</div>
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/Youtube.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Youtube :</p>
									</div>
									<div class="contenux">
										<p class="btn">
										<a class="sa" href="https://www.youtube.com/channel/UCZTbdKAcFw2xrLFjO9WpYYw">
										S'abonner
										</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="b1">
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/Instagram.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Instagram :</p>
									</div>
									<div class="contenux">
										<p class="btn">
											<a class="sa" href="http://instagram.minecraft.tyrolium.fr/">
												S'abonner
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="b1">
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/Discord.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Discord :</p>
									</div>
									<div class="contenux">
										<p class="btn">
										<a class="sa" href="http://discord.gg/WPu4KMf">
										Rejoindre
										</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="b1"> 
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/TeamSpeak.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>TeamSpeak :</p>
									</div>
									<div class="contenux">
										<p class="btn">
										<a class="sa" href="http://ts.tyrolium.fr/">
										Rejoindre
										</a>
										</p>
									</div>
								</div>
							</div>
						</div> -->
						<div class="b1">
							<div class="contenu">
								<div class="img">			
									<img src="http://tyrolium.fr/Contenu/Image/Twitter.png" width="65">
								</div>
								<div class="text">
									<div class="title">
										<p>Twitter :</p>
									</div>
									<div class="contenux">
										<p class="btn">
										<a class="sa" href="https://twitter.com/tyrolium">
										Suivre
										</a>
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
		<!-- Pied De Page -->
				<footer>
					<p>
						Copyright &copy; Tyrolium. Ent. Corp. Org. Server. ServerMC. - 2017 / 2020<br> All Rights Reserved &copy;<u>Tyrolium Entertainment</u>
					</p>
				</footer>	
	</body>
</html>