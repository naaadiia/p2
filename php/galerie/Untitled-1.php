<!DOCTYPE html>
<html>
<head>
	<title>Ma galerie d'images</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		.card {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Ma galerie d'images</h1>
		
		<div class="row">
			<?php
			// Liste des images
			$images = array(
				array(
					"titre" => "Image 1",
					"description" => "Ceci est la première image.",
					"fichier" => "image1.jpg"
				),
				array(
					"titre" => "Image 2",
					"description" => "Ceci est la deuxième image.",
					"fichier" => "image2.jpg"
				),
				array(
					"titre" => "Image 3",
					"description" => "Ceci est la troisième image.",
					"fichier" => "image3.jpg"
				)
			);

			// Boucle à travers chaque image et afficher la carte
			foreach ($images as $image) {
				echo '<div class="col-md-4">';
				echo '<div class="card">';
				echo '<a href="image.php?fichier='.$image['fichier'].'">';
				echo '<img class="card-img-top" src="'.$image['fichier'].'" alt="'.$image['titre'].'">';
				echo '</a>';
				echo '<div class="card-body">';
				echo '<h5 class="card-title">'.$image['titre'].'</h5>';
				echo '<p class="card-text">'.$image['description'].'</p>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			?>
		</div>

	</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		img {
			max-width: 100%;
		}
	</style>
</head>
<body>

	<div class="container">
		<?php
		// Vérifiez si le fichier d'image est spécifié
		if (isset($_GET['fichier'])) {
			// Récupèrez le titre et la description de l'image à partir de la liste
			$images = array(
				array(
					"titre" => "Image 1",
					"description" => "Ceci est la première image.",
					"fichier" => "image1.jpg"
				),
				array(
					"titre" => "Image 2",
					"description" => "Ceci est la deuxième image.",
					"fichier" => "image2.jpg"
				),
				array(
					"titre" => "Image 3",
					"description" => "Ceci est la troisième image.",
					"fichier" => "image3.jpg"
				)
			);

			$fichier = $_GET['fichier'];

			// Trouvez l'image correspondante
			$image = null;
			foreach ($images as $i) {

