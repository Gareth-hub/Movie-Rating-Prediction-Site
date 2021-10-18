<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<!-------------------
<style>
body {
  font-family: Arial;
}
* {
  box-sizing: border-box;
}
.openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}
.openBtn:hover {
  background: #bbb;
}
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}
.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}
.overlay .closebtn:hover {
  color: #ccc;
}
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}
.overlay input[type=text]:hover {
  background: #f1f1f1;
}
.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.overlay button:hover {
  background: #bbb;
}
.result h3{
  color:#fff;
  background:green;
}
</style>
--------------------->
</head>
<body>
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



</body>
</html>
