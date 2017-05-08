<!DOCTYPE html>
<html>
<title>Baozi Boom</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#div1").hide();
     
    });
     $("#show").click(function(){
        $("#div1").show();
      
    });
});
</script>
<style>
body {
    font-family: "Lato", sans-serif;
    }
.autoplay{
    display: none;
    } 

    h1{
        color:crimson;
        font-family:bolder;
        font-size:155;
        text-align:center;
        margin-right: 25%;
        margin-top: 30%;
    }
    #back{
    background: url(images/bimohua.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    overflow: hidden;
        opacity:0.7;
    }

</style>
</head>
    <?php
    session_start();
    if(!isset($_COOKIE['logged']))
    {
    ?>
    <div id="back" style="height:700px;width:100%">
     <center><h1>You must log in to see the content.</h1>
        <h1>Press<a href="index.php">HERE</a>to log in.</h1>
        </center>
    </div>
      <?php
        exit;
    }
?>
<body>
    
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>

    <a href="#baozi" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CATEGORY</a>
    <a href="#video" class="w3-bar-item w3-button w3-padding-large w3-hide-small">VIDEO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <a href = "logout.php" class = "w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" >Log Out</a>

    </div>
  
</div>



<div id="nav" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#baozi" class="w3-bar-item w3-button w3-padding-large">Baozi</a>
  <a href="#video" class="w3-bar-item w3-button w3-padding-large">Video</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:50px">

  <div class="autoplay w3-display-container w3-center">
    <img src="images/xiao_long_bao.jpg" style="width:100%;height:700px">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Xiao Long Bao</h3>
      <p><b>鼎泰丰小笼包</b></p>   
    </div>
  </div>
  <div class="autoplay w3-display-container w3-center">
    <img src="images/gou_bu_li2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Gou Bu Li</h3>
      <p><b>狗不理包子</b></p>    
    </div>
  </div>
  <div class="autoplay w3-display-container w3-center">
    <img src="images/bao01.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Cha Siu Bao</h3>
      <p><b>叉烧包</b></p>    
    </div>
    </div>
    <div class="autoplay w3-display-container w3-center">
    <img src="images/shao_mai1.JPG" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Shao Mai</h3>
      <p><b>烧卖</b></p>    
    </div>
  </div>
    </div>
    
<!--baozi-->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="baozi">
    <h2 class="w3-wide">THE Baozi</h2>
    <p class="w3-opacity"><i>Do you really know Baozi?</i></p>
    <p class="w3-justify">A baozi (Chinese: About this sound 包子) or simply known as bao, bau, humbow, nunu, bakpao (Hokkien), bausak, pow, pau or pao (Hakka) is a type of steamed, filled, bun[1] or bread-like (i.e. made with yeast) item in various Chinese cuisines, as there is much variation as to the fillings and the preparations. In its bun-like aspect it is very similar to the traditional Chinese mantou. It can be filled with meat and/or vegetarian fillings.</p>
      
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="images/cha_siu_bao.jpg" alt="chasiu" style="width:100%;height:150px">
      <h3>Cha Siu Bao</h3>
      <p>Filled with barbecue-flavoured char siu pork; typical of Cantonese cuisine (Guangdong province and Hong Kong)</p>
    </div>
    <div class="w3-quarter">
      <img src="images/gou_bu_li.jpg" alt="gou_bu_li" style="width:100%;height:150px">
      <h3>Gou Bu Li</h3>
      <p>A well known brand of meat-filled baozi considered characteristic of Tianjin, Northern China; </p>
    </div>
    <div class="w3-quarter">
      <img src="images/nai_huang_bao.jpg" alt="nai" style="width:100%;height:150px">
      <h3>Nai Huang Bao</h3>
      <p>Filled with sweet yellow custard filling.</p>
      
    </div>
    <div class="w3-quarter">
      <img src="images/rou_bao.jpg" alt="roubao" style="width:100%;height:150px">
      <h3>Rou Bao</h3>
      <p>Filled with pork.</p>
    </div>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="images/dou_sha_bao.jpg" alt="dousha" style="width:100%;height:150px">
      <h3>Dou Sha Bao</h3>
      <p>Filled with red bean.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/tang_bao.jpg" alt="tang" style="width:100%;height:150px">
      <h3>Tang Bao</h3>
      <p>A large soup-filled baozi from Yangzhou drunk through a straw;</p>
    </div>
    <div class="w3-quarter">
      <img src="images/shao_bao.jpg" alt="shao" style="width:100%;height:150px">
      <h3>Shao Bao</h3>
      <p>Filled with pork, shrimp, or chicken. Even .</p>
    </div>
    <div class="w3-quarter">
      <img src="images/gua_bao.jpg" alt="gua" style="width:100%;height:150px">
      <h3>Gua Bao</h3>
      <p>Originated as Taiwanese street food. Unlike other types of Bao, Gua Bao is made by folding over the flat steamed dough and is thus open.</p>
    </div>
  </div>

