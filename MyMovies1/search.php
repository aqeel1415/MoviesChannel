<?php
include('Connect-DB.php'); 
$input=$_GET['search'];
$search=$input;
include_once "conf/info.php";
$title = 'Result Search | '.$input;
include_once "header.php";
include_once "api/api_search.php";
?>
    <h3>Result Search: <em><?php echo $input?></em></h3>
    <hr>
 <div class="container-fluid">
  <div class="row">
<?php
        foreach($search->results as $results){
    		$title 		= $results->title;
			$id 		= $results->id;
			$release	= $results->release_date;
			if (!empty($release) && !is_null($release)){
				$tempyear 	= explode("-", $release);
				$year 		= $tempyear[0];
				if (!is_null($year)){
					$title = $title.' ('.$year.')';
				}
			}
			$poster 	= $results->poster_path;
			if (empty($poster) && is_null($poster)){
				$poster =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
			} else {
				$poster = "$imgurl_2".$poster;
			}
             //search results specifications 
    		echo '<div  class="col-sm-4"><a href="movie.php?id=' . $id . '"><img src="'.$backdrop.'"><h4>'.$title.'</h4></a></div>';
		}
        ?>
  </div>
</div>


 <?php
include_once('footer.php');
?>
