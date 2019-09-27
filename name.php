<!DOCTYPE html>
<html>
<head>
	<title>exo2</title>
</head>
<body>
	<form action="name.php" method="POST">
		<input type="text" name="nom" placeholder="Entrer votre nom" required>
		<br>
		<input type="text" name="prenom" placeholder="Entrer votre prenom" required>
		<br>
		<input type="submit" name="btn" value="Ajouter">
		
	</form>
</body>
</html>

<?php 
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
echo $nom . "   "  . $prenom;



 ?>
