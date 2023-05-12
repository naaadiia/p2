
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'images</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
  h1 {
   
    font-family: Arial, sans-serif; /* changer la police de caractères */
    font-size: 2.5rem; /* changer la taille de la police */
    text-align: center; /* centrer le titre */
    color: #333; /* changer la couleur de la police */
    text-transform: uppercase; /* mettre le texte en majuscules */
    letter-spacing: 0.1em; /* ajouter un espacement entre les lettres */
    margin-bottom: 1.5rem; /* ajouter une marge en bas du titre */
  }
  .card {
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.2s ease-in-out;
    margin-bottom: 1.5rem;
  }

  .card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .card-img-top {
    height: 200px;
    object-fit: cover;
  }

  .card-body {
    padding: 1.25rem;
  }

  .card-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }

  .card-text {
    font-size: 1rem;
    margin-bottom: 1rem;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-weight: bold;
    transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }

  /* Définir une taille uniforme pour toutes les images */
  img {
    height: 200px;
    object-fit: cover;
  }
  body{
  background-color: #F3EEF4; /* Cette couleur correspond à une couleur de fond nude */
  }
</style>

</head>
<body>

<div class="container">
        <h1>Galerie d'images</h1>
        <div class="container">
      <!--      
      <h4>search product </h4>
      <form action="index33.php" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Saisie</label>
          <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre texte ici">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>

    </div>-->
        <div class="row">
            <?php
            // Liste des images
            $images = array(
                array(
                    "id"=>225,
                    "url" => "https://www.idresstocode.com/images/imagecache/500x500/jpg/jupe-style-portefeuille-bleu-ocean.webp",
                    "titre" => " 	
                    Jupe trapèze portefeuille bleue",
                    "description" => " jupe trapèze bleue portefeuille avec double pan devant     "
                ),
                array(
                    "id"=>70,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survetement avec blocs de couleurs",
                    "description" => " T-shirt    survêtement     "
                ),
                array(
                    "id"=> 471,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1564482832936798284_thumbnail_600x799.jpg",
                    "titre" => "Sandales plates à bride de cheville avec ourlet festonné",
                    "description" => "Style: À la mode   Couleur: Doré   Type de motif: Unicolore   Type: Sandales à lanières   Type de brides (cm): Bride de Cheville   Bout: Orteil ouvert   Taille appropriée: Une taille plus petite   Tissu de doublure: Cuir PU   Matière Semelle Intérieure: Cuir PU   Matière semelle extérieure: Caoutchouc   Matière extérieure: Cuir PU"
                ),
                array(
                    "id"=> 490,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x.jpg",
                    "titre" => "Sandales à boucle",
                    "description" => "  Style: Sport   Couleur: Noir, beige   Type de motif: Unicolore   Détails: boucle   Type: Sandales de sport   Bout: Orteil ouvert   Talons: Plate-Forme   Hauteur du Talon: Mi-Haut   Taille appropriée: Une taille plus petite   Matière Semelle Intérieure: plastique   Matière semelle extérieure: Mousse plastique   Matière extérieure: plastique  "
                ),
                array(
                    "id"=> 623,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1606702377ce8ca99d4ba48c59c55e2d778110411c_thumbnail_600x-300x400.jpg",
                    "titre" => "Chemise à capuche avec carreaux",
                    "description" => "Style: BCBG   Couleur: Multicolore   Type de motif: Carreau   Type du col: Capuche   Longueur: Classique   Type: Chemise   Détails: Avec boutons devant   Longueur des manches: Manches longues   Type de manches: Classiques   Saison: Printemps/automne   Type d'ajustement: Coupe régulière   Transparent: Non   Type de fermeture: Patte   Tissu/matériel: Coton   Composition: 100% Coton   Tissu: Pas de l'extensibilité"
                ),
                array(
                    "id"=> 390,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/159117447501289a1a4ac7a3b270773a246b9600d7_thumbnail_600x.jpg",
                    "titre" => "Sac à main à motif lettre",
                    "description" => "  Style: À la mode   Type de motif: Lettres   Détails: Pompon, Festonné   Type: Sacs à poignée   Type de brides (cm): Ajustable, Double poignée   Composition: 100% Cuir PU   Tissu/matériel: Cuir PU   Taille du sac: Moyen  1"
                ),
                //array(
                   // "id"=> 565,
                    //////"description" => "Description de l'image 1"
                
                array(
                    "id"=> 454,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/157839472275a9fbd34f2c08feb038955a50837429_thumbnail_600x-300x400.jpg",
                    "titre" => "6 paires Boucles d’oreilles avec fausse perle
                    ",
                    "description" => "  Détails: Cœur, Perle   Composition: 70% Alliage, 10% Perle, 10% Polyester , 10% Strass   Couleur Métallique: Doré   Tissu/matériel: Métallique   Couleur: Multicolore   Type: Ensembles   Style: Casual  "
                ),
                array(
                    "id"=> 70,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survêtement avec blocs de couleurs
                    ",
                    "description" => "Ensemble de survêtement "
                ),
                array(
                    "id"=> 31,
                    "url" => "http://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16071527289f373271dca00ecbd6559afa116d8040_thumbnail_600x.jpg",
                    "titre" => " t-shirt à rayures avec imprimé et pantalon de survêtement Ensemble
                    ",
                    "description" => "   Style: Casual   Couleur: RayÃ© noir et blanc   Type de motif: RayÃ©, Animal   Type du col: Col rond   Type de haut: T-shirt   Type de bas: style survÃªtement   dÃ©tails: Cordon   Longueur des manches: Manches courtes   Type de manches: Classiques   Saison: Printemps/Ã‰tÃ©   Type d'ajustement: Coupe rÃ©guliÃ¨re   Transparent: Non   VÃªtements traditionnels arabes: OUI   Tissu/matÃ©riel: Polyester   Composition: 97% Polyester , 3% Ã‰lasthanne   Tissu: ExtensibilitÃ© lÃ©gÃ¨re   "
                ),
                array(
                    "id"=> 363,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16155323449c1d83c29afffd81c6ddcbd079e4c3e8_thumbnail_600x.jpg",
                    "titre" => " Chapeau de paille avec nœud papillon
                    ",
                    "description" => "   Couleur: Beige Type de motif: Unicolore Saison: Printemps/automne Style: Casual Type: Chapeau en paille Sexe: Filles Tissu/matériel: Paille Composition: 100% Paille "
                ),
                array(
                    "id"=> 669,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/160499145041ffe7a940c317bb48898173ba2bba30_thumbnail_600x.jpg",
                    "titre" => "Homme Gants à lettres
                    ",
                    "description" => "  gants "
                ),
                array(
                    "id"=> 140,
                    "url" => "http://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1608529856cd440b264d5b400e8ff7b9e504a16a51_thumbnail_600x.jpg",
                    "titre" => " 5 pièces Fille Set de sacs avec poche
                    ",
                    "description" => "Couleur: Rose bonbon Sexe: Filles Type de motif: Cartoon, Lettres Type de brides (cm): Ajustable, Double poignée Taille du sac: Grand Composition: 100% Canevas Tissu/matériel: Canevas "
                ),
               
            );
            
            // Affichage des images
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card">
                        <img src="'.$image['url'].'" class="card-img-top" alt="'.$image['titre'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$image['titre'].'</h5>
                            <p class="card-text">'.$image['description'].'</p>
                            <a href="image.php?url='.$image['url'].'&title='.$image['titre'].'&description='.$image['description'].'&id='.$image['id'].'" class="btn btn-primary">Voir image</a>
                            </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<!--
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'images</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
  h1 {
   
    font-family: Arial, sans-serif; /* changer la police de caractères */
    font-size: 2.5rem; /* changer la taille de la police */
    text-align: center; /* centrer le titre */
    color: #333; /* changer la couleur de la police */
    text-transform: uppercase; /* mettre le texte en majuscules */
    letter-spacing: 0.1em; /* ajouter un espacement entre les lettres */
    margin-bottom: 1.5rem; /* ajouter une marge en bas du titre */
  }
  .card {
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.2s ease-in-out;
    margin-bottom: 1.5rem;
  }

  .card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .card-img-top {
    height: 200px;
    object-fit: cover;
  }

  .card-body {
    padding: 1.25rem;
  }

  .card-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }

  .card-text {
    font-size: 1rem;
    margin-bottom: 1rem;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-weight: bold;
    transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }

  /* Définir une taille uniforme pour toutes les images */
  img {
    height: 200px;
    object-fit: cover;
  }
  body{
  background-color: #F3EEF4; /* Cette couleur correspond à une couleur de fond nude */
  }
