<?php
// Reemplaza 'latitud' y 'longitud' con los valores reales
$url = "https://api.open-meteo.com/v1/forecast?latitude=40.7128&longitude=-74.0060&hourly=temperature_2m,relativehumidity_2m,dewpoint_2m,apparent_temperature&daily=temperature_2m_max,temperature_2m_min,precipitation_sum&timezone=auto";

// Hacer la petición HTTP
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Acceder a los datos
$current_temperature = $data['hourly']['temperature_2m'][0];
$daily_max_temp = $data['daily']['temperature_2m_max'][0];
?>