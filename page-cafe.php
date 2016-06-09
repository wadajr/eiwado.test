<?php
/*
Template Name: Page-cafe
 * 固定ページ
*/
?>
<?php get_header(); ?>
<style>
body, html, .pickup, {background-color:#1c232d!important;color:#FFF3F9;}
img{border:#000!important;}
</style>
<?php include ('inc/navbar.php'); ?>
<div class="container" id="content"><!-- container ./ -->


<div class="row">
<div class="col-sm-8 col-sm-push-2"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>
<p class="text-center" style="font-weight:900;font-size:60px;"><span class="glyphicon glyphicon-cutlery"></p>
<h1 style="display:none;">喫茶</h1>
<p class="lead text-center">ゆったりと流れる時間をお過ごしください</p>
</div>
</div>



  <div class="row no-gutter index-list mt40">

    <div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Hot Sand</h2>
	<div class="copy">
	<p class="small">ホットサンド</p>
	<p class="small">シングル（食パン1枚:2ピース）¥300〜<br>
	ダブル（食パン2枚:4ピース）¥500〜<br>
	コーヒーセット（プラス¥300）※</p>
	</div>
	</div>

    <div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Drink</h2>
	<div class="copy">
	<p class="small">お飲み物</p>
	<p class="small">コーヒー・紅茶・ブレンド　¥400<br>
	カフェオレ　¥500<br>
	アイスコーヒー　¥400<br>
	紅茶　¥480<br>
	コカ・コーラ　¥300<br>
	サイダー　¥300<br>
	オレンジジュース　¥300<br>
	ウーロン茶　¥300</p>
	<p class="small">
	ビール（スーパードライ/レーベンブロイ/黒ビール） ¥500<br>
	アイリッシュコーヒー　¥500</p>
	</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Dessert</h2>
	<div class="copy">
    <p class="small">デザート</p>
	<p class="small">ワッフル　¥400<br>
	コーヒーセット（プラス¥350）※</p>
	</div>
	</div>

  </div>




  <div class="row no-gutter index-list mt40">

    <div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Hot Sand</h2>
	<div class="copy">
	<p class="small">ホットサンド</p>
	<p class="small">シングル（食パン1枚:2ピース）¥300〜<br>
	ダブル（食パン2枚:4ピース）¥500〜<br>
	コーヒーセット（プラス¥300）※</p>
	</div>
	</div>

    <div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Drink</h2>
	<div class="copy">
	<p class="small">お飲み物</p>
	<p class="small">コーヒー・紅茶・ブレンド　¥400<br>
	カフェオレ　¥500<br>
	アイスコーヒー　¥400<br>
	紅茶　¥480<br>
	コカ・コーラ　¥300<br>
	サイダー　¥300<br>
	オレンジジュース　¥300<br>
	ウーロン茶　¥300</p>
	<p class="small">
	ビール（スーパードライ/レーベンブロイ/黒ビール） ¥500<br>
	アイリッシュコーヒー　¥500</p>
	</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12 pickup">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/>
	<h2 class="title">Dessert</h2>
	<div class="copy">
    <p class="small">デザート</p>
	<p class="small">ワッフル　¥400<br>
	コーヒーセット（プラス¥350）※</p>
	</div>
	</div>

  </div>

    
    
<p class="small text-center">※セットドリンクはブレンド・カフェオレ・アイスコーヒー・紅茶からお選びいただけます。</p>







</div><!-- /.col-sm-9 -->
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>


