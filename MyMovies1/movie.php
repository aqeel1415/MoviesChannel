<link href="css/Style.css" rel="stylesheet">
<?php
  include "conf/info.php";
    $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_similar.php";
    include_once "api/api_posters.php";
    $title = "$movie_id->original_title";
    include_once "header.php";
?>

 <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
 ?>
    <h1><?php echo $movie_id->original_title ?></h1>
 <?php
    echo "<h5>".$movie_id->tagline."</h5>";
  ?>
        
  <?php
        $poster_path = $movie_id->poster_path;
    		if (empty($poster_path) && is_null($poster_path)){
                //if there is no poster for this movie 
				$poster_path = 'image/no-gambar.jpg';
			} else { 
				$poster_path = "$imgurl_2".$movie_id->poster_path;
			}
            echo '<img src="'. $poster_path . '">';
    ?>
<hr>

<h3>Cast</h3>
   <div>
      <div>
         <table class="tablesorter" id="ticketLinesTable">
            <tbody> 
            <?php
                foreach($movie_id->credits->cast as $p){
                $profile_path = $p->profile_path;
                	if (empty($profile_path) && is_null($profile_path)){
                        //if there is no profile for this cast 
        				$profile_path = 'image/no-gambar.jpg';
        			} else {
                        $profile_path = "$imgurl_2".$p->profile_path;
        			}
                echo '<tr><td id="cpic"><img  src="'.$profile_path. '"."width=32 height=44"></td><td><a href="credit.php?id=' . $p->credit_id . '">'. $p->name ."</a></td><td>"." $p->character"."</td></tr>";     
                }    
             ?>
              </tbody>
          </table>
       </div>
<span id=more span></span>

<hr>
<h3>Posters</h3>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php 
            $hasAddedActive = false;
            foreach($movie_posters_id->posters as $p){     
        ?>
        <?php 
            $divClass = 'item';
            $divClass .= $hasAddedActive ? '' : ' active';
            $hasAddedActive = true;
            echo('<div class="'.$divClass.'">'); 
        ?>
            <?php 
                echo '<img src="'.$imgurl_1.''. $p->file_path . '" width=100% >';
            ?>
        <?php echo('</div>'); ?>    
        
        <?php } ?>

    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

     <hr>
     <h3>Details</h3>
          <p>Title : <?php echo $movie_id->original_title ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Genres : 
              <?php
                ob_start();
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span>'.' | ';
                }
                $output = ob_get_clean();
                 echo rtrim($output, ' | ');
              ?>
          </p>
          <p>Overview : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
          <p>Production Companies :
              <?php
                foreach($movie_id->production_companies as $pc){
                  echo $pc->name." ";
                }
              ?>
          </p>
          <p>Production Countries:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
          </p>
          <p>Budget: $ <?php echo $movie_id->budget ?> </p>
          <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
          <p>Vote Count : <?php echo $movie_id->vote_count ?></p>

            <form  method="POST" action="AddFavorite.php">
                <tr>
                  <div> 
                        <Button style="background:none;border : none;" type=submit name="favorite"><img src="image/favorite.png"> </Button>
                        <input type="hidden" name="Movie_ID" value="<?php echo $movie_id->id ?>" >
                        <input type="hidden" name="Movie_original_title" value="<?php echo $movie_id->original_title ?>" >
                        <input type="hidden" name="Movie_poster_path" value="<?php echo $movie_id->poster_path ?>" >
                        <input type="hidden" name="Movie_overview" value="<?php echo $movie_id->overview ?>" >
                          <?php
                         ob_start();
                                foreach($movie_id->genres as $g){
                                  echo $g->name .'  |  ';
                                }
                           $output = ob_get_clean();
                           $geners = rtrim($output, ' | ');
                        echo '<input type="hidden" name="Movie_geners" value='.$geners.' >';
                        ?>
                   </div>
                </tr>     
            </form>
    



  <hr>
    <h3>Similar Movies</h3>

 <div class="container">
  <div class="row">
        <?php
        $count = 4;
        $output=""; 
        foreach($movie_similar_id->results as $sim){
        $output.='<div class="col-sm"><a href="movie.php?id=' . $sim->id . '"><img src="'.$imgurl_2.''.$sim->backdrop_path.'"><h5>' . $sim->original_title . " (" . substr($sim->release_date, 0, 4)." )</h5><em> Rate : " .$sim->vote_average . " | Vote : " .$sim->vote_count . " | Popularity : " . round($sim->popularity) . "</em></a></div>";
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
  </div>
</div>

 <?php 
    } 
else{
     echo "<h5>Movie not Found</h5>";
 }
 ?>


<?php
  include_once "footer.php";
?>
