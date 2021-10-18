<!DOCTYPE html>


<title></title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-latest.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="clipboard.min.js"></script>
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


  <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
          <p class="font-rale font-size-12 text-black-50 m-0">Team Project - Group Lime</p>
          <div class="font-rale font-size-14">
              <a href="#" class="px-3 border-right border-left text-dark">Login</a>
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
                <a class="nav-link" href="file:///C:/xampp/htdocs/testMovie/index1.php">Home <i class="fas fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/xampp/htdocs/testMovie/clipboard.php">Get Statistics <i class="fas fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Compare</a>
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
<div class="main">


<!--<button type="button" class="btn btn-primary btn-lg" style="float:right;">Log Out</button>-->


<div class="card-group">
  <div class="card">
    <script>
    const APIKEY = "970978636001c77562e47fa0d71bf7ea";
    let baseURL = 'https://api.themoviedb.org/3/';
    let configData = null;
    let baseImageURL = null;
    </script>
    <img src="https://image.tmdb.org/t/p/w342/iOPXG7q6ZqxSFp2iSY2CvgeRXyC.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">No Time to Die<br>
        <button><a href="movie.php?id=370172">View Details</a></button></h5>





    </div>
  </div>
  <div class="card">
    <!--<img src="..." class="card-img-top" alt="...">-->
    <div class="card-body">
      <h5 class="card-title">Facebook Data</h5>
      <p class="card-text">
        <p id="target"><span class="border border-light">https://www.youtube.com/watch?v=BIhNsAtPbPI

        </p>
        </span>




        <div id="myOverlay" class="overlay">
          <!---<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
          <div class="overlay-content">
            <form action="/">
              <input type="text" class="url" placeholder="Enter URL .." name="search">
              <button type="button" onclick="getShareCount();"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <!---<h2>Check Share Count</h2>--->
        <!--<button class="openBtn" onclick="openSearch()">CHECK NOW</button>-->
        <div class="result"></div>
        <script>

        function getShareCount(){
          url = $(".url").val();
          api_url = 'https://graph.facebook.com/v3.0/?id='+url+'&fields=og_object{engagement}&access_token=386520385950463|bd269cc590e947f02ed1bbbd3252f86c';
          $.ajax({
            url:api_url,
            type:'get',
            success:function(res){
              count = res.og_object.engagement.count;
              text = res.og_object.engagement.social_sentence;
              $(".result").html('<h3>'+count+' Shares<br>'+text+'</h3>');



            }
          });
        }
        </script>











      </p>

    </div>
  </div>
  <div class="card">
    <!--<img src="..." class="card-img-top" alt="...">-->
    <div class="card-body">
      <h5 class="card-title">YouTube Data</h5>
      <p class="card-text">
        https://www.youtube.com/watch?v=BIhNsAtPbPI


        <?php
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            $url = $_POST['url'];


        }

        function getYoutubeVideoID1($url){

            $queryString = parse_url($url,PHP_URL_QUERY);
            parse_str($queryString,$params);
            // var_dump($queryString);
            // die();
            if(isset($params['v']) && strlen($params['v'])>0){
                return $params['v'];
            }else{
                return "Wrong youtube video url";
            }
        }
        $vidEoID = getYoutubeVideoID1($url);
        $api_key = "AIzaSyCqGM-ae9IbaulFRDuvT7Ngnni3EWYXujo"; //your API Key
        $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.getYoutubeVideoID1($url).'&key='.$api_key;

        $data = json_decode(file_get_contents($api_url));
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        ?>
        <form action="#" method="POST">
        <input type="text" name="url" paceholder="Enter video url">
        <input type="submit" name="submit" value="submit">
        </form>


                <?php echo "Title: ".$data->items['0']->snippet->title."<br />";?>


                <?php echo "Views: ".$data->items['0']->statistics->viewCount."<br />";?>


                <?php echo "Likes: ".$data->items['0']->statistics->likeCount."<br />";?>


                <?php echo "Dislikes: ".$data->items['0']->statistics->dislikeCount."<br />";?>


                <?php echo "Comments: ".$data->items['0']->statistics->commentCount."<br />";?>








      </p>

    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Twitter Data</h5>
      <p class="card-text">
        <?php
        require_once('TwitterAPIExchange.php');
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
        'oauth_access_token' => "1333390387705229312-O5H0U54t5XbQn95y8v5LTnUn2Mh4Yp",
        'oauth_access_token_secret' => "g00laxkspvp3rtyiMRmJmbnglnJn7wklMhLsUAqh4YsCh",
        'consumer_key' => "6ZnziI0vKjs8MVr22zcrxMqtm",
        'consumer_secret' => "8Syj6vLM7z4BUORp19oX879I7MwMrePbuibWHKVzjDGDOqNOSY"
        );
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfield = '?screen_name=007&count=1';
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);
        if(array_key_exists("errors", $string)) {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
        /*echo "<pre>";
        print_r($string);
        echo "</pre>";
        */
        foreach($string as $items)
            {

                echo "Screen name: ". $items['user']['screen_name']."<br />";
                echo "Followers: ". $items['user']['followers_count']."<br />";
                echo "Friends: ". $items['user']['friends_count']."<br />";
                echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
            }

        ?>




      </p>

    </div>
  </div>
</div>


<br>
<br>
<br>

<!--card 2--------------------->

<div class="card-group">
  <div class="card">

    <img src="https://image.tmdb.org/t/p/w342/di1bCAfGoJ0BzNEavLsPyxQ2AaB.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Wonder Woman 1984 <br>
        <button><a href="movie.php?id=464052">View Details</a></button></h5>





    </div>
  </div>
  <div class="card">
    <!--<img src="..." class="card-img-top" alt="...">-->
    <div class="card-body">
      <h5 class="card-title">Facebook Data</h5>
      <p class="card-text">
        <p id="target"><span class="border border-light">https://www.youtube.com/watch?v=sfM7_JLk-84

        </p>
        </span>




        <div id="myOverlay" class="overlay">
          <!---<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
          <div class="overlay-content">
            <form action="/">
              <input type="text" class="url1" placeholder="Enter URL .." name="search">
              <button type="button" onclick="getShareCount();"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <!---<h2>Check Share Count</h2>--->
        <!--<button class="openBtn" onclick="openSearch()">CHECK NOW</button>-->
        <div class="result"></div>
        <script>

        function getShareCount(){
          url = $(".url").val();
          api_url = 'https://graph.facebook.com/v3.0/?id='+url+'&fields=og_object{engagement}&access_token=386520385950463|bd269cc590e947f02ed1bbbd3252f86c';
          $.ajax({
            url:api_url,
            type:'get',
            success:function(res){
              count = res.og_object.engagement.count;
              text = res.og_object.engagement.social_sentence;
              $(".result").html('<h3>'+count+' Shares<br>'+text+'</h3>');



            }
          });
        }
        </script>











      </p>

    </div>
  </div>
  <div class="card">
    <!--<img src="..." class="card-img-top" alt="...">-->
    <div class="card-body">
      <h5 class="card-title">YouTube Data</h5>
      <p class="card-text">
        https://www.youtube.com/watch?v=sfM7_JLk-84


        <?php
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            $url = $_POST['url'];


        }

        function getYoutubeVideoID2($url){

            $queryString = parse_url($url,PHP_URL_QUERY);
            parse_str($queryString,$params);
            // var_dump($queryString);
            // die();
            if(isset($params['v']) && strlen($params['v'])>0){
                return $params['v'];
            }else{
                return "Wrong youtube video url";
            }
        }
        $vidEoID = getYoutubeVideoID2($url);
        $api_key = "AIzaSyCqGM-ae9IbaulFRDuvT7Ngnni3EWYXujo"; //your API Key
        $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.getYoutubeVideoID2($url).'&key='.$api_key;

        $data = json_decode(file_get_contents($api_url));
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        ?>
        <form action="#" method="POST">
        <input type="text" name="url" paceholder="Enter video url">
        <input type="submit" name="submit" value="submit">
        </form>


                <?php echo "Title: ".$data->items['0']->snippet->title."<br />";?>


                <?php echo "Views: ".$data->items['0']->statistics->viewCount."<br />";?>


                <?php echo "Likes: ".$data->items['0']->statistics->likeCount."<br />";?>


                <?php echo "Dislikes: ".$data->items['0']->statistics->dislikeCount."<br />";?>


                <?php echo "Comments: ".$data->items['0']->statistics->commentCount."<br />";?>








      </p>

    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Twitter Data</h5>
      <p class="card-text">
        <?php
        require_once('TwitterAPIExchange.php');
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
        'oauth_access_token' => "1333390387705229312-O5H0U54t5XbQn95y8v5LTnUn2Mh4Yp",
        'oauth_access_token_secret' => "g00laxkspvp3rtyiMRmJmbnglnJn7wklMhLsUAqh4YsCh",
        'consumer_key' => "6ZnziI0vKjs8MVr22zcrxMqtm",
        'consumer_secret' => "8Syj6vLM7z4BUORp19oX879I7MwMrePbuibWHKVzjDGDOqNOSY"
        );
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfield = '?screen_name=WonderWomanFilm&count=1';
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);
        if(array_key_exists("errors", $string)) {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
        /*echo "<pre>";
        print_r($string);
        echo "</pre>";
        */
        foreach($string as $items)
            {

                echo "Screen name: ". $items['user']['screen_name']."<br />";
                echo "Followers: ". $items['user']['followers_count']."<br />";
                echo "Friends: ". $items['user']['friends_count']."<br />";
                echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
            }

        ?>




      </p>

    </div>
  </div>
</div>




</body>


</html>
