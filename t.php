<?php
// Get the visitor's IP address
echo $ip_address = $_SERVER['REMOTE_ADDR'];

// Get the country and city using a free IP geolocation API (e.g., freegeoip.app)
$geo_data = json_decode(file_get_contents("https://freegeoip.app/json/{$ip_address}"));

// Extract country and city from the API response
$country = $geo_data->country_name;
$city = $geo_data->city;



// Display the results
// echo "IP Address: {$ip_address}<br>";
// echo "Country: {$country}<br>";
// echo "City: {$city}<br>";
?>
