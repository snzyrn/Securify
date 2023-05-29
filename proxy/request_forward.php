<?php
$target_url = 'http://localhost:8000' . $_SERVER['REQUEST_URI'];

$options = [
    CURLOPT_RETURNTRANSFER => true,
];

$ch = curl_init($target_url);
curl_setopt_array($ch, $options);
$response = curl_exec($ch);

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code === 403) {
    header("Location: /Securify/proxy/App/403.php");
    exit();
}

echo $response;
?>
