<?php
<?php

// Définir l'URL de l'API Django
$url = 'http://127.0.0.1:8000/api/basic/';

// Les données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Décode le résultat JSON en tableau associatif
$response = json_decode($result, true);

// Si la requête a réussi, rediriger vers une nouvelle page pour afficher les résultats
if ($response['status'] === 'success') {
    $url = 'results.php?title=' . urlencode($response['title']) .
           '&img=' . urlencode(json_encode($response['img'])) .
           '&name_similarity_list=' . urlencode(json_encode($response['name_similarity_list']));
    header('Location: ' . $url);
    exit;
} else {
    // Si la requête a échoué, afficher un message d'erreur
    echo 'Erreur: ' . $response['message'];
}

?>


<!-- Style CSS pour la page -->
<style>
    .card {
        margin-bottom: 20px;
    }
</style>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<!-- ye5dem verison 2 id score + path img 
$url = 'http://127.0.0.1:8000/api/basic/';

// Données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data), // les données sont encodées en format URL-encoded
    CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'), // spécifie le type de contenu comme URL-encoded
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Décode le résultat JSON en tableau associatif
$response = json_decode($result, true);

// Vérifie si la requête a réussi
if ($response['status'] === 'success') {
    // Affiche les valeurs et IDs des produits
    foreach ($response['name_similarity_list'] as $item) {
        echo 'ID: ' . $item[0] . ', Similarité: ' . $item[1] . '<br>';
    }
    
    // Affiche l'image
    $img_data = $response['img'];
    $img_src = 'data:image/jpeg;base64,' . base64_encode(implode("", $img_data));
        echo '<img src="' . $img_src . '">';
} else {
    // Affiche un message d'erreur
    echo 'Erreur: ' . $response['message'];
}

?>
 affichage sans image 
$url = 'http://127.0.0.1:8000/api/basic/';

// Données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data), // les données sont encodées en format URL-encoded
    CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'), // spécifie le type de contenu comme URL-encoded
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Traitement de la réponse
$response = json_decode($result, true);

if ($response['status'] == 'success') {
    if ($response['status'] == 'success') {

        // Affiche les noms des produits et leur similarité
        $name_similarity_list = $response['name_similarity_list'];
        foreach ($name_similarity_list as $product) {
            echo $product[0] . ' - Similarité : ' . $product[1] . '<br>';
        }


    $name_similarity_list = $response['name_similarity_list'];
    $img_data = $response['img'];

    // Convertir le tableau $img_data en une chaîne de caractères
    $img_data_str = implode($img_data);

    // Créer la balise img avec l'URL de l'image encodée en base64
    $img_src = 'data:image/jpeg;base64,' . base64_encode($img_data_str);
    echo '<img src="' . $img_src . '">';
} else {
    echo 'Erreur lors de la requête à l\'API';
}
}
?>



    #te5dem version 2  id et score  image path 


$url = 'http://127.0.0.1:8000/api/basic/';

// Données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data), // les données sont encodées en format URL-encoded
    CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'), // spécifie le type de contenu comme URL-encoded
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Affichage du résultat
echo $result;










------------------------
te5DEEMMMMMM 2
// URL de l'API
$url = 'http://127.0.0.1:8000/api/basic/';

// Données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Affichage du résultat
echo $result;
?>
<!-- #t5DEEEEEEEM
// URL de l'API
$url = 'http://127.0.0.1:8000/api/basic/';

// Données à envoyer en POST
$data = array('nom' => $_POST['nom']);

// Configuration de cURL
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
);

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options
curl_setopt_array($ch, $options);

// Exécution de la requête
$result = curl_exec($ch);

// Fermeture de cURL
curl_close($ch);

// Affichage du résultat
echo $result;

-----------------------------------------------------
// URL de l'API
$url = 'http://localhost:8000/api/basic/';

// Données à envoyer en POST
$data = array(
    'nom' => 'votre-nom-de-produit'
);

// Configuration de cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Envoi de la requête
$response = curl_exec($ch);

// Gestion des erreurs
if(curl_errno($ch)) {
    echo 'Erreur cURL : ' . curl_error($ch);
}

// Fermeture de la session cURL
curl_close($ch);

// Affichage de la réponse
$response_data = json_decode($response, true);
if($response_data['status'] == 'success') {
    $top_indices = $response_data['top_indices'];
    $top_similarities = $response_data['top_similarities'];
    $top_similar_image_url = $response_data['top_similar_image_url'];
    echo '<h2>Résultat de la recherche pour le produit: ' . $data['nom'] . '</h2>';
    if(count($top_indices) > 0) {
        echo '<p>Produits similaires trouvés:</p>';
        for($i = 0; $i < count($top_indices); $i++) {
            $index = $top_indices[$i] - 1; // Récupération de l'indice du produit similaire (-1 car l'indice commence à 1 plutôt qu'à 0)
            $similarity = $top_similarities[$i]; // Récupération de la similarité du produit similaire
            echo '<div>';
            echo '<p>Produit similaire n°' . ($i + 1) . ' avec un score de similarité de ' . round($similarity, 2) . ': </p>';
            echo '<img src="' . $top_similar_image_url . '" alt="Image du produit similaire">';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun produit similaire trouvé.</p>';
    }
}

aujourdui 
______________________




$url = "http://localhost:8000/api/basic/"; // Mettez ici l'URL de votre API

if (isset($_POST['nom'])) { // Vérifiez si le champ 'nom' a été soumis dans le formulaire
    $data = array(
        'nom' => $_POST['nom'],
        'id' => 5
    );

    // Configuration de la requête HTTP POST
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Token YOUR_API_KEY'
        )
    );
    $ch = curl_init();
    curl_setopt_array($ch, $options);

    // Envoi de la requête HTTP POST
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    // Récupérer les données JSON retournées par l'API
    $json_response = json_decode($response, true);

    // Afficher les détails du produit correspondant et les indices de similarité
    if (isset($json_response['matching_login'])) {
        $matching_login = $json_response['matching_login'];
        echo "Le produit correspondant est : " . $matching_login['nom'] . "<br/>";
    }

    if (isset($json_response['top_indices'])) {
        $top_indices = $json_response['top_indices'];
        echo "Top similarity scores and their indices are: <br/>";
        foreach($top_indices as $index) {
            echo "Index: " . $index . "<br/>";
        }
    } else {
        echo "Error: Key 'top_indices' not found in response.";
    }

    echo "API Response: ";
    var_dump($response);
} else {
    echo "Error: Field 'nom' not submitted.";
}


-------------------
 $url = "http://127.0.0.1:8000/api/basic/"; // URL du service Django REST
$data = array(
    'nom' => $_POST['nom'], // Données du formulaire
    'id' =>5 ,
    
);
print_r ($data);
// Configuration de la requête HTTP POST
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Token YOUR_API_KEY'
    )
);

$ch = curl_init();
curl_setopt_array($ch, $options);

// Envoi de la requête HTTP POST
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);


echo "Message posté avec succès !";
*/ 
-->