<?php
/**
 * Template Name: page-parallax
 * 固定ページ
 * パララックステンプレート
 * 用意した背景画像をcss内に記載し、画像フォルダ内の画像を同名で上描きましょう。
 * カラーを.color-nameのかたちで用意しましょう。初期テーマでは、bootstrap.lessに記述しています。
 * 6つのエリアまでを記述しています。エリアは記載に習って増減することができます。
 */
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<style>/* Parallax style */body, html{ height: 100%;}
.cd-fixed-bg.cd-bg-concert-1 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv01.jpg");}
.cd-fixed-bg.cd-bg-concert-2 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv02.jpg");}
.cd-fixed-bg.cd-bg-concert-3 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv03.jpg");}
.cd-fixed-bg.cd-bg-concert-4 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg");}
.cd-fixed-bg.cd-bg-concert-5 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv01.jpg");}
.cd-fixed-bg.cd-bg-concert-6 {background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv02.jpg");}
.photo-caption {text-align:right; font-size:1.1em; margin-top:-90px; padding-right:100px;}
@media (max-width: 767px) {.photo-caption {font-size:0.8em; margin-top:-25px; padding-right:30px;}}
</style>
<?php if(!wp_is_mobile()): // モバイル端末の時はパララックスを止める） ?>
<style>/* Parallax style */.cd-fixed-bg {background-attachment:fixed;}</style>
<?php endif; ?>

<main class="cd-main-content">

	<div class="cd-fixed-bg cd-bg-concert-1"><?php // 1枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	</div> <!-- cd-fixed-bg -->
	<div class="cd-scrolling-bg color-kofun"><?php // 背景色（CSSで指定） // ?>
	<p class="photo-caption">Photo: Future Archives </p>
	<div class="cd-container">

<div class="row">
<div class="col-sm-10 col-sm-push-1"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>


<div class="text-center">
<span class="serif large">Future Archives Concert Series</span>
<h1 class="serif mt0">Future Archives Concert 2016</small></h1>
<p>
XX月XX日(日) コンサート<br>
XX月XX日(祝) コンサート<br>
XX月XX日(土) コンサート<br>
<span class="label small label-success">ご来場いただきありがとうございました。</span>
</p>
<p>Future Archives Concert Series<br>
April XXnd - XXth, 2016</p>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor1">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>アンカーリンク１</small></strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor2">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>アンカーリンク２</small></strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor3">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>アンカーリンク３</small></strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor4">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>アンカーリンク４</small></strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

</div> <!-- col -->
</div> <!-- row -->


	</div> <!-- cd-container -->
	</div> <!-- cd-scrolling-bg -->
	<div class="cd-fixed-bg cd-bg-concert-2"><?php // 2枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	</div> <!-- cd-fixed-bg -->
	<div class="cd-scrolling-bg color-byakuroku"><?php // 背景色（CSSで指定） // ?>
	<p class="photo-caption">Photo: Future Archives </p>
	<div class="cd-container">


<div class="row">
<div class="col-sm-10 col-sm-push-1"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<div class="text-center"><a id="anchor1"></a>
<p class="small">コンサート</p>
<h2 class="serif mt0">Future Archives Concert 2016</h2>
<p><strong>
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
つねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす。<br class="br-pc">
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
</strong></p>
</div>
<p>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
</p>

<table class="table">
<tbody>
 <tr>
 <th width="80">日時</th>
 <td>XXXX（日）14：30開場 15：00開演</td>
 </tr>
 <tr>
 <th>会場</th>
 <td>いろはにほへとちりぬるをわかよたれそ<br>
	 いろはにほへとちりぬるをわかよたれそ
	 <a target="_blank" href="#">MAP<span class="glyphicon glyphicon-new-window"></span></a>
 </td>
 </tr>
 <tr>
 <th>出演</th>
 <td>いろはにほへとちりぬるをわかよたれそ</td>
 </tr>
 <tr>
 <th>曲目</th>
 <td><small>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす 
 </small></td>
 </tr>
 <tr>
 <th>料金</th>
 <td>全席自由 ¥000(税込) </td>
 </tr>
 <tr>
 <th>チケット</th>
 <td><span class="label small label-danger">完売御礼</span></td>
 </tr>
</tbody>
</table>

<ul class="small">
  <li>いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
</li>
</ul>

</div> <!-- col -->
</div> <!-- row -->


	</div> <!-- cd-container -->
	</div> <!-- cd-scrolling-bg -->
	<div class="cd-fixed-bg cd-bg-concert-3"><?php // 3枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	</div> <!-- cd-fixed-bg -->
	<div class="cd-scrolling-bg color-kihada"><?php // 背景色（CSSで指定） // ?>
	<p class="photo-caption">Photo: Future Archives </p>
	<div class="cd-container">


<div class="row">
<div class="col-sm-10 col-sm-push-1"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<div class="text-center"><a id="anchor2"></a>
<p class="small">コンサート</p>
<h2 class="serif mt0">Future Archives Concert 2016</h2>
<p><strong>
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
つねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす。<br class="br-pc">
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
</strong></p>
</div>
<p>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
</p>

<table class="table">
<tbody>
 <tr>
 <th width="80">日時</th>
 <td>XXXX（日）14：30開場 15：00開演</td>
 </tr>
 <tr>
 <th>会場</th>
 <td>いろはにほへとちりぬるをわかよたれそ<br>
	 いろはにほへとちりぬるをわかよたれそ
	 <a target="_blank" href="#">MAP<span class="glyphicon glyphicon-new-window"></span></a>
 </td>
 </tr>
 <tr>
 <th>出演</th>
 <td>いろはにほへとちりぬるをわかよたれそ</td>
 </tr>
 <tr>
 <th>曲目</th>
 <td><small>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす 
 </small></td>
 </tr>
 <tr>
 <th>料金</th>
 <td>全席自由 ¥000(税込) </td>
 </tr>
 <tr>
 <th>チケット</th>
 <td><span class="label small label-danger">完売御礼</span></td>
 </tr>
</tbody>
</table>

<ul class="small">
  <li>いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
</li>
</ul>

</div> <!-- col -->
</div> <!-- row -->


	</div> <!-- cd-container -->
	</div> <!-- cd-scrolling-bg -->
	<div class="cd-fixed-bg cd-bg-concert-4"><?php // 4枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	</div> <!-- cd-fixed-bg -->
	<div class="cd-scrolling-bg color-taikoh"><?php // 背景色（CSSで指定） // ?>
	<p class="photo-caption">Photo: Future Archives </p>
	<div class="cd-container">


<div class="row">
<div class="col-sm-10 col-sm-push-1"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<div class="text-center"><a id="anchor3"></a>
<p class="small">コンサート</p>
<h2 class="serif mt0">Future Archives Concert 2016</h2>
<p><strong>
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
つねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす。<br class="br-pc">
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
</strong></p>
</div>
<p>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
</p>

<table class="table">
<tbody>
 <tr>
 <th width="80">日時</th>
 <td>XXXX（日）14：30開場 15：00開演</td>
 </tr>
 <tr>
 <th>会場</th>
 <td>いろはにほへとちりぬるをわかよたれそ<br>
	 いろはにほへとちりぬるをわかよたれそ
	 <a target="_blank" href="#">MAP<span class="glyphicon glyphicon-new-window"></span></a>
 </td>
 </tr>
 <tr>
 <th>出演</th>
 <td>いろはにほへとちりぬるをわかよたれそ</td>
 </tr>
 <tr>
 <th>曲目</th>
 <td><small>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす 
 </small></td>
 </tr>
 <tr>
 <th>料金</th>
 <td>全席自由 ¥000(税込) </td>
 </tr>
 <tr>
 <th>チケット</th>
 <td><span class="label small label-danger">完売御礼</span></td>
 </tr>
</tbody>
</table>

<ul class="small">
  <li>いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
</li>
</ul>

</div> <!-- col -->
</div> <!-- row -->


	</div> <!-- cd-container -->
	</div> <!-- cd-scrolling-bg -->
	<div class="cd-fixed-bg cd-bg-concert-5"><?php // 5枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	</div> <!-- cd-fixed-bg -->
	<div class="cd-scrolling-bg color-kamenozoki"><?php // 背景色（CSSで指定） // ?>
	<p class="photo-caption">Photo: Future Archives </p>
	<div class="cd-container">


<div class="row">
<div class="col-sm-10 col-sm-push-1"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<div class="text-center"><a id="anchor4"></a>
<p class="small">コンサート</p>
<h2 class="serif mt0">Future Archives Concert 2016</h2>
<p><strong>
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
つねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす。<br class="br-pc">
いろはにほへとちりぬるをわかよたれそ。<br class="br-pc">
</strong></p>
</div>
<p>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
</p>

<table class="table">
<tbody>
 <tr>
 <th width="80">日時</th>
 <td>XXXX（日）14：30開場 15：00開演</td>
 </tr>
 <tr>
 <th>会場</th>
 <td>いろはにほへとちりぬるをわかよたれそ<br>
	 いろはにほへとちりぬるをわかよたれそ
	 <a target="_blank" href="#">MAP<span class="glyphicon glyphicon-new-window"></span></a>
 </td>
 </tr>
 <tr>
 <th>出演</th>
 <td>いろはにほへとちりぬるをわかよたれそ</td>
 </tr>
 <tr>
 <th>曲目</th>
 <td><small>
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす
いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす 
 </small></td>
 </tr>
 <tr>
 <th>料金</th>
 <td>全席自由 ¥000(税込) </td>
 </tr>
 <tr>
 <th>チケット</th>
 <td><span class="label small label-danger">完売御礼</span></td>
 </tr>
</tbody>
</table>

<ul class="small">
  <li>いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせす</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
  <li>いろはにほへとちりぬるをわかよたれそつねならむ</li>
</li>
</ul>

</div> <!-- col -->
</div> <!-- row -->


	</div> <!-- cd-container -->
	</div> <!-- cd-scrolling-bg -->
	<div class="cd-fixed-bg cd-bg-concert-6"><?php // 6枚目の背景写真（CSSで指定） // ?>
	<?php // メッセージエリア // ?>
	<!--<h2>Lorem ipsum dolor sit amet.</h2>-->
	</div> <!-- cd-fixed-bg -->

<div class="cd-fixed-bg cd-last">
<?php get_footer(); ?>
</div> <!-- cd-fixed-bg -->
</main> <!-- cd-main-content -->