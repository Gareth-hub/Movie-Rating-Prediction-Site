<?php include('db_connection.php') ?>
<!DOCTYPE html>


<title></title>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="file:///C:/xampp/htdocs/movies.html?#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="file:///C:/xampp/htdocs/movies.html?#">
      <img src="./demo.html_#_files/lo.jpg" width="30" height="30" alt="" loading="lazy">
    </a>
  </nav>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="file:///C:/xampp/htdocs/movies.html?#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="file:///C:/xampp/htdocs/movies.html?#">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="file:///C:/xampp/htdocs/movies.html?#">Compare</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="file:///C:/xampp/htdocs/movies.html?#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="file:///C:/xampp/htdocs/movies.html?#">Sign In</a>
          <a class="dropdown-item" href="file:///C:/xampp/htdocs/movies.html?#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="file:///C:/xampp/htdocs/movies.html?#">Something else here</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="main">


<button type="button" class="btn btn-primary btn-lg" style="float:right;">Log Out</button>





</p>

<div class="card-mb-3" style="mx-auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="poster.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">The Irishman</h5>

        <?php
        $sql = "SELECT * FROM current_movies;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
          while($row = mysqli_fetch_assoc($result)){
              echo $row['current_movie_id'] . "<br>";
              echo $row['current_movie_title'] . "<br>";
              echo $row['current_movie_year'] . "<br>";
              echo $row['current_movie_genre'] . "<br>";
              echo $row['current_movie_director'] . "<br>";
              echo $row['current_movie_description'] . "<br>";
              echo $row['current_movie_box_office_earnings'] . "<br>";
              echo $row['current_movie_youtube_trailer_views'] . "<br>";
              echo $row['current_movie_youtube_likes'] . "<br>";
              echo $row['current_movie_youtube_dislikes'] . "<br>";
              echo $row['current_movie_twitter_mentions'] . "<br>";
          }
        }
        ?>

        <!--
        <p class="card-text">Youtube Views: 1500000</p>
        <p class="card-text">Twitter Likes: 1500000</p>
        <p class="card-text">Facebook Likes: 1500000</p>
        <p class="card-text">Google Trends: 1500000</p>
        <p class="card-text">Rotton Tomatoes: 8/10</p>
        <p class="card-text">imbd: 9/10</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        -->

      </div>
    </div>
  </div>
</div>


<br>







<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Movie Analytics</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- Copyright -->




</div>






</body>


</html>
