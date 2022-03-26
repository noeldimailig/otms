<?php
$google_client = new Google_Client();

$google_client->setClientId(GOOGLE_CLIENT_ID);

$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');
$google_client->addScope('profile');

?>