<!--はじまり-->
<html lang="ja">
<meta charset="UTF-8">
<title>スマブラまとめ情報</title>


<head>

<header>
    <?php require ("_header_view.php")?>
</header>
<link rel="stylesheet" href="../app/css/smash.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!--検索-->

<!-- <div id="wrapper">

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
     -->
</head>
<body>
    
 <!--メニュー-->  



<div class="kuru">                                
<h1 class="logo"><a href="index.php"><img src="../app/img/051.png" alt="スマブラ" width=2000 height="500"><a href="index.php"><img src="../app/img/051.png" alt="スマブラ"width=2000 height="500"></a></h1>
</div> 

<h3 class="h3"><a href="index.php"><img src="../app/img/logo.png" alt=""></a></h3>

<ul class="menu-1">
    <li class="menu-about"><a href="about.php"><img src="../app/img/S.png" alt="" width="120" height="120"></a></h4>
    <li class="menu-combo"><a href="combo.php"><img src="../app/img/sephiroth.png" alt="" width="120" height="120"></a></h4>
    <li class="menu-faiter"><a href="faiter.php"><img src="../app/img/faiter.png" alt="" width="120" height="120"></a></h4>
</ul>
<ul class="menu-2">
    <li class="menu-talk"><a href="talk.php"><img src="../app/img/talk.jpg" width="120" height="120"></a></h3>
    <li class="menu-info"><a href="toi.php"><img src="../app/img/info.png" width="120" height="120"></a></h4>
    <li class="menu-lank"><a href="lank.php"><img src="../app/img/charalank.png" alt="" width="120" height="120"></a></h4>
</ul>

 <!--ファイター一覧-->

<nav class="nav">
<ul class="ul">
<p id="faiter"></p>
<?php foreach($charaids as $charaid) { ?> 
<li class="watermark"><a href="../app/detail.php?id=<?= h($charaid["id"])?>"><img src="../app/img/show (<?= h($charaid["id"])?>).jpg" alt="マリオ" width="200" height="113"></a></li>

<?php } ?>


</ul>
</nav>
<script type="text/javascript" src="js/smash.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-9/js/8-9.js"></script>

</body>
</html>
