<?php 
include('Connect-DB.php');
include "conf/info.php";

$movie_id =$_POST['Movie_ID'];
$Movie_original_title = $_POST['Movie_original_title'];
$Movie_poster_path = $_POST['Movie_poster_path'];
$Movie_overview =$_POST['Movie_overview'];
$Movie_geners = $_POST['Movie_geners'];

//adding the movie to favorite table
mysqli_query($con,"INSERT INTO favorties ( Movie_ID ) VALUES ( $movie_id )");

//adding the movie details to the movie table
mysqli_query($con,"INSERT INTO movie  (Movie_ID ,Name ,Poster,Movie_Description,Geners ) VALUES ( '$movie_id'  , '$Movie_original_title' , '$Movie_poster_path', '$Movie_overview', '$Movie_geners' )");


header("Location: movie.php?id=$movie_id ");
?> 

							