<?php
/*
Template Name: Page-philosophy
 * 固定ページ
*/
?>
<?php get_header(); // ヘッダ読み込み //?>
<?php include ('inc/navbar.php'); // ナビゲーション読み込み // ?>


<style><?php // ジャンボトロン読み込み画像を用意 // ?>
.jumbotron {
  background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg");
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
</style>
<div class="jumbotron">
<div class="container">
  <h1>ちゃんと伝えることができる<br>魅力的な舞台を用意しよう</h1>
  <p>Future Archives スターターキット</p>
</div>
</div>


<div id="content"><!-- content area ./ -->
<div class="container"><!-- container ./ -->
<?php include ('inc/inc-social-all.php'); // ソーシャルパーツ読み込み // ?>
</div>
</div>


<div class="container-fluid"><?php // 全幅表示 // ?>
  <div class="row no-gutter color-sakura">
	  <div class="col-xs-12 col-sm-8 col-sm-push-2 pd50">
	  <h2>中小企業・NPOサイト向けフレームワーク</h2>
	  <p class="lead">DIY感覚で、地域への提供や共同開発をはじめます。さっといいものをつくりたいから、勝手に品質向上委員会。</p>
	  <p>設計プロセスを変えていく。発想から運用まで、距離をぎゅっと縮める。大きな案件の進め方だって変えていきます。<br>
	  「なんとなくわかるけど組んだことはない」という方でも扱いやすいスターターキット。Bootstrap＋Wordpressで組んでいます。公式配布は準備中。使ってみたい方、一緒に開発してみたい方は <a href="https://www.facebook.com/tomoya.nitoube" target="_blank">Facebookメッセージ</a> をお送りください。規模・ジャンルを問いません。</p> 
	  <p><a class="btn btn-primary" href="http://revision.2-d.jp/about/" role="button" target="_blank">開発者プロフィール・ブログ<span class="glyphicon glyphicon-new-window"></span></a></p>
	  </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row no-gutter color-kihada">
      <div class="col-sm-6 col-xs-12"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg" alt="img" width="100%" height="450px"></div>
	  <div class="col-sm-6 col-xs-12 pd50">
      <h3>ルールの中で未完成と自由を楽しもう</h3>
      <p>設計フローと開発フローをギュッと詰めていきます。職人の仕事が口伝し、構法として成立するように、考えや技術を再構成した上で組み上げていく。基本的な技術は揃いました。ざっとつくっりましょう。時間を付加価値の向上や本質の発信に費やすためべきです。</p>
	  </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row no-gutter color-awabenifuji">
	  <div class="col-sm-7 col-xs-12 pd50">
      <h3>みんなで粘土をこねるようにつくりあげる</h3>
      <p>編集・設計・デザイン・プロトタイピング・開発・納品・運用。様々な問題や状況を同時に考えながらつくり込んでいきます。品質担保のフォーマットをスタートとすることで、設計者、デザイナー、開発者のスキルを共有化し、拡張していきます。</p> 
	  </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row no-gutter color-kamenozoki">
      <div class="col-sm-6 col-xs-12"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg" alt="img"  width="100%" height="450px"></div>
	  <div class="col-sm-6 col-xs-12 pd50">
      <h3>ユーザビリティの品質保証で業界の底上げを</h3>
      <p>共通課題を個別に解いているようだと、全体の品質があがりません。大手企業向けのコントロールやフローだと業々しすぎます。一方中小ではノールールの様相も。ネットはリアルの縮図。よくできたフレームワークから始められることがあるはずです。</p>
	  </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row no-gutter color-byakuroku">
	  <div class="col-sm-6 col-xs-12 pd50">
      <h3>設計から公開までを見越したパッケージ</h3>
      <p>明快な構造だから、スケッチ感覚でつくることから始めます。ブログなら即日公開も。さっとつくりましょう。パワポからじゃない、キーノートからでもない。設計・デザイン・制作のプロセスを変えて制作進行も直感的なものにすることを目指します。</p>
	  </div>
      <div class="col-sm-6 col-xs-12"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg" alt="img"  width="100%" height="450px"></div>
  </div>
</div>


<div class="container-fluid">
  <div class="row no-gutter color-torinoko">
	  <div class="col-xs-12 col-sm-8 col-sm-push-2 pd50">
      <h3>環境変化に強い拡張性</h3>
      <p>オープンで成長力のあるライブラリを元にしています。使える素材は世界中で日々用意されています。BootstrapもWordpressもググれば、ほら、答えがあります。柔軟な運用と絶妙なカスタマイズを主眼に、バージョンアップを行います。公開やリフォームははじまり。次世代への変化を歓迎し、最新技術に取り組みます。</p> 
	  </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row no-gutter color-tomekon">
      <div class="col-sm-5"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/lesswhite.png" alt="img" width="100%" class="mt40"></div>
	  <div class="col-sm-7 pd50">
	  <h3 class="mt0">つくり方を“Dynamic”に変える</h3>
	  <p>Less・SassによるCSSコーディングが効率的なのは開発者だけのものではありません。デザイン思想を直接反映しやすい構造として、思考として、拡張していきます。</p>
	  </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row no-gutter" style="border-top:1px solid #cfd8dc;border-bottom:1px solid #cfd8dc;">
	  <div class="col-sm-8 col-sm-push-2 col-xs-12 pd50">
	  <h3>ガイドラインも仕様書も同時に生成です</h3>
	  <p>ユーザビリティとアクセシビリティはつくり手の最低限のマナー。規模が大きい1000ページものも、１ページも、基本の押さえどころは同じです。W3C準拠やWCAG 2.0への対応も行けるところまでオートメーション化<sup>*</sup>で取り組んでいきます。</p>
	  <p class="small">LessやSassをGUIで編集するアプリ開発やコード・デザインの整理を行うことのできる方を募集します。現状、スターターキットの開発環境は、Bootstrapを素材に、<a href="https://panic.com/jp/coda/" target="_blank">Coda<span class="glyphicon glyphicon-new-window"></span></a> でのコーディング、 <a href="https://www.zennaware.com/cornerstone/index.php" target="_blank">Cornerstone<span class="glyphicon glyphicon-new-window"></span></a> でのDiff監理、 <a href="https://prepros.io/" target="_blank">Prepros<span class="glyphicon glyphicon-new-window"></span></a> でのコンパイルによって作成しています。</p>
	  </div>
  </div>
</div>


<div class="clarfix"><?php // 全幅画像表示 // ?>
      <div class="col-xs-12 pd0"><img class="full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mv04.jpg" alt="img"></div>
</div>



<?php get_footer(); ?>