<?php

$cs = curl_init();
curl_setopt($cs, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id_movie."/images?api_key=" . $apikey);
curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cs, CURLOPT_HEADER, FALSE);
curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response33 = curl_exec($cs);
curl_close($cs);
$movie_posters_id = json_decode($response33);
?>