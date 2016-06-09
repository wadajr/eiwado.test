<?php
/*
Template Name: Page-kit
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
  <h1>デザインガイド ver. 0.1</h1>
  <p>FUTURE ARCHIVES スターターキット</p>
</div>
</div>


<div id="content"><!-- content area ./ -->
<div class="container"><!-- container ./ -->
<?php include ('inc/inc-social-all.php'); // ソーシャルパーツ読み込み // ?>

    
<div class="table-responsive">
<table class="table table-striped">
    <thead>
      <tr>
        <th colspan="3">モジュール</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><a href="#anchor1">Based on Bootstrap &amp; Wordpress</a></td>
        <td><small>今よりも簡単に、美しく、スピーディに立ち上げよう。</small></td>
      </tr>
      <tr>
        <td>2</td>
        <td><a href="#anchor2">Colors</a></td>
        <td><small>メインの3〜5色を決めるだけ。あとは自動配色*です。</small></td>
      </tr>
      <tr>
        <td>3</td>
        <td><a href="#anchor3">Grid</a></td>
        <td><small>スマホもPCも、幅を足したらすべて“12”でした。</small></td>
      </tr>
      <tr>
        <td>4</td>
        <td><a href="#anchor4">Text</a></td>
        <td><small>美しく見ていただきたいから、ウェブフォント入れました。</small></td>
      </tr>
      <tr>
        <td>5</td>
        <td><a href="#anchor5">Table</a></td>
        <td><small>レスポンシブにしたい？ "table-responsive" で囲うだけ。</small></td>
      </tr>
      <tr>
        <td>6</td>
        <td><a href="#anchor6">Images</a></td>
        <td><small>画像加工も最小限に。</small></td>
      </tr>
      <tr>
        <td>7</td>
        <td><a href="#anchor7">Panels / Alerts / List Group</a></td>
        <td><small>要点・注意書きを見せる塗りと枠。</small></td>
      </tr>
      <tr>
        <td>8</td>
        <td><a href="#anchor8">Button</a></td>
        <td><small>ボタン</small></td>
      </tr>
      <tr>
        <td>9</td>
        <td><a href="#anchor9">Badges / Labels</a></td>
        <td><small>バッジ・ラベル</small></td>
      </tr>
      <tr>
        <td>10</td>
        <td><a href="#anchor10">Modal</a></td>
        <td><small>モーダル</small></td>
      </tr>
      <tr>
        <td>11</td>
        <td><a href="#anchor11">Dropdown / Collapse</a></td>
        <td><small>ドロップダウン・開閉メニュー</small></td>
      </tr>
      <tr>
        <td>12</td>
        <td><a href="#anchor12">Tabs/Pills</a></td>
        <td><small>タブ</small></td>
      </tr>
      <tr>
        <td>13</td>
        <td><a href="#anchor13">Pager</a></td>
        <td><small>ページャー</small></td>
      </tr>
	</tbody>
</table>
</div>    
    
    
    
    
    
    
<hr>


<div class="row">

<div class="col-sm-3">
<div class="hero-booticon">B</div>
<p class="text-center"><img class="reset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/wp.png" height="150" alt="less"></p>
</div>

<div class="col-sm-9">
<span class="xbold"><a id="anchor1"></a>Based on Bootstrap &amp; Wordpress</span>
<h2>今よりも簡単に、美しく、スピーディに立ち上げよう。</h2>
<p>デザインは組み合わせの妙。サービスは既に揃っています。BootstrapとWordPressを情報設計目線でカスタマイズしていきます。かんたんをもっとカンタンに、もっと美しく。ノウハウを惜しみなく詰め込んでいくスターターキットです。</p>

<p class="small">
<strong>Bootstrap</strong><br>
ブートストラップは、Twitter社のエンジニアとデザイナーによって構築されたフレームワーク。HTMLをなんとなく読める人にはより便利に、より速く開発できるように組まれています。<br>
<strong>WordPress</strong><br>
ワードプレスはフォーラムや公開情報の充と、導入のしやすさ、オープンな拡張性から世界中で導入されています。無数のテーマが世界にあるのですが、コレだというのにはなかなか出会えません。
</p>

</div>
</div>


<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-20px;"></span></a>
<hr>


<span class="xbold"><a id="anchor2"></a>Colors カラー</span>
<h2>メインの3〜5色を決めるだけ。あとはLESSで自動配色<sup>*</sup>。</h2>
<div class="row">
<div class="col-sm-9">
<div class="table-responsive">
<table class="table table-nonbordered">
    <tbody>
      <tr>
        <td><div class="color color01"></div></td>
        <td><div class="color color07"></div></td>
        <td><div class="color color04"></div></td>
        <td><div class="color color06"></div></td>
        <td><div class="color color19"></div></td>
		<td colspan="2"><span class="glyphicon glyphicon-arrow-right" style="font-size:50px;color:black;margin-top:5px;"></span></td>
      </tr>
      <tr>
        <td><div class="color color02"></div></td>
        <td><div class="color color03"></div></td>
        <td><div class="color color08"></div></td>
        <td><div class="color color09"></div></td>
        <td><div class="color color10"></div></td>
        <td><div class="color color11"></div></td>
        <td><div class="color color12"></div></td>
      </tr>
      <tr>
        <td><div class="color color13"></div></td>
        <td><div class="color color05"></div></td>
        <td><div class="color color14"></div></td>
        <td><div class="color color15"></div></td>
        <td><div class="color color16"></div></td>
        <td><div class="color color17"></div></td>
        <td><div class="color color18"></div></td>
      </tr>
      <tr>
        <td><div class="color color20"></div></td>
        <td><div class="color color21"></div></td>
        <td><div class="color color22"></div></td>
        <td><div class="color color23"></div></td>
        <td><div class="color color24"></div></td>
        <td><div class="color color25"></div></td>
      </tr>
     </tbody>
</table>
</div><!--/.table-responsive-->
<ul class="small custommarker">
  <li>現状Less環境が必要となります。多くの方が使えるよう、LessやSassをGUIで編集するアプリ開発協力者を募集しています。なお、このスターターキットの開発環境は、Bootstrapを素材に、<a href="https://panic.com/jp/coda/" target="_blank">Coda<span class="glyphicon glyphicon-new-window"></span></a> でのコーディング、 <a href="https://www.zennaware.com/cornerstone/index.php" target="_blank">Cornerstone<span class="glyphicon glyphicon-new-window"></span></a> でのDiff監理、 <a href="https://prepros.io/" target="_blank">Prepros<span class="glyphicon glyphicon-new-window"></span></a> でのコンパイルによって作成しています。</li>
</ul>
</div>

<div class="col-sm-3">
<div class="col-xs-6 col-sm-12">
<p class="text-center"><img class="reset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/less.png" height="60" alt="less"></p>
</div>
<div class="col-xs-6 col-sm-12">
<p class="text-center"><img class="reset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/coda.png" height="100" alt="coda"></p>
</div>
<div class="col-xs-6 col-sm-12">
<p class="text-center"><img class="reset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cornerstone.png" height="100" alt="Cornerstone"></p>
</div>
<div class="col-xs-6 col-sm-12">
<p class="text-center"><img class="reset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prepros.png" height="100" alt="prepros"></p>
</div>
</div>

</div><!-- /.row -->


<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-20px;"></span></a>
<hr>


<span class="xbold"><a id="anchor3"></a>Grid グリッド</span>
<h2>スマホもPCも、幅を足したらすべて“12”でした。</h2>
<p>デバイス対応の仕組みはすでに用意されています。レスポンシブ対応のグリッドシステムによって解像度やデバイスに応じてスケーリングされます。"xs-6"ならスマホで幅50%、"sm-4"ならタブレットレイアウトで幅33%という具合です。</p>

<div id="starter">
      <div class="row">
        <div class="col-lg-12">col-lg-12 <br>(lg100%)</div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-xs-12">col-sm-6 col-xs-12 <br>(sm50%, xs100%)</div>
        <div class="col-sm-6 col-xs-12">col-sm-6 col-xs-12 <br>(sm50%, xs100%)</div>
      </div>

      <div class="row">
        <div class="col-sm-4">col-sm-4 <br>(sm33%, xs100%)</div>
        <div class="col-sm-4">col-sm-4 <br>(sm33%, xs100%)</div>
        <div class="col-sm-4">col-sm-4 <br>(sm33%, xs100%)</div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-xs-6">col-sm-8 col-xs-6 <br>(sm66%, xs50%)</div>
        <div class="col-sm-4 col-xs-6">col-sm-4 col-xs-6 <br>(sm33%, xs50%)</div>
        <div class="col-sm-4 col-xs-6">col-sm-4 col-xs-6 <br>(sm33%, xs50%)</div>
        <div class="col-sm-8 col-xs-6">col-sm-8 col-xs-6 <br>(sm66%, xs50%)</div>
      </div>

      <div class="row">
        <div class="col-sm-3 col-xs-6">col-sm-3 col-xs-6 <br>(sm25%, xs50%)</div>
        <div class="col-sm-3 col-xs-6">col-sm-3 col-xs-6 <br>(sm25%, xs50%)</div>
        <div class="col-sm-3 col-xs-6">col-sm-3 col-xs-6 <br>(sm25%, xs50%)</div>
        <div class="col-sm-3 col-xs-6">col-sm-3 col-xs-6 <br>(sm25%, xs50%)</div>
      </div>
</div>


<pre class="mt20">
<strong>Grid Classes</strong>
xs :X small (phones)
sm :Small (tablets, 768px and up)  
md :Medium (desktops, 992px and up)
lg :Large (large desktops, 1200px and up) 
</pre>

</div><!-- /.container -->
</div><!-- /.content area -->










<div class="container-fluid paint">
  Container-fluid（全幅レイアウト）
  <div class="row">
    <div class="col-sm-6 paint">
      <p>container-fluid col-sm-6</p>
    </div>
    <div class="col-sm-6 paint">
      <p>container-fluid col-sm-6</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8 paint">
    <p>col-sm-4 col-sm-push-8（右へ8）</p>
    </div>
    <div class="col-sm-8 col-sm-pull-4 paint">
    <p>col-sm-8 .col-sm-pull-4（左へ4）</p>
    </div>
  </div>
</div>










<div class="container"><!-- content area2 / -->
<div class="row">
<div class="col-sm-9"><!-- content area / -->



<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-20px;"></span></a>
<hr>
<span class="xbold"><a id="anchor4"></a>Text テキスト</span>
<h2>美しく見ていただきたいから、ウェブフォント入れました。</h2>
<p>GoogleとAdobeの開発したNoto Sans Japaneseを設定済です。</p>

<h1 class="mt60">H1.いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやま<small>（いろはにほへとちりぬるを）</small></h1>
<p class="lead">Lead.いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせすん</p>
<p>いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせすん
<span class="xbold">いろはにほへとちりぬるをわかよたれそつねならむうゐのおくやまけふこえてあさきゆめみしゑひもせすん</span></p>

<div class="row">
<div class="col-sm-6">
<h2>h2. heading <small>Secondary text</small></h2>
<h3>h3. heading <small>Secondary text</small></h3>
<h4>h4. heading <small>Secondary text</small></h4>
<p>
<a href="#">Link</a>
<br>
<a href="#" target="_blank">Blank Link<span class="glyphicon glyphicon-new-window"></span></a>
<br>
<a href="#" target="_blank">PDF Link (PDF)<span class="glyphicon glyphicon-file"></span></a>
</p>
</div>

<div class="col-sm-6">
<p>
<mark>Highlight text.</mark><br>
<del>Deleted text.</del><br>
<ins>This line of text is meant to be treated.</ins><br>
<u>Underlined.</u><br>
<small>Small text.</small><br>
<strong>Strong text.</strong><br>
<em>Italicized text.</em><br>
<span class="text-muted">Muted.</span><br>
<abbr title="attribute">Attribute.</abbr><br>
<code>Code</code>, <code>Code</code>, and <code>Code</code>.<br>
<kbd>ctrl + p</kbd><br>
</p>
</div>
</div><!--/.row-->

<hr>

<div class="row">
<div class="col-sm-6">
<dl>
  <dt>Coffee</dt>
  <dd>black hot drink</dd>
  <dt>Milk</dt>
  <dd>white cold drink</dd>
</dl>
<dl class="dl-horizontal">
  <dt>Tel</dt>
  <dd>0000-0000-0000</dd>
  <dt>Fax</dt>
  <dd>0000-0000-0000</dd>
  <dt>Mail</dt>
  <dd><a href="mailto:aaa@aaa.com">mail@mail.com</a></dd>
</dl>
</div>
<div class="col-sm-6">
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<ul class="list-inline">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
</div>
</div><!--/.row-->

<pre>
Text in a pre element
is displayed in a fixed-width
font, and it preserves
both                spaces and
line breaks.
</pre>

<blockquote>
  <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
  <footer>From WWF's website</footer>
</blockquote>

<p>Left aligned text.</p>
<p class="text-center">Center aligned text.class="text-center"</p>
<p class="text-right">Right aligned text.class="text-right"</p>

  <span class="text-primary">This text is important.</span><br>
  <span class="text-success">This text indicates success.</span><br>
  <span class="text-info">This text represents some information.</span><br>
  <span class="text-warning">This text represents a warning.</span><br>
  <span class="text-danger">This text represents danger.</span><br>
  <span class="bg-primary">This text is important.</span><br>
  <span class="bg-success">This text indicates success.</span><br>
  <span class="bg-info">This text represents some information.</span><br>
  <span class="bg-warning">This text represents a warning.</span><br>
  <span class="bg-danger">This text represents danger.</span>


<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:0px;"></span></a>
<hr>
<span class="xbold"><a id="anchor5"></a>Table テーブル</span>
<h2>レスポンシブにしたい？"table-responsive" で囲うだけ。</h2>

<h2 class="text-center xbold">Basic</h2>
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
</div>

<h2 class="text-center xbold">Striped</h2>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
</div>

<h2 class="text-center xbold">Bordered</h2>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
</div>

<h2 class="text-center xbold">Hover</h2>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
</div>

<h2 class="text-center xbold">Contextual</h2>
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
</div>

<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-20px;"></span></a>
<hr><!-- /////////////////////////////////////////////// -->
<span class="xbold"><a id="anchor6"></a>Images 画像</span>
<h2>画像加工も最小限に。</h2>
<p>
"img-responsive"で囲えばフィット。Wordpress版には自動リサイズ機能が組み込み済です。
</p>

<div class="row">
<div class="col-xs-4 text-center">
<p>
<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="#">
class="img-responsive"
</p>
</div>
<div class="col-xs-4 text-center">
<p>
<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="#">
class="img-responsive"
</p>
</div>
<div class="col-xs-4 text-center">
<p>
<img class="img-thumbnail" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="#">
class="img-thumbnail"
</p>
</div>
</div>

<div class="text-center">
<p>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" class="img-rounded" width="300" alt="#"><br>
class="img-rounded"
</p>
</div>

<div class="text-center">
<p>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" class="img-circle" alt="#" width="300" height="300"><br>
class="img-circle"
</p>
</div>

<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-50px;"></span></a>
<hr>
<span class="xbold"><a id="anchor7"></a>Panels / Alerts / List Group 塗りと枠</span>
<h2>要点を見せる塗りと枠。</h2>

<div class="well">Basic Well</div>

<div class="panel panel-default">
  <div class="panel-body">A Basic Panel</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">Panel Content</div>
</div>

<div class="panel panel-default">
  <div class="panel-body">Panel Content</div>
  <div class="panel-footer">Panel Footer</div>
</div>

<h2 class="text-center xbold">panel-group</h2>

  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-info class</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">Panel with panel-warning class</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">Panel with panel-danger class</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>

<h2 class="text-center xbold">Alerts</h2>

<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

<div class="alert alert-info">
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>

<div class="alert alert-warning">
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>

<div class="alert alert-danger">
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>

<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

<h2 class="text-center xbold">List Group</h2>

<ul class="list-group">
  <li class="list-group-item">First item</li>
  <li class="list-group-item">Second item</li>
  <li class="list-group-item">Third item</li>
</ul>

<ul class="list-group">
  <li class="list-group-item"><span class="badge">12</span> New</li>
  <li class="list-group-item"><span class="badge">5</span> Deleted</li> 
  <li class="list-group-item"><span class="badge">3</span> Warnings</li> 
</ul>

<div class="list-group">
  <a href="#" class="list-group-item">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>

<div class="list-group">
  <a href="#" class="list-group-item active">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>





<a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top" style="color:black;margin-top:-10px;"></span></a>
<hr class="mt60">
<span class="xbold"><a id="anchor8"></a>Button ボタン</span>
<h2>想定される記述パタンはすでに用意されています。</h2>

<a href="#" class="btn btn-default">Default</a>
<a href="#" class="btn btn-primary">Primary</a>
<a href="#" class="btn btn-success">Success</a>
<a href="#" class="btn btn-info">Info</a>
<a href="#" class="btn btn-warning">Warning</a>
<a href="#" class="btn btn-danger">Danger</a>

<p class="mt20">&lt;a&gt;, &lt;button&gt;, or &lt;input&gt; element.<br>
<a href="#" class="btn btn-info" role="button">Link Button</a>
<button type="button" class="btn btn-info">Button</button>
<input type="button" class="btn btn-info" value="Input Button">
<input type="submit" class="btn btn-info" value="Submit Button">
</p>

<a href="#" class="btn btn-primary btn-lg">Large</a>
<a href="#" class="btn btn-primary btn-md">Medium</a>
<a href="#" class="btn btn-primary btn-sm">Small</a>
<a href="#" class="btn btn-primary btn-xs">XSmall</a>
<a href="#" class="btn btn-primary active">Active Primary</a>
<a href="#" class="btn btn-primary disabled">Disabled Primary</a>

<a href="#" class="btn btn-primary btn-block mt20">Button 1</a>

<div class="btn-group mt20">
  <a href="#" class="btn btn-primary">Apple</a>
  <a href="#" class="btn btn-primary">Samsung</a>
  <a href="#" class="btn btn-primary">Sony</a>
</div>

<div class="btn-group btn-group-lg mt20">
  <a href="#" class="btn btn-primary">Apple</a>
  <a href="#" class="btn btn-primary">Samsung</a>
  <a href="#" class="btn btn-primary">Sony</a>
</div>

<div class="btn-group-vertical mt20">
  <a href="#" class="btn btn-primary">Apple</a>
  <a href="#" class="btn btn-primary">Samsung</a>
  <a href="#" class="btn btn-primary">Sony</a>
</div>

<div class="btn-group btn-group-justified mt20">
  <a href="#" class="btn btn-primary">Apple</a>
  <a href="#" class="btn btn-primary">Samsung</a>
  <a href="#" class="btn btn-primary">Sony</a>
</div>

<div class="btn-group mt20">
  <a href="#" class="btn btn-primary">Apple</a>
  <a href="#" class="btn btn-primary">Samsung</a>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Sony <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Smartphone</a></li>
    </ul>
  </div>
</div>

<div class="btn-group mt20">
  <a href="#" class="btn btn-primary">Sony</a>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Tablet</a></li>
    <li><a href="#">Smartphone</a></li>
  </ul>
</div>


<h2 class="text-center xbold mt40"><a id="anchor9"></a>Badges / Labels</h2>

<a href="#">News <span class="badge">5</span></a><br>
<a href="#">Comments <span class="badge">10</span></a><br>
<a href="#">Updates <span class="badge">2</span></a>

<div>
<button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button>
</div>

<h1>Example <span class="label label-default">New</span></h1>
<p>Example <span class="label label-default">New</span></p>

<div>
<span class="label label-default">Default Label</span>
<span class="label label-primary">Primary Label</span>
<span class="label label-success">Success Label</span>
<span class="label label-info">Info Label</span>
<span class="label label-warning">Warning Label</span>
<span class="label label-danger">Danger Label</span>
</div>


<h2 class="text-center xbold mt40"><a id="anchor10"></a>Modal</h2>

<!-- Modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon glyphicon-zoom-in"></span>Open Modal (3 size)</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm"> <!-- "modal-dialog modal-sm" "btn btn-info modal-lg" -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Modal Header</h2>
      </div>
      <div class="modal-body">
          <p>This is a large modal.<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="modaltest"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.Modal -->

<!-- Large modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon glyphicon-zoom-in"></span>Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="modaltest">
    </div>
  </div>
</div>
<!-- /.Large modal -->

<h2 class="text-center xbold mt40"><a id="anchor11"></a>Dropdown / Collapse</h2>

  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Dropdown header 1</li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="disabled"><a href="#">CSS</a></li>
      <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>

  <div class="dropup mt20">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropup Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
    </ul>
  </div>

  <button type="button" class="btn btn-info mt20" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-menu-hamburger"></span>Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>

  <a href="#demo2" class="btn btn-info mt20" data-toggle="collapse"><span class="glyphicon glyphicon-menu-hamburger"></span>Simple collapsible</a>
  <div id="demo2" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>

<div class="panel-group mt20">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-menu-hamburger"></span>Collapsible panel</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-menu-hamburger"></span>Collapsible list group</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <ul class="list-group">
        <li class="list-group-item">One</li>
        <li class="list-group-item">Two</li>
        <li class="list-group-item">Three</li>
      </ul>
      <div class="panel-footer">Footer</div>
    </div>
  </div>
</div>





<h2 class="text-center xbold mt40"><a id="anchor12"></a>Tabs/Pills</h2>

<ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<ul class="nav nav-pills mt20">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<ul class="nav nav-pills nav-stacked mt20">
  <li class="active"><a href="#">Home</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<ul class="nav nav-tabs nav-justified mt20">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<ul class="nav nav-pills nav-justified mt20">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<h2 class="text-center xbold mt40"><a id="anchor13"></a>Pager</h2>

<ul class="breadcrumb">
  <li><a href="#">ホーム</a></li>
  <li><a href="#">Private</a></li>
  <li><a href="#">Pictures</a></li>
  <li class="active">Vacation</li> 
</ul>

<div class="text-center">
<ul class="pagination">
<li><a class="next page-numbers" href="#"><span class="glyphicon glyphicon-chevron-left"></span>前へ</a></li>
<li><span class='page-numbers current'>1</span></li>
<li><a class='page-numbers' href='#'>2</a></li>
<li><a class='page-numbers' href='#'>3</a></li>
<li><a class="next page-numbers" href="#">次へ<span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
</div>

<div class="text-center">
<ul class="pagination">
  <li><a href="#"><span class="glyphicon glyphicon-step-backward"></span>最初のページ</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">最後のページ<span class="glyphicon glyphicon-step-forward"></span></a></li>
</ul>
</div>

<ul class="pager">
  <li><a href="#">前の記事</a></li>
  <li><a href="#">次の記事</a></li>
</ul>

<ul class="pager">
  <li class="previous"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span>前の記事</a></li>
  <li class="next"><a href="#">次の記事<span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>




</div><!-- /.col-sm-9 -->
<div class="col-sm-3 sidebar"><!-- sidebar ./ -->
	<div class="list-group">
	<a href="#" class="list-group-item active">Sub-Category title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item current">Content title "current"</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item active">Sub-Category title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item">Content title</a>
    <a href="#" class="list-group-item active">Sub-Category title</a>
    </div>
</div><!-- /.sidebar -->
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>