<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="images/bao_sa.jpg" alt="baosa" style="width:100%;height:150px">
      <h3>Bao Sa</h3>
      <p>Well-known brand based in China famous for their fusion baozi, which are steamed and filled with a variety of pizza toppings.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/shui_jian_bao.JPG" alt="shuijian" style="width:100%;height:150px">
      <h3>Shui Jian Bao</h3>
      <p>Very similar to xiaolongbao, but pan-fried instead of steamed.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/shao_mai.jpg" alt="shaomai" style="width:100%;height:150px">
      <h3>Shao Mai</h3>
      <p>For meats roasted on spits over an open fire or a huge wood burning rotisserie oven.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/tang_san_jiao.jpg" alt="tangsanjiao" style="width:100%;height:150px">
      <h3>Tang San Jiao</h3>
      <p>Filled with sugar.</p>
    </div>
  </div>
     
      <button id="hide">To hide the photo</button>
      <button id="show">To show more</button>
      <div id="div1" class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="images/su_bao_zi.jpg" alt="su" style="width:100%;height:150px">
      <h3>Su Bao Zi</h3>
      <p>Filled with vegetables.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/ya_cai_bao.jpg" alt="yacai" style="width:100%;height:150px">
      <h3>Ya Cai Bao</h3>
      <p>steamed, filled with a type of pickle, spices and possibly other vegetables or meat, common in Sichuan, China.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/zhan_dou_bao.jpg" alt="zhandou" style="width:100%;height:150px">
      <h3>Zhan Dou Bao</h3>
      <p>Sticky bean bag is a food from Manchuria . Manchu people often like sticky food, is conducive to a long time in the cold weather for outdoor activities, such as hunting and so on. In the northeastern region of China is very common.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/han_bao_zi.jpeg" alt="han" style="width:100%;height:150px">
      <h3>Han Bao Zi</h3>
      <p>Raw materials special flour, fat pork, lard and so on a variety of spices. Thin skin white, clear lines, filling heart delicate, soft and delicious slag delicious.</p>
    </div>
  </div>
</div>
    <!--video-->
  <div class="w3-black" id="video">
    <div class="w3-container w3-content w3-padding-65px" style="max-width:800px">

    <div class="w3-left" style="margin:10 20px">
        <h3>How to Assemble a Baozi</h3>
          </div>
    <video autoplay loop width = 100% height =100%> <source src="videos/video1.mp4" type = "video/mp4" >
    </video>
      </div>
      </div>
 
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>A HUGE FUN OF BAOZI</i></p>
    <div class="w3-center">
      <div class="info">
        <i class="name" style="width:150px"> </i> Author: Xiao Liu <br>
        <i class="fa fa-map-marker center" style="width:25px"></i> Columbia.MO<br>
        <i class="email" style="width:30px"> </i> Email: lxmongo@gmail.com<br>
        <img src="images/baozi-ca.jpg" alt="bao" style="height:75px">
        </div>        
      </div>

    </div>

<script>
var num = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("autoplay");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    num++;
    if (num > x.length) {num = 1}    
    x[num-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}

function myFunction() {
    var x = document.getElementById("nav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

