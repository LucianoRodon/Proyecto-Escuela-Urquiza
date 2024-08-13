<?php
require 'vendor/autoload.php'; // Asegúrate de instalar google/apiclient

use Google\Client;

$id_token = $_POST['id_token'];

$client = new Client();
$client->setClientId('TU_CLIENT_ID');
$client->setAuthConfig('path/to/credentials.json');
$client->addScope('profile');
$client->addScope('email');

try {
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userId = $payload['sub'];
        $email = $payload['email'];
        // Aquí puedes iniciar sesión o crear un nuevo usuario en tu sistema
        echo json_encode(['status' => 'success', 'userId' => $userId, 'email' => $email]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid ID token']);
    }
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
