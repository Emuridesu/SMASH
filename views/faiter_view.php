<!--はじまり-->
<html lang="ja">
<meta charset="UTF-8">
<title>スマブラまとめ情報</title>



<head>
<link rel="stylesheet" href="../app/css/smash.css" type="text/css">
<h1 class="TOP"><a href="index.php" >
    <img src="../app/img/TOP.png" width="100" height="50"></a>
    </h1>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--検索-->

    <!-- particles.js container -->
    <div id="particles-js"></div> 
<div id="wrapper">
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
 <!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    
</head>





<!-- ローディング画面 -->
<body>
 <!--メニュー-->  
 <div class="kuru">                                
<h1 class="logo"><a href="index.php"><img src="../app/img/051.png" alt="スマブラ" width=2000 height="500"><a href="smash.php"><img src="../app/img/051.png" alt="スマブラ"width=2000 height="500"></a></h1>

</div> 


 <!--ファイター一覧-->

<nav class="nav2">
<ul class="ul">
<p id="faiter"></p>
<?php foreach($charaids as $charaid) { ?> 
<li class="mario"><a href="detail.php?id=<?= h($charaid["id"])?>"><img src="../app/img/show (<?= h($charaid["id"])?>).jpg" alt="マリオ" width="200" height="113"></a></li>

<?php } ?>


</ul>
</nav>
<script type="text/javascript" src="js/smash.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-9/js/8-9.js"></script>

</body>
</html>
