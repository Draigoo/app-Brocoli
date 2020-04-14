<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Mini P

	ojet</title>
</head>
<body>

<body>
	<header>
		<a href="index.html">
			<img src="image/Logo_Fiver2.png" alt="logo">
		 </a>
		<img src="image/france3.png" id="bretagne" alt="france">
		<img src="image/location.svg" id="localisation" alt="localisation">
		
		<h1 id="devise">Vous Loger, Notre Métier</h1>
		
		<div class= "dropdown">
			<img src="image/menu.svg" id="menu" alt="menu">
			<h2>Menu</h2>

			<div class="dropdown-content">
				<a href = "rechercheGlobal.html">
					<p>Acheter un bien </p>
				</a>
				<a href = "contact.html">
					<p>Nous Contacter </p>
				</a>
				<a href="agence.html">
					<p>Qui Sommes-Nous</p>
				</a>
			</div>
		</div>
	</header>


	<form method="post" id="saisie">
		Votre recherche : 
		<select id="type">
			<option id="Appartement">Appartement</option>
			<option id="Maison">Maison</option>
		</select>
		à
		<select id="ville">
			<option id="brest">Brest</option>
			<option id="rennes">Rennes</option>
		</select>
	
		<button id="recherche">Rechercher</button>
	</form>

	
	

	<div id="slider">
		<h2>Nos Coups de Coeurs</h2>
		<figure>
			<img src="image/maison1.jpg" alt="maison1">
			<img src="image/maison1.jpg" alt="maison2">
			<img src="image/maison1.jpg" alt="maison3">
			<img src="image/maison1.jpg" alt="maison4">
		</figure>
		
		<button id="coeur">Visiter!</button> <br><br>
	</div>

		

	<footer>
		<a href="index.html">
			<img id="Logo" src="image/Logo_Fiver2.png" alt="logo">
		</a>
		<a href="https://www.facebook.com/">
			<img id="facebook" src="image/Facebook-Icon.svg" alt="facebook">
		</a>
		<a href="https://twitter.com/">
			<img  id="twitter" src="image/Twitter-Icon.svg" alt="twitter">
		</a>
		<a href="https://fr.linkedin.com/">
			<img  id="linkedin" src="image/linkedin-3.svg" alt="linkedin">
		</a>
		<a href="agence.html">
			<p id="Quifoot">Qui sommes-nous ?</p>
		</a>
		<a href="mentionLegale.html">
			<p id="MentionFoot">Mentions Légales </p>
		</a>
		<a href = "contact.html">
			<p id="Contactfoot">Contactez-nous !</p>
		</a>
		<p id="Copyrights">Copyrights FIVER 2019. Tous droits réservés</p>
	</footer>

</body>
</html>

