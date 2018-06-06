<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Bourloomichael.be"'."\n";
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
					<br />					
				</div>
			</body>
		</html>
		';

		mail("michael.bourloo@gmail.com", "CONTACT - Bourloomichael.be", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="./assets/style/index.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans, Parisienne" rel="stylesheet">		 
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:200" rel="stylesheet">  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>For Spada.be</title>
	</head>
	<body>
		<div class="contener">
			<div class="headleft">
				<p>
					<h1 id="hi">Hello</h1>
					<h4 class="onme">Moi c'est Michaël, j'ai 30ans et je suis junior developer chez <a href="https://becode.org/">#becode</a></h4>
				</p>
				<div class="quality">
					<p>
						<input disabled type="checkbox" checked="checked"  name="appliqué" id="qual1">
						<label for="qual1">Appliqué</label>
						<input disabled type="checkbox" checked="checked" name="conscencieux" id="qual2">
						<label for="qual2">Conscencieux</label>
						<input disabled type="checkbox" checked="checked" name="serieux" id="qual3">
						<label for="qual3">Sérieux</label>
						<input disabled type="checkbox" checked="checked" name="bienveillant" id="qual4">
						<label for="quel4">Bienveillant</label>					
					</p>
				</div>	
				<div class="informations">
					<div onclick="cache('disparition')" class="info-text">
						Je suis orienté Front-End (HTML5/CSS3), j'utilise Git comme logiciel de gestion et je commence a me pencher sérieusement a l'utilisation du CMS WordPress.
					</div>
					<div class="info-text1">
						J'ai acquis de bonnes bases dans ces 2 langages mais je m'intéresse aussi au JavaScript - Vue.js/React.js.
					</div>
					<div class="info-text2">
						Besoin : un peu de perfectionnement et une méthode de travail.
					</div>					
				</div>	
				<div class="informations">
					<div class="info-text">
						Je suis super motivé. 
					</div>
					<div class="info-text1">
						Je suis ouvert a l’apprentissage d’autres langages et j'ai le réel désir d'apprendre ! 
					</div>
					<div class="info-text2">
						A vos besoins : approfondir les langages que vous utilisez, pour me permettre de vous aider au mieux. 
					</div>					
				</div>
				<div class="informations">
					<div class="info-text">
						Je suis disponible après le 17 aout, fin de ma formation. 
					</div>
				</div>	
				<div id="experience">
					<pre>{"myProperty":"0"}</pre>
				</div>							
			</div>					
			<div id="headright">
				<p>
					<h1 id="spada">Spada.be</h1>
					<h4>J'ai besoin d'un stage et j'ai pensé à vous !</h4>
					<h6>Pourquoi Spada ? Parce que ...</h6>
				</p>
				<p>
					<h5 id="item1">
						&laquo; J'aime la diversité dont vous avez fait preuve dans vos différents projets (événements, santé, automobile). &raquo;
					</h5>
				</p>
				<p>
					<h5 id="item2">
						&laquo; J'aime votre approche concernant l'étape importante d'un très bon stage. &raquo;
					</h5>
				</p>
				<p>
					<h5 id="item3">
						&laquo; La manière dont vous avez menez vos projets (la vision, les valeurs) me donne l'envie d'apprendre a vos cotés. &raquo;
					</h5>
				</p>
				<p>
					<h5 id="item4">
						&laquo; Parce que moi aussi j'aime le chocolat et ça me ferait plaisir d'en ramener. &raquo; 
					</h5>
				</p>
				<div class="img">
					<img src="./assets/img/last.png" id="choco" alt="choco">
				</div>								
				<a href="#modal"><button id="btn5" data-hover="Merci !"><div>Contactez Moi !</div></button></a>			
			</div>				
		</div>
		<div class="formulaire">
			<div id="modal" class="formulaire-contact">								
				<div class="icones">
					<a href="https://github.com/MichaelBourloo" id="ico1"><i class="fab fa-github-square fa-4x"></i></a>
					<a href="https://twitter.com/MichaelBourloo" id="ico2"><i class="fab fa-twitter-square fa-4x"></i></a>
					<a href="https://www.linkedin.com/feed/" id="ico3"><i class="fab fa-linkedin fa-4x"></i></a>					
				</div>	
				<div class="form">
					<form method="POST" action="">					
						<input type="text" name="nom" placeholder="Nom, Prénom" id="name" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
						<label for="name"></label>
						<input type="email" placeholder="Votre e-mail" name="mail" id="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
						<textarea name="message" placeholder="Votre message" id="area" cols="77." rows="5"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
						<input type="submit" id="send" value="Send" name="mailform" />
						<a href="#" title="Haut de page" class="scrollup"><i class="fa fa-arrow-up fa-2x"></i></a>
					</form>	
				</div>
			</div>			
		</div>		
		<script src="./assets/js/anime.min.js"></script>
		<script src="./assets/js/anim.js"></script>
		<script src="./assets/js/contact.js"></script>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>