</style>

</head>
<body>

<div class="container">
        <h1>Galerie d'images</h1>
        <div class="container">
            
      <h4>search product </h4>
      <form action="index33.php" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Saisie</label>
          <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre texte ici">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
        <div class="row">
            
            // Liste des images
            $images = array(
                array(
                    "id"=>225,
                    "url" => "https://www.idresstocode.com/images/imagecache/500x500/jpg/jupe-style-portefeuille-bleu-ocean.webp",
                    "titre" => " 	
                    Jupe trapèze portefeuille bleue",
                    "description" => " jupe trapèze bleue portefeuille avec double pan devant     "
                ),
                array(
                    "id"=>70,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survetement avec blocs de couleurs",
                    "description" => " T-shirt    survêtement     "
                ),
                array(
                    "id"=> 471,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1564482832936798284_thumbnail_600x799.jpg",
                    "titre" => "Sandales plates à bride de cheville avec ourlet festonné",
                    "description" => "Style: À la mode   Couleur: Doré   Type de motif: Unicolore   Type: Sandales à lanières   Type de brides (cm): Bride de Cheville   Bout: Orteil ouvert   Taille appropriée: Une taille plus petite   Tissu de doublure: Cuir PU   Matière Semelle Intérieure: Cuir PU   Matière semelle extérieure: Caoutchouc   Matière extérieure: Cuir PU"
                ),
                array(
                    "id"=> 490,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x.jpg",
                    "titre" => "Sandales à boucle",
                    "description" => "  Style: Sport   Couleur: Noir, beige   Type de motif: Unicolore   Détails: boucle   Type: Sandales de sport   Bout: Orteil ouvert   Talons: Plate-Forme   Hauteur du Talon: Mi-Haut   Taille appropriée: Une taille plus petite   Matière Semelle Intérieure: plastique   Matière semelle extérieure: Mousse plastique   Matière extérieure: plastique  "
                ),
                array(
                    "id"=> 623,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1606702377ce8ca99d4ba48c59c55e2d778110411c_thumbnail_600x-300x400.jpg",
                    "titre" => "Chemise à capuche avec carreaux",
                    "description" => "Style: BCBG   Couleur: Multicolore   Type de motif: Carreau   Type du col: Capuche   Longueur: Classique   Type: Chemise   Détails: Avec boutons devant   Longueur des manches: Manches longues   Type de manches: Classiques   Saison: Printemps/automne   Type d'ajustement: Coupe régulière   Transparent: Non   Type de fermeture: Patte   Tissu/matériel: Coton   Composition: 100% Coton   Tissu: Pas de l'extensibilité"
                ),
                array(
                    "id"=> 390,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/159117447501289a1a4ac7a3b270773a246b9600d7_thumbnail_600x.jpg",
                    "titre" => "Sac à main à motif lettre",
                    "description" => "  Style: À la mode   Type de motif: Lettres   Détails: Pompon, Festonné   Type: Sacs à poignée   Type de brides (cm): Ajustable, Double poignée   Composition: 100% Cuir PU   Tissu/matériel: Cuir PU   Taille du sac: Moyen  1"
                ),
                //array(
                   // "id"=> 565,
                    //////"description" => "Description de l'image 1"
                
                array(
                    "id"=> 454,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/157839472275a9fbd34f2c08feb038955a50837429_thumbnail_600x-300x400.jpg",
                    "titre" => "6 paires Boucles d’oreilles avec fausse perle
                    ",
                    "description" => "  Détails: Cœur, Perle   Composition: 70% Alliage, 10% Perle, 10% Polyester , 10% Strass   Couleur Métallique: Doré   Tissu/matériel: Métallique   Couleur: Multicolore   Type: Ensembles   Style: Casual  "
                ),
                array(
                    "id"=> 70,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survêtement avec blocs de couleurs
                    ",
                    "description" => "Ensemble de survêtement "
                ),
                array(
                    "id"=> 31,
                    "url" => "http://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16071527289f373271dca00ecbd6559afa116d8040_thumbnail_600x.jpg",
                    "titre" => " t-shirt à rayures avec imprimé et pantalon de survêtement Ensemble
                    ",
                    "description" => "   Style: Casual   Couleur: RayÃ© noir et blanc   Type de motif: RayÃ©, Animal   Type du col: Col rond   Type de haut: T-shirt   Type de bas: style survÃªtement   dÃ©tails: Cordon   Longueur des manches: Manches courtes   Type de manches: Classiques   Saison: Printemps/Ã‰tÃ©   Type d'ajustement: Coupe rÃ©guliÃ¨re   Transparent: Non   VÃªtements traditionnels arabes: OUI   Tissu/matÃ©riel: Polyester   Composition: 97% Polyester , 3% Ã‰lasthanne   Tissu: ExtensibilitÃ© lÃ©gÃ¨re   "
                ),
                array(
                    "id"=> 363,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16155323449c1d83c29afffd81c6ddcbd079e4c3e8_thumbnail_600x.jpg",
                    "titre" => " Chapeau de paille avec nœud papillon
                    ",
                    "description" => "   Couleur: Beige Type de motif: Unicolore Saison: Printemps/automne Style: Casual Type: Chapeau en paille Sexe: Filles Tissu/matériel: Paille Composition: 100% Paille "
                ),
                array(
                    "id"=> 669,
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/160499145041ffe7a940c317bb48898173ba2bba30_thumbnail_600x.jpg",
                    "titre" => "Homme Gants à lettres
                    ",
                    "description" => "  gants "
                ),
                array(
                    "id"=> 140,
                    "url" => "http://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1608529856cd440b264d5b400e8ff7b9e504a16a51_thumbnail_600x.jpg",
                    "titre" => " 5 pièces Fille Set de sacs avec poche
                    ",
                    "description" => "Couleur: Rose bonbon Sexe: Filles Type de motif: Cartoon, Lettres Type de brides (cm): Ajustable, Double poignée Taille du sac: Grand Composition: 100% Canevas Tissu/matériel: Canevas "
                ),
               
            );
            
            // Affichage des images
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card">
                        <img src="'.$image['url'].'" class="card-img-top" alt="'.$image['titre'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$image['titre'].'</h5>
                            <p class="card-text">'.$image['description'].'</p>
                            <a href="image.php?url='.$image['url'].'&title='.$image['titre'].'&description='.$image['description'].'&id='.$image['id'].'" class="btn btn-primary">Voir image</a>
                            </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>


























 array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x.jpg",
                    "titre" => "Robe t-shirt à rayures avec pièce en suédine",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg",
                    "titre" => "Robe avec imprimé floral et plis
                    ",
                    "description" => "Description de l'image 3"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x.jpg",
                    "titre" => "Baskets à lacets",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x.jpg",
                    "titre" => "Sandales à boucle",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1606702377ce8ca99d4ba48c59c55e2d778110411c_thumbnail_600x-300x400.jpg",
                    "titre" => "Chemise à capuche avec carreaux",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/159117447501289a1a4ac7a3b270773a246b9600d7_thumbnail_600x.jpg",
                    "titre" => "Sac à main à motif lettre",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1602136871ed417b1a5521130fe263c8fae126a296_thumbnail_600x.jpg",
                    "titre" => "3 pièces Collier à soleil
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/157839472275a9fbd34f2c08feb038955a50837429_thumbnail_600x-300x400.jpg",
                    "titre" => "6 paires Boucles d’oreilles avec fausse perle
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survêtement avec blocs de couleurs
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16071527289f373271dca00ecbd6559afa116d8040_thumbnail_600x.jpg",
                    "titre" => "t-shirt à rayures avec imprimé et pantalon de survêtement Ensemble
                    ",
                    "description" => "Description de l'image 1"
                ),


                -------------------------------------------
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1>Galerie d'images</h1>
        <div class="row">
       
            // Liste des images
            $images = array(
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15005131887631932761_thumbnail_600x.jpg",
                    "titre" => "Robe à carreaux & poches",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1574675072461ff51c9b9382572dcbc7f80653354c_thumbnail_600x.jpg",
                    "titre" => "Robe t-shirt à rayures avec pièce en suédine",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/15649860803174982602_thumbnail_600x799.jpg",
                    "titre" => "Robe avec imprimé floral et plis
                    ",
                    "description" => "Description de l'image 3"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16159444371567a8f1332b82c7cdec8f3dc125e7d2_thumbnail_600x.jpg",
                    "titre" => "Baskets à lacets",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1594004815c73e92095c0ca19d7ee664b318a1c024_thumbnail_600x.jpg",
                    "titre" => "Sandales à boucle",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1606702377ce8ca99d4ba48c59c55e2d778110411c_thumbnail_600x-300x400.jpg",
                    "titre" => "Chemise à capuche avec carreaux",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/159117447501289a1a4ac7a3b270773a246b9600d7_thumbnail_600x.jpg",
                    "titre" => "Sac à main à motif lettre",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1602136871ed417b1a5521130fe263c8fae126a296_thumbnail_600x.jpg",
                    "titre" => "3 pièces Collier à soleil
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/157839472275a9fbd34f2c08feb038955a50837429_thumbnail_600x-300x400.jpg",
                    "titre" => "6 paires Boucles d’oreilles avec fausse perle
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/1597713647364f1d845728cb408862c5c248b0907a_thumbnail_600x.jpg",
                    "titre" => "Ensemble de survêtement avec blocs de couleurs
                    ",
                    "description" => "Description de l'image 1"
                ),
                array(
                    "url" => "https://www.shop.cl92depannage.fr/wp-content/uploads/2021/03/16071527289f373271dca00ecbd6559afa116d8040_thumbnail_600x.jpg",
                    "titre" => "t-shirt à rayures avec imprimé et pantalon de survêtement Ensemble
                    ",
                    "description" => "Description de l'image 1"
                ),
            );
            
            // Affichage des images
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card">
                        <img src="'.$image['url'].'" class="card-img-top" alt="'.$image['titre'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$image['titre'].'</h5>
                            <p class="card-text">'.$image['description'].'</p>
                            <a href="image.php?url='.$image['url'].'&title='.$image['titre'].'&description='.$image['description'].'" class="btn btn-primary">Voir image</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
        -->