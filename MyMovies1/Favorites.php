<?php  include ("header.php"); 
       include ("Connect-DB.php");
?>




<h2 class="sub_Title"> My Favorties Movie</h2>

    <body>
         <div class="container">
             <div class="row">

        <?php    
            $Select = "SELECT favorties.Movie_ID, movie.Name, movie.Poster FROM favorties JOIN movie on favorties.Movie_ID= movie.Movie_ID";
            $runQuery = mysqli_query($con, $Select);    
            while($row = mysqli_fetch_array($runQuery))
                     {
                      
                           echo '<div class="col-sm">';
                           echo '<img src="http://image.tmdb.org/t/p/w300'.$row["Poster"].'">';
                           echo '<a href="movie.php?id='.$row["Movie_ID"].'"><h5>' .$row["Name"]. '</h5></a>';  
                           echo '<form  method="POST" action="RemoveFavorite.php">';
                           echo '<Button style="background:none;border : none;" type=submit name="favorite"> <img src="http://mmovies.unaux.com/MyMovies1/image/x-button.png"></Button>';
                           echo '<input type="hidden" name="Movie_ID" value='.$row["Movie_ID"].'>';
                           echo '</form>';
                           echo '</div>'; 

                      }  
                    
         ?>
                </div>
           </div> 

<?php
  include_once "footer.php";
?>	
