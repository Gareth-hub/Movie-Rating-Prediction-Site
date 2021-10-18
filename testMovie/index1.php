<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lime Movies</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- start #header -->

               <!-- !Primary Navigation -->

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
                       <a class="nav-link" href="file:///C:/xampp/htdocs/clipboard.php?#">stat <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="file:///C:/xampp/htdocs/clipboard.php">Movies</a>
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
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">


        <!-- !Top Movies -->

        <!-- By-Genre -->
          <section id="by-genre">
            <div class="container">
              <h4 class="font-rubik font-size-20">By Genre</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Genre</button>
                <button class="btn" data-filter=".Sci-Fi">Sci-Fi</button>
                <button class="btn" data-filter=".Comedy">Comedy</button>
                <button class="btn" data-filter=".Action">Action</button>
              </div>

              <div class="grid">
                <div class="grid-item Apple border">
                 <div class="item py-2" style="width: 200px;">
                  <div class="movie font-rale">
                    <a href="#"><img src="../assets/movieposters/ghostbustersposter.jpg" alt="ghostbustersposter" class="img-fluid"></a>
                    <div class="text-center">
                      <h6>Ghostbusters</h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <button type="submit" class="btn btn-warning font-size-12">Add to favourites</button>
                    </div>
                  </div>
                </div>
                </div>
                <div class="grid-item Samsung border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="movie font-rale">
                     <a href="#"><img src="../assets/movieposters/blackpantherposter.jpg" alt="blackpantherposter" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Black Panther</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to favourites</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Redmi border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="movie font-rale">
                     <a href="#"><img src="../assets/movieposters/oceans-8-poster.jpg" alt="oceans8" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Oceans 8</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to favourites</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Apple border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="movie font-rale">
                     <a href="#"><img src="../assets/movieposters/uncut_gems.jpg" alt="uncutgemsposter" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Uncut Gems</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to favourites</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Samsung border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="movie font-rale">
                     <a href="#"><img src="../assets/movieposters/spynextdoor.jpg" alt="spynextdoorposter" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>The Spy Next Door</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to favourites</button>
                     </div>
                   </div>
                 </div>
                 </div>
              </div>
            </div>
          </section>
        <!-- !By-Genre -->

        <!-- Banner Ads  -->
          <section id="banner_adds">
            <div class="container py-5 text-center">
              <img src="../assets/banner1.jpg" alt="banner1" class="img-fluid">
            </div>
          </section>
        <!-- !Banner Ads  -->




          <!-- What We Do -->
            <section id="What-we-do">
              <div class="container py-4">
                <h4 class="font-rubik font-size-20">What We Do</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Linguistic Analysis</h5>
                      <img src="../assets/misc/linguistic-analysis-poster.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">See More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Analytical Predictions</h5>
                      <img src="../assets/misc/machine-learning-poster.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">See More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Data Analysis</h5>
                      <img src="../assets/misc/data-analytics-poster.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">See More</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- !What We Do -->

        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->
        <footer id="footer" class="bg-danger text-white py-5">
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
    <script src="index.js"></script>
</body>
</html>
