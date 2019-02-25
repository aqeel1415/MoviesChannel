<?php 
include('Connect-DB.php');
$movie_id =$_POST['Movie_ID'];
mysqli_query($con,"DELETE FROM favorties where Movie_ID ='$movie_id'");
mysqli_query($con,"DELETE FROM movie where Movie_ID ='$movie_id'");
?> 
<script> location.replace("Favorites.php"); </script>