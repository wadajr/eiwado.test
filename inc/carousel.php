<?php
/**
 * The template for displaying Carousel
 * スライドショーテンプレート
 * 
*/
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
</ol>

	<div class="carousel-inner" role="listbox">

	<div class="item active">
	<img class="first-slide" src="<?php bloginfo('template_directory'); ?>/img/mv03.jpg" alt="First slide">
	<div class="container">
	<div class="carousel-caption">
	 <h1 class="title">情報品質向上を<br class="br-sp">すべての方へ</h1>
	 <p>簡単に、美しく、スピーディに<br class="br-sp">はじめるフレームワーク</p>
	 <p><a class="btn btn-primary" href="/philosophy/" role="button">フィロソフィ</a></p>
	</div>
	</div>
	</div>

	<div class="item">
	<img class="second-slide" src="<?php bloginfo('template_directory'); ?>/img/mv02.jpg" alt="Second slide">
	<div class="container">
	<div class="carousel-caption">
	 <h2 class="title">伝える舞台を<br class="br-sp">用意しました</h2>
	 <p>あとはいい写真と気のきいたコピーを<br class="br-sp">用意するだけです</p>
	 <p><a class="btn btn-primary" href="/starter/" role="button">デザインガイド</a></p>
	</div>
	</div>
	</div>

	</div><!-- /.carousel-inner-->

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>

</div><!-- /.myCarousel -->