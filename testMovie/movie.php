<!DOCTYPE html>


<title></title>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">

<script src="js/bootstrap.min.js"></script>
</head>

<body>
  <header id="header">
  <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">Team Project - Group Lime</p>
      <div class="font-rale font-size-14">
          <a href="form.html" class="px-3 border-right border-left text-dark">Register</a>
          <a href="#" class="px-3 border-right text-dark">Favourites (0)</a>
      </div>
  </div>

  <!-- Primary Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <a class="navbar-brand" href="#">Lime Movies</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Movies <i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compare.php">Get Statistics <i class="fas fa-chevron-down"></i></a>
          </li>


        </ul>
        <form action="#" class="font-size-14 font-rale">
            <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-film"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
            </a>
        </form>
      </div>
    </nav>
     <!-- !Primary Navigation -->

  </header>
<!-- !start #header -->

<main>





<?php
  include "info.php";

  $id_movie = $_GET['id'];
    include_once "api/movie_id.php";
    include_once "api/movie_video_id.php";
    include_once "api/similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    //include_once "header.php";

?>

    <?php

    if(isset($_GET['id'])){
    $id_movie = $_GET['id'];
    ?>




            <section id="movie" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>"  class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Add to Favourites</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?php echo $movie_id->original_title ?></h5>
                            <small><?php $rel = date('Y', strtotime($movie_id->release_date)); echo $rel ?></small>
                            <!--<div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings </a>
                            </div>--->
                            <hr class="m-0">

                            <!---    movie details       -->
                                <table class="my-3">
                                    <!--<tr class="font-rale font-size-14">
                                        <td>Director: </td>
                                        <td></td>
                                    </tr>
                                  -->
                                    <tr class="font-rale font-size-14">
                                        <td>Genre: </td>
                                        <td class="font-size-20 text-danger"><span><?php
                                          foreach($movie_id->genres as $g){
                                            echo '<span>' . $g->name . '</span> ';
                                          }
                                        ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;</small></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Release Date: </td>
                                        <td><span class="font-size-16 text-danger"> <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?></span></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Box-Office: </td>
                                        <td><span class="font-size-16 text-danger">$: <?php echo $movie_id->budget ?></span></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Vote Count: </td>
                                        <td><span class="font-size-16 text-danger"> <?php echo $movie_id->vote_count ?></span></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Vote Average: </td>
                                        <td><span class="font-size-16 text-danger"> <?php echo $movie_id->vote_average ?></span></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Tagline: </td>
                                        <td><span class="font-size-16 text-danger"> "<?php echo $movie_id->tagline ?>"</span></td>
                                    </tr>
                                </table>

                                <hr>

                            <!-- movie-details -->
                                <div id="movie-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Production Country :   <?php
                                        foreach($movie_id->production_countries as $pco){
                                          echo $pco->name. "&nbsp;&nbsp;" ;
                                        }
                                      ?></small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Studio: <?php
                                      foreach($movie_id->production_companies as $pc){
                                        echo $pc->name." ";
                                      }
                                    ?></small>
                                </div>
                             <!-- !movie-details -->

                         </div>

                        <div class="col-12 py-5">
                            <h6 class="font-rubik" >Movie Description</h6>
                            <hr>
                            <p class="font-rale font-size-14"><?php echo $movie_id->overview ?></p>
                        </div>
                    </div>
                </div>
                            <!---    !movie details       -->
                          </section>
          </div>
        </div>
      </div>
    </div>





    <h3>Similar Movies</h3>
      <ul>
      <?php
        $count = 4;
        $output="";
        foreach($movie_similar_id->results as $sim){
          $output.='<li><li><a href="movie.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w300'.$sim->backdrop_path.'"><h5>'.$sim->title.'</h5></a></li>';
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
      </ul>

    <?php
    } else{
      echo "<h5>Movie tidak ditemukan.</h5>";
    }
    ?>
</main>

</br>
</br>
</br>
<footer id="footer" class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-12">
        <h4 class="font-rubik font-size-20">Lime Movies</h4>
        <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
      </div>
      <div class="col-lg-4 col-12">
        <h4 class="font-rubik font-size-20">Newslatter</h4>
        <form class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Email *">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="col-lg-2 col-12">
        <h4 class="font-rubik font-size-20">Information</h4>
        <div class="d-flex flex-column flex-wrap">
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
        </div>
      </div>
      <div class="col-lg-2 col-12">
        <h4 class="font-rubik font-size-20">Account</h4>
        <div class="d-flex flex-column flex-wrap">
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Favourites</a>
          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
  <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Group Lime</a></p>
</div>
<!-- !start #footer -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="./index.js"></script>
<?php
  //include_once "footer.php";
?>
</body>
