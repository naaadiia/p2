<?php
$image_path = 'https://th.bing.com/th/id/R.33d02c67b4a6e90abe2d7a58f764edd8?rik=gA%2fesQP2%2f0%2b5uw&riu=http%3a%2f%2fwww.snut.fr%2fwp-content%2fuploads%2f2015%2f12%2fimage-de-nature-9.jpg&ehk=4oiNLekZZh50XowVszovQmq8w%2fH0S6GIwQYqeKknWaM%3d&risl=&pid=ImgRaw&r=0';
$api_url = 'http://127.0.0.1:8000/api/images/';
// Créer une ressource cURL
$ch = curl_init($api_url);

// Définir les options cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'image' => new CURLFILE($image_path),
    'image_url' => $image_url
));

// Exécuter la requête cURL
$response = curl_exec($ch);

// Vérifier la réponse
if ($response === false) {
    echo 'Erreur cURL: ' . curl_error($ch);
} else {
    echo $response;
}

// Fermer la ressource cURL
curl_close($ch);
?>