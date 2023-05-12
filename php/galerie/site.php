
<!DOCTYPE html>
<html>
<head>
	<title>Galerie</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('img').click(function() {
				var image_url = $(this).attr('src');
				$.ajax({
					url: 'http://127.0.0.1:8000/api/basic2/',
					method: 'POST',
					data: {'image_url': image_url},
					success: function(response) {
						// Renvoie la liste des images similaires dans un tableau
						var similar_images = response.similar_images;
						// Redirige l'utilisateur vers une autre page contenant les images similaires
						window.location.href = 'similar_images.php?similar_images=' + JSON.stringify(similar_images);
					}
				});
			});
		});
	</script>
</head>
<body>
	<div class="gallery">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x-300x400.jpg">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x-225x300.jpg">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1583997119f97e0f3c26a55bbc1d0839606f41a1b1_thumbnail_600x-225x300.jpg">
		<img src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x-225x300.jpg">
	</div>
    <?php
		// Vérifie si le paramètre 'similar_images' est défini dans l'URL
		if (isset($_GET['similar_images'])) {
			// Récupère la liste des images similaires à partir du paramètre GET
			$similar_images = json_decode($_GET['similar_images']);
			// Affiche les images similaires dans un tableau
			echo "<table>";
			foreach ($similar_images as $similar_image) {
				echo "<tr>";
				echo "<td><img src='$similar_image'></td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "Aucune image similaire trouvée.";
		}
	?>
</body>
</html>



<!--
<!DOCTYPE html>
<html>
  <head>
    <title>Ma galerie d'images</title>
    <style>
      /* CSS pour la galerie */
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
      }
      
      .gallery img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin-bottom: 20px;
        box-shadow: 0px 0px 5px #ccc;
      }
      
      /* CSS pour les titres */
      h1, h2 {
        text-align: center;
        font-family: Arial, sans-serif;
      }
      
      h1 {
        font-size: 36px;
        margin-top: 50px;
        margin-bottom: 20px;
      }
      
      h2 {
        font-size: 24px;
        margin-top: 30px;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
 <h1>Maaaa galerie d'images</h1>
    <div class="gallery">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg" alt="Image 1">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg" alt="Image 2">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x-300x400.jpg" alt="Image 3">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x-225x300.jpg" alt="Image 4">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1583997119f97e0f3c26a55bbc1d0839606f41a1b1_thumbnail_600x-225x300.jpg" alt="Image 5">
    
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x-225x300.jpg" alt="Image 6">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1564482832936798284_thumbnail_600x799-225x300.jpg" alt="Image 7">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/159117447501289a1a4ac7a3b270773a246b9600d7_thumbnail_600x.jpg" alt="Image 8">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1583823311bcfcdddfb0de6c1bacdcc930b9effef6_thumbnail_600x-225x300.jpg" alt="Image 9">
      <img class="gallery-image" src="https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16092094363b0a0b50a7b09de57d0f0dcf563f27a9_thumbnail_600x-225x300.jpg" alt="Image 10">
    </div>
    </body>
    </html>
---------------------------------
$imageSrc = "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:8000/api/basic2/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array('image_src' => $imageSrc)),
));
$response = curl_exec($curl);
curl_close($curl);
$images = json_decode($response)->images;
foreach ($images as $image) {
    echo '<img src="' . $image->image_src . '">';
}
$url = 'http://127.0.0.1:8000/api/basic2/'.$image_id.'/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$similar_images = json_decode($response, true)['similar_images'];

?>

-->