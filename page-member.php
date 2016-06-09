<?php
/*
Template Name: Page-member
 * 固定ページ
*/
?>
<?php get_header(); ?>

<style><?php // ジャンボトロン読み込み画像を用意 // ?>
.jumbotron {
  background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv03.jpg");
  background-position: center bottom;
  background-size: cover;
  height: 600px;
  }
.jumbotron .container {
  margin-top:100px;
  }
@media (max-width: 767px) {
.jumbotron {
  height: 400px;
}
}
a {text-decoration: none!important;} <?php // リンクアンダーライン取り消し // ?>
</style>
<div class="jumbotron">
<div class="container">
</div>
</div>

<?php include ('inc/navbar.php'); ?>

<div class="container" id="content"><!-- container ./ -->
<div class="row">
<div class="col-sm-12"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>
<h1 class="text-center mb40" style="margin-top:-80px;">スタッフ紹介</h1>



<div class="row">

<div class="col-xs-6 col-sm-3 text-center">
<a href="#anchor1">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
    <p style="line-height:0;margin-top:-7px;"><strong><small>Future Archives<br>ディレクター</strong><br>
<span class="glyphicon glyphicon-chevron-down"></span></a></p>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor2">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor3">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor4">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor5">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor6">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor7">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="col-xs-6 col-sm-3 text-center mb40">
<a href="#anchor8">
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
<strong><small>Future Archives<br>ディレクター</strong>
<br>
<span class="glyphicon glyphicon-chevron-down"></span></a>
</div>


</div><!-- /.row -->



<hr>




<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor1"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20"><small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small><br>
<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-1"><span class="glyphicon glyphicon-plus"></span></a><br><?php // モーダル-1 // ?>
</p>
<p class="mt20"><small>
公式サイト　<a href="#" target="_blank">#<span class="glyphicon glyphicon-new-window"></span></a>
</small></p>
</div>
</div>
<!-- Modal -->
<div id="myModal-1" class="modal fade" role="dialog"><?php // モーダル-1 // ?>
  <div class="modal-dialog"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Future Archives</h2>
		<p>ディレクター</p>
      </div>
      <div class="modal-body">
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor2"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small>
</p>
公式サイト　<a href="#" target="_blank">#<span class="glyphicon glyphicon-new-window"></span></a>
</div>
</div>



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor3"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small><br>
<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-2"><span class="glyphicon glyphicon-plus"></span></a><br><?php // モーダル-1 // ?>
</p>
</div>
</div>
<!-- Modal -->
<div id="myModal-2" class="modal fade" role="dialog"><?php // モーダル-2 // ?>
  <div class="modal-dialog"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Future Archives</h2>
		<p>ディレクター</p>
      </div>
      <div class="modal-body">
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
	  </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor4"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small><br>
<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-3"><span class="glyphicon glyphicon-plus"></span></a><br><?php // モーダル-1 // ?>
</p>
</div>
</div>
<!-- Modal -->
<div id="myModal-3" class="modal fade" role="dialog"><?php // モーダル-3 // ?>
  <div class="modal-dialog"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Future Archives</h2>
		<p>ディレクター</p>
      </div>
      <div class="modal-body">
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
	  </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor5"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small><br>
<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-4"><span class="glyphicon glyphicon-plus"></span></a><br><?php // モーダル-4 // ?>
</p>
公式サイト　<a href="#" target="_blank">#<span class="glyphicon glyphicon-new-window"></span></a>
</div>
</div>
<!-- Modal -->
<div id="myModal-4" class="modal fade" role="dialog"><?php // モーダル-4 // ?>
  <div class="modal-dialog"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Future Archives</h2>
		<p>ディレクター</p>
      </div>
      <div class="modal-body">
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor6"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small>
</p>
</div>
</div>



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor7"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small><br>
<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-5"><span class="glyphicon glyphicon-plus"></span></a><br><?php // モーダル-5 // ?>
</p>
公式サイト　<a href="#" target="_blank">#<span class="glyphicon glyphicon-new-window"></span></a>
</div>
</div>
<!-- Modal -->
<div id="myModal-5" class="modal fade" role="dialog"><?php // モーダル-5 // ?>
  <div class="modal-dialog"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Future Archives</h2>
		<p>ディレクター</p>
      </div>
      <div class="modal-body">
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
          <p>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん</p>
	  </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->



<hr>



<div class="row">
<div class="col-xs-5 col-sm-3"><a id="anchor8"></a><?php // アンカーリンク // ?>
<img class="img-responsive img-circle mb0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image-square.jpg" alt="portrait"><br>
</div>
<div class="col-xs-7 col-sm-3">
<p class="mt20"><strong>Future Archives<br>ディレクター</strong> <br>Future Archives<br>Director<br><xsmall> </xsmall>
</p>
</div>
<div class="col-xs-12 col-sm-6">
<p class="mt20">
<small>
いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせすん
</small>
</p>
</div>
</div>


</div>




</div><!-- /.content area  --> 
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>