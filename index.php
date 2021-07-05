<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TableWebsite</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>

<body>
	<header>
		<h1>Mon Site d'Exercices sur les Tableaux</h1>
		<h4 class="Subtitle">Aujourd'hui je fais surtout des boucles et des tableaux</h4>
	</header>

	<!-- Commencez par répondre à Analyse.txt !! -->

	<div class="Odd">
		<p>
			Exercice n°1 :
		</p>
		<?php
		// Créez un programme qui dit " j'aime la couleur bleu, j'ai une voiture bleue, un chien bleu, du dentifrice bleu et je rêve tous les jours en bleu"
		// créez votre programme de manière optimale pour pouvoir changer rapidement le mot qui représente la couleur, en changeant un seul mot votre programme doit être capable d'écrire la même phrase avec du rouge ou du rose.

		?>
	</div>
	<div class="Pair">
		<p>
			Exercice n°2 :
		</p>
		<?php
		// Votre programme doit prendre en compte l'âge et le nom de l'utilisateur. En fonction de son âge, le programme va avoir 4 comportements différents qui vont chacun être executé dans une fonction qui lui est propre.
		// Si l'âge de la personne est inferieur à 12 :
		// le programme écrit "Bonjour [nomDeLaPersonne], tu es un enfant"
		// Ensuite il écrira "Lorsque tu auras le double de ton âge, tu auras [doubleDelAgeEntré]"
		// Si la personne a entre 12 et 18 ans :
		// Le programme écrira  "Je ne parle pas aux adolescents, il sentent mauvais !"
		// Si la personne a plus de 18 ans :
		// Le programme écrira "Bonjour [nomDeLaPersonne], vous êtes un adulte respectable !"
		// Si la personne a entre 14 et 77ans :
		// Le programme doit renvoyer un booléen vrai si l'âge de la personne au carré est divisible par 5. Bien sur cette fonction renverra un booléen négatif si ce n'est pas le cas.
		// Ce resultat peut être écrir à l'écran, mais ce n'est pas son but, le plus important est la valeur de retour pour l'exploiter dans un futur programme.


		?>
	</div>
	<div class="Odd">
		<p>
			Exercice n°3 :
		</p>
		<?php
		// Créez un resolveur automatique du jeu du chiffre caché. 
		// Dans un premier temps votre programme génèrera un chiffre aléatoire entre 1 et 100
		// Dans un deuxième temps, votre programme essayera seul de deviner quel chiffre il a généré aléatoirement. 
		// Il essayera donc de générer un nouveau chiffre entre 1 et 100, ensuite il saura si ce second chiffre est inférieur, supérieur ou égal au premier.
		// Si le chiffre est égal, c'est gagné, et on l'affiche
		// Si le chiffre est supérieur, on l'affiche et on re-génère un nouveau chiffre, mais attention maintenant votre programme sait qu'il ne peut pas être inférieur au dernier chiffre généré !
		// Si le chiffre est inférieur, c'est l'inverse.
		// Lorsque le bon chiffre est trouvé, écrivez aussi le nombres d'essais qu'il a fallu à votre programme pour le trouver. 
		?>
	</div>
	<div class="Pair">
		<p>
			Exercice n°4 :
		</p>
		<?php
		// Créez un programme qui calcule la moyenne du nombre de lettres (les tirets comptent aussi comme une lettre !) dans un prénom en se basant sur ces prénoms :
		// Jean-Luc / Archibald / Micheline / Bernardo-Del-Fuego / Leopold-le-Quatrième
		// Créez votre programme de sorte que je puisse facilement rajouter un prénom (ou en enlever 1) en ne modifiant qu'une seule ligne de code. la moyenne s'adaptera alors et correspondra à la moyenne des lettres en prenom en compte le nouveau nom rajouté (ou enlevé)

		// Pour savoir le nombre de caractères dans une string : strlen($string)
		?>
	</div>

</body>

</html>