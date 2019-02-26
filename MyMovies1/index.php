<link href="css/Style.css" rel="stylesheet">
<link href="css/SlideShow.css" rel="stylesheet">
<?php
  include "conf/info.php";
  $title="Welcome to ";
  include_once "header.php";
  include_once "api/api_toprated.php";
?>
    <h1>The Latest Movie </h1>
    <hr>
    <ul>
          <?php
          include_once "api/api_latest.php";
                $poster_path = $latest->poster_path;
			if (empty($poster_path) && is_null($poster_path)){
                //if there is no poster for this movie 
				$poster_path = 'image/no-gambar.jpg';
			} else { 
				$poster_path = "$imgurl_2".$latest->poster_path;
			}
            echo '<li><a href="movie.php?id=' . $latest->id . '"><img  src="'. $poster_path . '" /><h4>' . $latest->original_title . " (" . substr($latest->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $latest->vote_average . " |  Vote : " . $latest->vote_count . "</em></h5></a></li>";
          ?>
   </ul>
    
    
<h1>The Top Rated Movies </h1>
<hr> 

 <div class="container">
  <div class="row">
      <?php
            foreach($toprated->results as $p){     
            echo '<div class="col-sm"><a href="movie.php?id=' . $p->id . '"><img  src="'.$imgurl_2.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></div>";

            }
      ?> 
  </div>
</div>


<?php
  include_once "footer.php";
?>	
