<?php
  include "conf/info.php";
  $title="Welcome to ";
  include_once "header.php";
  include_once "api/api_toprated.php";
?>
    <h1>The Latest Movie </h1>
    <hr>
    <ul style="list-style-type: none;" >
          <?php
            include_once "api/api_latest.php";
             echo '<li><a href="movie.php?id=' . $latest->id . '"><img src="http://image.tmdb.org/t/p/w500'. $latest->poster_path . '"><h4>' . $latest->original_title . " (" . substr($latest->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $latest->vote_average . " |  Vote : " . $latest->vote_count . "</em></h5></a></li>";
          ?>
    </ul>
    
<h1>The Top Rated Movies </h1>
<hr> 

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
            foreach($toprated->results as $p){     
        ?>
        <?php 
            $divClass = 'item';
            $divClass .= $hasAddedActive ? '' : ' active';
            $hasAddedActive = true;
            echo('<div class="'.$divClass.'">'); 
        ?>
            <?php 
            
     echo '<a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a>";
            ?>
        <?php echo('</div>'); ?>    
        
        <? } ?>

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
<?php
  include_once "footer.php";
?>	