<html lang="ja">
<meta charset="UTF-8">
<title>キャラランク</title>
<head>
<link rel="stylesheet" href="css/lank.css" type="text/css">
<?php require("_head_view.php")?>
</head>
<body>  
    

<!-- 
<section id="box1" class="box" data-section-name="About">

 <nav class="nav">
<div class="video-container">
    <video src="video/lank.mov" autoplay playsinline muted loop></video>
    <div class="video-sidebar">
      <h1>Title</h1>
      <p></p>
    </div>
  </div>
 </section> -->
     

</div>  
<!--ここまで-->
<!-- <div class="fade1in">

<section id="box2" class="box" data-section-name="Service">
<h2 class="rank"><img src="img/my-img.jpg" alt=""width="2550" ></h2>
 </section>


 <section id="box3" class="box" data-section-name="Access">
<h3 class="S"><img src="img/S charalank.png" alt=""width="2500" ></h3>
<section class="fade3in">
 </section>


<section id="box4" class="box" data-section-name="Contact">
<h4 class="lank"><img src="img/S.png" alt="" width="2550" height="1200"></h4>
 </section>
</div>
<h1 class="setumei1">すぐにフィットしたから</h1>

<h2 class="setumei2">このキャラ達は本当に使いやすかったです！
    特にデデデとホムヒカはすぐにVIP行きました！
    しかしどのキャラを使っても共通していることがあります！
    上手いプレイをマネすることです！
    そして攻撃を適当に振るのではなく、一個一個当てに行きましょう！
</h2> -->



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/6-1/js/6-1.js"></script>

 <script>
   var change_scale = {
       "container": 500,
       "percent": 1,
       "function": function() {
           "use strict";
           if (change_scale.percent === window.devicePixelRatio) {
               var scale = document.documentElement.clientWidth;
               scale = scale / change_scale.container;
               scale = "scale(" + scale + ")";
               document.body.style.transform = scale;
           } else {
               change_scale.percent = window.devicePixelRatio;
           }
       }
   };
   (function() {
       "use strict";
       if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
           if (window.devicePixelRatio !== 1) {
               alert("申し訳ございません。スタイルが崩れている可能性があります。恐れ入りますが、倍率を50%に変更後、リロードしてください。")
           }
       }
       change_scale.function();
   }());
   window.addEventListener("resize", function(event) {
       "use strict";
       change_scale.function();
   });
 </script>
 <!--ここまで-->
</nav>
    </body>
</html>