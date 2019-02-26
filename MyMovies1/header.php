<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?>  
      <?php echo $tagline ?>
    </title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="scripts/expander.js"></script>
  </head>
  <body>
  
  <!-- navigation bar --> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">MoviesBox</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="now-playing.php">Latest Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Favorites.php">My Favorites</a>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li>
      <form class="form-inline my-2 my-lg-0"  action="search.php" method="get">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Movies" required aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </li>
    </ul> 
  </div>
</nav>



   
