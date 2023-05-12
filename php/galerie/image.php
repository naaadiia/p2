<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body{
  background-color: #F3EEF4; /* Cette couleur correspond à une couleur de fond nude */
  }
    </style>
  
</head>
<body>
<?php
// Récupération des paramètres de l'URL
$url = $_GET['url'];
$id = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];
$article= $description .' ' . $title;

// Envoi du titre à l'API Django pour traitement
$data = array('id' => $id, 'title' => $title);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents('http://127.0.0.1:8000/api/basic/', false, $context);
$response = json_decode($result, true);

// Affichage de l'image d'origine et des informations associées
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-8 offset-md-2">';
echo '<div class="card mb-3">';
echo '<div class="card-body">';
echo '<h3 class="card-title">'.$title.' (ID : '.$id.')</h3>';
echo '<p class="card-text">'.$description.'</p>';
echo '<img src="'.$url.'" class="img-fluid mx-auto d-block" alt="'.$title.'" style="max-width: 100%;">';
echo '</div></div></div></div>';

// Affichage des images traitées par l'API Django
$displayed_urls = array(); // Tableau pour stocker les URLs des images déjà affichées
echo '<div class="row">';
echo '<div class="col-md-8 offset-md-2">';
echo '<div class="card mb-3">';
echo '<div class="card-body">';
echo '<h3 class="card-title">Produits plus similaires</h3>';
echo '</div></div></div></div>';

echo '<div class="row">';
echo '<div class="col-md-8 offset-md-2">';
echo '<div class="card-group">';

foreach ($response['img'] as $key => $item) {
    // Vérifier si l'URL de l'image actuelle est déjà dans le tableau
    if (!in_array($item, $displayed_urls)) {
        $displayed_urls[] = $item; // Ajouter l'URL de l'image au tableau
        echo '<div class="card mb-3">';
        echo '<img class="card-img-top" src="' . $item . '" alt="Card image cap" style="max-height: 200px; max-width: 100%;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">ID: ' . $response['name_similarity_list'][$key][0] . '</h5>';
        if ($response['name_similarity_list'][$key][1] != 1) { // Ajouter une condition pour n'afficher que les produits qui ne sont pas identiques
            echo '<p class="card-text">Similarité: ' . $response['name_similarity_list'][$key][1] . '</p>';
        }
        echo '</div></div>';
    }
}

echo '</div></div></div>';
echo '</div></div>';


// Affichage du titre traité retourné par l'API Django
//echo '<h2>'.$result.'</h2>';


// Affichage du titre traité retourné par l'API Django
//echo '<h2>'.$result.'</h2>';

// Affichage du titre traité retourné par l'API Django
?>

<!--
partie 2 de la code version 4 

// Affichage de l'image d'origine et des informations associées
echo '<div class="row">';
echo '<div class="col-md-8 offset-md-2">';
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h3 class="card-title">'.$title.' (ID : '.$id.')</h3>';
//echo '<h3 class="card-title">'.$title.'</h3>';
echo '<p class="card-text">'.$description.'</p>';
echo '<img src="'.$url.'" class="img-fluid mx-auto d-block" alt="" style="max-width: 100%;">';
echo '</div></div>';

// Affichage des images traitées par l'API Django
$displayed_urls = array(); // Tableau pour stocker les URLs des images déjà affichées
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h3 class="card-title">Produits plus similaires</h3>';
echo '</div></div>';
echo '<div class="card-group">';
foreach ($response['img'] as $key => $item) {
    // Vérifier si l'URL de l'image actuelle est déjà dans le tableau
    if (!in_array($item, $displayed_urls)) {
        $displayed_urls[] = $item; // Ajouter l'URL de l'image au tableau
        echo '<div class="card">';
        echo '<img class="card-img-top" src="' . $item . '" alt="Card image cap" style="max-height: 200px; max-width: 100%;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">ID: ' . $response['name_similarity_list'][$key][0] . '</h5>';
        if ($response['name_similarity_list'][$key][1] != 1) { // Ajouter une condition pour n'afficher que les produits qui ne sont pas identiques
            echo '<p class="card-text">Similarité: ' . $response['name_similarity_list'][$key][1] . '</p>';
        }
        echo '</div></div>';
    }
}
echo '</div></div></div>';



 version 3 img 
// Récupération des paramètres de l'URL
$url = $_GET['url'];
$title = $_GET['title'];
$description = $_GET['description'];

// Affichage de l'image et des informations
echo '
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="'.$url.'" class="img-fluid" alt="">
                <h3 class="card-title">'.$title.'</h3>
                <p class="card-text">'.$description.'</p>
            </div>
        </div>
    </div>';

// Envoi du titre à l'API Django pour traitement
$data = array('title' => $title);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents('http://127.0.0.1:8000/api/basic/', false, $context);
$response = json_decode($result, true);
foreach ($response['img'] as $key => $item) {
        echo '<div class="col-md-4">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="' . $item . '" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">ID: ' . $response['name_similarity_list'][$key][0] . '</h5>';
        echo '<p class="card-text">Similarité: ' . $response['name_similarity_list'][$key][1] . '</p>';
        echo '</div></div></div>';
    }
    echo '</div></div>';

    // Affiche l'image
    $img_data = $response['img'];
    $img_src = 'data:image/jpeg;base64,' . base64_encode(implode("", $img_data));

// Affichage du titre traité
echo '<h2>'.$result.'</h2>';
?>

</div>
</body>
</html>
-------------------------
#te5deem ; 


// Récupération des paramètres de l'URL
$url = $_GET['url'];
$title = $_GET['title'];
$description = $_GET['description'];

// Affichage de l'image et des informations
echo '
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="'.$url.'" class="img-fluid" alt="">
                <h3 class="card-title">'.$title.'</h3>
                <p class="card-text">'.$description.'</p>
            </div>
        </div>
    </div>';

// Envoi du titre à l'API Django pour traitement
$data = array('title' => $title);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents('http://127.0.0.1:8000/api/basic/', false, $context);




    ------------
   $response = json_decode($result, true);

    // Vérifie si la requête a réussi
    if ($response['status'] === 'success') {
        // Affiche le titre traité
        echo "Le titre traité est : " . $response['title'];
    } else {
        // Affiche un message d'erreur
        echo 'Erreur: ' . $response['message'];
    }

    ----------------
        // Récupération de l'URL de l'image
        $url = $_GET['url'];
        $title = $_GET['title'];
        $description = $_GET['description'];

        
        // Affichage de l'image
      //  echo '<img src="'.$url.'" class="img-fluid" alt="">';
        // echo $title ."<br>"  . $description ;

        echo '
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <img src="'.$url.'" class="img-fluid" alt="">
                            <h5 class="card-title">'.$title.'</h5>
                            <p class="card-text">'.$description.'</p>
                        </div>
                    </div>
                </div>';
                 -->