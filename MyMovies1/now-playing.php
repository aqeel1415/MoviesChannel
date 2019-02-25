<?php
  include('Connect-DB.php'); 
  include "conf/info.php";
  $title="Latest Movies";
  include_once "header.php";
?>


<html DOCTYPE>

<body>
    <h1>Latest Movies</h1>


    <?php
      include_once "api/api_now.php";
      $min = date('d F Y', strtotime($nowplaying->dates->minimum));
      $max = date('d F Y', strtotime($nowplaying->dates->maximum));
      echo "<h5><sub>from</sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h5>";
    ?>


    <hr>

 <div class="container">
  <div class="row">
  
      <?php
        foreach($nowplaying->results as $p){  
         echo '<input type="hidden" name="Movie_ID" value="'.$p->id.'"?>';
         echo '<td><div class="col-sm"><a href="movie.php?id=' . $p->id . '"><img height="250px" width="200" src="'.$imgurl_1.''. $p->poster_path . '"><h5>' . $p->original_title . " (" . substr($p->release_date, 0, 4)." )</h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></a></div></td>";
        }
      ?>
 
  </div>
</div>


</body>

</html>
<?php
  include_once "footer.php";
?>	
