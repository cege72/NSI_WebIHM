<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Mon 1er projet PHP</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
	</head>
	
	<body>
		Bonjour 
		<?php 
			echo $_POST['prenom']; 
		?>.
		
		<br>
		
		Nous sommes le <?php echo date('d/m/Y'); ?>.
		
		<br>
		
		<?php 
			/* $dateNaissance est une variable */
			$dateNaissance = $_POST['dateNaiss'];
			echo "Tu es né(e) le ".$dateNaissance.".";
		?>

	</body>
</html>