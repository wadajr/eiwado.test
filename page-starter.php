<?php
/*
Template Name: Page-starter
 * 固定ページ 
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container" id="content"><!-- container ./ -->
<div class="row">
<div class="col-sm-9"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>


<h1>無料からはじめるDIYスターターキット</h1>
<p class="lead">長期的に育てるための環境を用意しました<br>伝える品質を向上していきましょう</p>

<?php include ('inc/inc-social-all.php'); ?>

<p>プロトタイピングから開発、公開まで、一貫フローを念頭に、BootstrapベースのWordpressテーマを用意しました。1ページから数百ページ規模の情報配信に対応するスターターです。ここから始める<mark>テーマファイルを無料で配布しています。</mark><br>
</p>
<p class="text-center"><a href="/starterkit.zip" target="_blank" onclick="ga('send', 'pageview', {'page': '/starterkit.zip', 'title': 'starterkit'});" class="btn btn-primary" role="button">テーマファイルダウンロード（zip）<span class="glyphicon glyphicon-download-alt"></span></a><br>
<small>初版 (Bootstrap 3.3.6 ＋ Wordpress 4.5) 2016/04</small></p>

<ul class="small custommarker">
  <li>複数のサイトを作りながらよく使うユニット等、随時アップデートを行っていきます。</li>
  <li>コメント機能等は実装していないこともあり、今のところ公式テーマ登録の予定はありません。</li>
  <li>PreprosによるLess編集とワードプレス子テーマでの編集を推奨します。</li>
</ul>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading"><p class="panel-title"><a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-menu-hamburger"></span> テーマファイル構成</a></p></div>
	 <div id="collapse1" class="panel-collapse collapse"><div class="panel-body">

<div class="table-responsive">
<table class="table" style="font-size:small;">
    <thead>
      <tr>
        <th>ファイル</th>
        <th>内容</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>404.php</td>
        <td>エラーページ (検索フォーム付)</td>
      </tr>
      <tr>
        <td>apple-touch-icon-precomposed.png</td>
        <td>ホームアイコン</td>
      </tr>
      <tr>
        <td>archive.php</td>
        <td>アーカイブページ</td>
      </tr>
      <tr>
        <td>favicon.ico</td>
        <td>ファビコン</td>
      </tr>
      <tr>
        <td>footer.php</td>
        <td>フッタ</td>
      </tr>
      <tr>
        <td>functions.php</td>
        <td>機能設定ファイル</td>
      </tr>
      <tr>
        <td>header.php</td>
        <td>ヘッダ</td>
      </tr>
      <tr>
        <td>index.php</td>
        <td>インデックス（ホーム）ファイル</td>
      </tr>
      <tr>
        <td>page-xxx.php</td>
        <td>ガイドライン・ページサンプルファイル等のページファイル</td>
      </tr>
      <tr>
        <td>page.php</td>
        <td>ページ</td>
      </tr>
      <tr>
        <td>screenshot.png</td>
        <td>テーマイメージ</td>
      </tr>
      <tr>
        <td>search.php</td>
        <td>検索結果ページ</td>
      </tr>
      <tr>
        <td>sidebar.php</td>
        <td>サイドバー</td>
      </tr>
      <tr>
        <td>single.php</td>
        <td>記事ページ</td>
      </tr>
      <tr>
        <td>style.css</td>
        <td>テーマ設定スタイル</td>
      </tr>
      <tr>
        <td>/dist</td>
        <td>Bootstrapフレームワークフォルダ(Less CSS等)</td>
      </tr>
      <tr>
        <td>/fonts</td>
        <td>ウェブフォントフォルダ</td>
      </tr>
      <tr>
        <td>　NotoSansCJKjp</td>
        <td>日本語フォント</td>
      </tr>
      <tr>
        <td>　Glyphicons</td>
        <td>Bootstrap採用フォント</td>
      </tr>
      <tr>
        <td>　Genericon</td>
        <td>Wordpress採用フォント。ソーシャルアイコン等</td>
      </tr>
      <tr>
        <td>/img</td>
        <td>画像フォルダ</td>
      </tr>
      <tr>
        <td>/inc</td>
        <td>インクルードファイルフォルダ</td>
      </tr>
      <tr>
        <td>　carousel.php</td>
        <td>スライドショーユニット</td>
      </tr>
      <tr>
        <td>　inc-sidebar_banner.php</td>
        <td>バナーユニット</td>
      </tr>
      <tr>
        <td>　inc-sidebar_new-entries.php</td>
        <td>新規投稿ユニット</td>
      </tr>
      <tr>
        <td>　inc-sidebar_social.php</td>
        <td>SNSユニット</td>
      </tr>
      <tr>
        <td>　inc-social-all.php</td>
        <td>サイトシェアユニット</td>
      </tr>
      <tr>
        <td>　inc-social-content.php</td>
        <td>投稿シェアユニット</td>
      </tr>
      <tr>
        <td>　navbar.php</td>
        <td>ナビゲーションユニット</td>
      </tr>
    </tbody>
</table>
</div>

	  </div>
    </div>
  </div>
</div>


<hr>

<h2>導入からサイト公開までの流れ</h2>
<p>最初がもっともテクニカルで様々な専門用語が飛び交います。さっと立ち上げるにはフリーのサービスで十分でしょう。ただ、後々、かゆいところに手が届かないんですよね。<mark><strong>「長期的に育てるための環境を用意しよう」</strong>がモットーですから、<strong>「わからないけど立ち上げたい」</strong>という方は導入サポートをご利用ください。ヒントは随時更新していきます。<strong>「みんなで学んでしまいたい」。</strong>ええ、導入ワークショップも承りますとも。</mark></p>

<p class="text-center mb20"><a href="support" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus"></span>導入サポートサービスはこちら</a></p>

<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>作業環境の用意</h3>
<p>高価なツールは要りません。写真加工とテキストが書ければまずは充分。手元のパソコンで試してからアップロードしたり、作業内容を見える化したりと、用意しておくとスムーズなツールはご参考まで。必要に応じて使っていきましょう。</p>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading"><p class="panel-title"><a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-menu-hamburger"></span> 作業環境参考</a></p></div>
	 <div id="collapse2" class="panel-collapse collapse"><div class="panel-body">

<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th width="200">作業内容</th>
        <th>おすすめアプリケーション</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2"><strong>基本</strong></td>
      </tr>
      <tr>
        <td>写真を加工する</td>
        <td><a href="https://www.befunky.com/create/" target="_blank">Be Funky<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>HTMLを修正する</td>
        <td><a href="http://brackets.io/" target="_blank">Brackets<span class="glyphicon glyphicon-new-window"></span></a>, <a href="https://coteditor.com/" target="_blank">CotEditor<span class="glyphicon glyphicon-new-window"></span></a>, <a href="https://panic.com/jp/coda/" target="_blank">Coda<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td colspan="2"><strong>応用</strong></td>
      </tr>
      <tr>
        <td>ローカルでテストする</td>
        <td><a href="https://www.mamp.info/en/" target="_blank">MAMP<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>アップロードする</td>
        <td><a href="https://cyberduck.io/index.ja.html" target="_blank">Cyberduck<span class="glyphicon glyphicon-new-window"></span></a>, <a href="https://panic.com/jp/transmit/" target="_blank">Transmit<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>Lessを扱う</td>
        <td><a href="https://prepros.io/" target="_blank">Prepros<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>差分を管理する</td>
        <td><a href="http://www.kaleidoscopeapp.com/" target="_blank">Kaleidoscope<span class="glyphicon glyphicon-new-window"></span></a> or <a href="https://www.zennaware.com/cornerstone/index.php" target="_blank">Cornerstone<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>カラーを検討する</td>
        <td><a href="https://itunes.apple.com/jp/app/color-picker/id641027709?mt=12" target="_blank">Color Picker<span class="glyphicon glyphicon-new-window"></span></a>, <a href="https://www.google.com/design/spec/style/color.html#color-color-palette/" target="_blank">Google Color design<span class="glyphicon glyphicon-new-window"></span></a>, <a href="https://color.adobe.com/ja/" target="_blank"> Adobe Color CC<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
      <tr>
        <td>グラフィックをつくる</td>
        <td><a href="https://www.sketchapp.com/" target="_blank">Sketch<span class="glyphicon glyphicon-new-window"></span></a> 等</td>
      </tr>
	</tbody>
</table>
</div>

	  </div>
    </div>
  </div>
</div>


<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>公開環境の準備〜Wordpressインストール</h3>
<p><mark>最初だけ必要となる、最も技術的なステップです。</mark>情報は多くありますが、業界向けでなんだか難しい。ここでの脱落者の多いこと。ここは経験者に任せるべしです。</p>
<ol>
<li>サーバー・ドメイン契約</li>
<li>データベース設定</li>
<li>Basic認証設定</li>
<li>FTPでwpフォルダをアップロード</li>
<li>wpディレクトリからインストール</li>
<li>公開ディレクトリを調整（参考: http://bit.ly/1Bb87tS )</li>
</ol>


<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>Wordpressの初期設定</h3>
<p><mark>ワードプレスにログインできました。</mark>中身を調整します。</p>
<ol>
<li>設定 > 一般：サイトタイトルとサイトアドレスを入力</li>
<li>設定 > 表示設定：RSS/Atom フィード「抜粋」とする</li>
<li>設定 > 表示設定：公開までは、検索エンジンでの表示を「インデックスしないようにする」</li>
<li>設定 > メディア設定：すべて値を0とする</li>
<li>設定 > パーマリンク：カスタム構造 /%postname%/ とする</li>
<li>Future Archivesテーマをインストール（アップロード）</li>
<li>プラグインをインストール（サイトの目的によって選考します）
	<ul>
	<li>Add From Server</li>
	<li>Overwrite Uploads</li>
	<li>All In One SEO Pack</li>
	<ul>
	<li>Schema.org マークアップを使用チェックを外す</li>
	<li>ホームタイトル入力</li>
	<li>ホームディスクリプション入力</li>
	</ul>
	<li>WordPress インポートツール</li>
	<li>WP No Category Base</li>
	<li>WP Multibyte Patch</li>
　　</ul>
</li>
</ol>

<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>ひろめるためのSNS・OGP設定</h3>	
<p>シェアする際に表示される情報を登録しましょう。以下３つの作業を行うのみです。</p>
<ul>
	<li>Facebook App IDを取得し、ヘッダに記載</li>
	<li>No-imageを作成し、差し替え</li>
	<li>忍者おまとめボタン（これは便利）を利用し、取得したSNSコードを記載</li>
</ul>

<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>組み合わせの妙です。編集とデザインと</h3>
<p>基本となる最小限ユニットはすでに揃っています。<mark>いかに組み合わせるか？いわゆる設計・デザインの主要なパートです。ここが勝負どころですね。一緒につくりあげましょう。</p>
<ul>
<li>サイト目的・規模・メニュー構成を決める</li>
<li>コンテンツの配置を決める</li>
<li>ブランドカラーのメインとサブを決め、LESSで反映する</li>
<li>ロゴ画像を用意し、配置サイズ調整を行う</li>
<li>固定ページを作成し、メニューと結びつける</li>
<li>アイコン・ファビコンを準備する（ http://convertico.com ）</li>
</ul>

<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>内容をいれましょう。更新方法を体験しましょう</h3>
<p>枠はできました。用意した中身をいれていきましょう。</p>
<ul>
<li>投稿記事と固定ページを理解する</li>
<li>原稿・写真・グラフィックを用意し、公開情報を登録する</li>	
<li>修正方法を理解しておく</li>
</ul>

<h3><span class="glyphicon glyphicon glyphicon-wrench"></span>Googleに登録して公開です</h3>
<p>ほっといたら誰か見てくれる？いいえ。公開してからが大事です。<br>まずは公開おめでとうございます。</p>
<ul>
<li>設定 > 表示設定：検索エンジンでの表示「インデックスしないようにする」解除</li>
<li>Basic認証解除</li>
<li>URL登録 http://www.google.co.jp/addurl/</li>
<li>アナリティクス登録 https://analytics.google.com/analytics/</li>
<li>アナリティクスタグ挿入・目視</li>
<li>WEBマスター登録 https://www.google.com/webmasters/tools/home?hl=ja</li>
<li>sitemap.xml 登録</li>
<li>参考：www直下ファイル基本構成
	<ul>
	<li>wp（ワードプレスフォルダ）</li>
	<li>origin.js （アナリティクスタグ）</li>
	<li>googlexxxxxxxxxxxx.html （サイト登録ファイル）</li>
	<li>favicon.ico（ファビコン）</li>
	<li>.htaccess（設定ファイル）</li>
	<li>sitemap.xml（サイトマップ通知）</li>
	<li>index.php（インデックス）</li>
	</ul>
</li>
</ul>

<hr class="boldline">

<div class="text-center">
<h2 class="text-center">さぁ、はじめましょう。</h2>
<p><a href="/starterkit.zip" target="_blank" onclick="ga('send', 'pageview', {'page': '/starterkit.zip', 'title': 'starterkit'});" class="btn btn-primary" role="button">テーマファイルダウンロード（zip）<span class="glyphicon glyphicon-download-alt"></span></a></p>
<p class="text-center mb20"><a href="support" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus"></span>導入サポートサービスはこちら</a></p>
</div>





</div><!-- /.col-sm-9 -->
<?php include ('inc/sidebar_starter.php'); ?>
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>