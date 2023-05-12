<!DOCTYPE html>
<html>
<head>
	<title>Galerie d'images</title>
	<!-- Inclure Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php
			// Tableau de données pour les images
			$images = array(
				array(
					"src" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg",
					"title" => "Image 1",
					"description" => "Description de l'image 1"
				),
				array(
					"src" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg",
					"title" => "Image 2",
					"description" => " description 3 "
				),
				array(
					"src" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x-300x400.jpg",
					"title" => "Image 3",
					"description" => "Description de l'image 3"
				)
			);

			// Boucle pour afficher chaque image
			foreach ($images as $image) {
				echo '<div class="col-sm-4">';
				echo '<a href="image.php?src=' . $image["src"] . '">';
				echo '<img src="' . $image["src"] . '" alt="' . $image["title"] . '" class="img-responsive">';
				echo '<h3>' . $image["title"] . '</h3>';
				echo '<p>' . $image["description"] . '</p>';
				echo '</a>';
				echo '</div>';
			}
			?>
		</div>
	</div>
</body>
</html>




<!--
<!DOCTYPE html>
<html>
<head>
	<title>Galerie d'images</title>
	<style type="text/css">
		/* Ajouter un style pour les images de la galerie */
		.gallery img {
			width: 200px;
			height: 150px;
			margin: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<div class="gallery">
		
		
		

		<a href="index_img.php?img=1"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg"alt="Description de mon image"></a>
		<a href="index_img.php?img=2"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg"></a>
		<a href="index_img.php?img=3"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x-300x400.jpg"></a>
		<a href="index_img.php?img=4"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x-225x300.jpg"></a>
		<a href="index_img.php?img=5"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1583997119f97e0f3c26a55bbc1d0839606f41a1b1_thumbnail_600x-225x300.jpg"></a>
		<a href="index_img.php?img=6"><img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x-225x300.jpg"></a>
	</div>
</body>
</html>