<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET["title"]; ?></title>
	<!-- Inclure Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php echo $_GET["title"]; ?></h1>
				<img src="<?php echo $_GET["src"]; ?>" alt="<?php echo $_GET["title"]; ?>" class="img-responsive">
				<p><?php echo $_GET["description"]; ?></p>
			</div>
		</div>
	</div>
</body>
</html>



<!--
// Vérifiez si l'identifiant de l'image est défini dans l'URL
if (isset($_GET['img'])) {
    // Récupérez l'identifiant de l'image à partir de l'URL
    $img_id = $_GET['img'];
    
    // Déterminez le chemin d'accès à l'image en fonction de l'identifiant
    $img_path = '';
    switch ($img_id) {
        case '1':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg';
            break;
        case '2':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg';
            break;
        case '3':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x-300x400.jpg';
            break;
        case '4':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x-225x300.jpg';
            break;
        case '5':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1583997119f97e0f3c26a55bbc1d0839606f41a1b1_thumbnail_600x-225x300.jpg';
            break;
        case '6':
            $img_path = 'https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x-225x300.jpg';
            break;
        default:
            // Si l'identifiant de l'image n'est pas valide, redirigez l'utilisateur vers la page d'accueil
            header('Location: index.php');
            exit();
    }
} else {
    // Si l'identifiant de l'image n'est pas défini dans l'URL, redirigez l'utilisateur vers la page d'accueil
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image</title>
</head>
<body>
    <img src="<?php echo $img_path; ?>" alt="Image">
</body>
</html>
