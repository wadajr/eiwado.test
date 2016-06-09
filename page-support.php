<?php
/*
Template Name: Page-support
 * 固定ページ
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container" id="content"><!-- container ./ -->
<div class="row">
<div class="col-sm-9"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<h1>サポート・価格・問い合わせ</h1>
<p class="lead">ウェブサイトをつくることがゴール？<br>いいえ、物語をつくるためのスタートです</p>

<?php include ('inc/inc-social-all.php'); ?>


<p>設計・編集・デザインの対象は様々です。始めるハードルは低く、使い勝手は誰にも優しくありたいもの。少しでもよく情報を提供できる場をつくりましょう。成長力のあるつくり方を提供していきます。</p>




<h2 class="category_title"><span class="glyphicon glyphicon-wrench"></span>導入サポート</h2>
<p class="lead">地域や文化に「育てる付加価値」を。企業にもっと効率化を</p>
<p>このサイトは常に完成ではありません。変化に強い基本的な構造なのです。追加予算が組めたら手を入れていけばよいのです。必要に応じて柔軟な体制で取り組みます。デザイン、イラスト、写真、映像、ライティング、アプリ開発、ご予算に合わせて適切なチームを組んでいきます。小規模でよいなら、小規模に取り掛かりましょう。</p>

<div class="row">
<div class="col-xs-3">
<img class="img-responsive img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/profile.jpg" alt="portrait">
</div>
<div class="col-xs-9">
<p><strong>二藤部 知哉 にとうべともや</strong><br>
<small>インフォメーションアーキテクト、ディレクター。武蔵野美術大学建築学科卒業後、建築設計、３DCG制作、映像制作等に携わり、A.C.O.に参加。企業サイト・グローバルサイトのコンサルティング、情報設計、開発管理を中心にディレクターとして活動。2010年以降、トヨタ自動車株式会社、三菱重工業株式会社、サンスター株式会社、株式会社リクルートホールディングス等大手企業サイト及びグローバルサイトの設計に携わる。JAGDA会員。神奈川県鎌倉市在住。</small>
</p>
</div>
</div>

<h2 class="category_title"><span class="glyphicon glyphicon-yen"></span>参考価格</h2>
<p>最小限から始めて育てるパッケージ。新しい価値を生み出しましょう。</p>

<div>
<table class="table table-striped">
    <thead>
      <tr>
        <th width="22%">内容</th>
        <th width="50%">　</th>
        <th>目安期間</th>
        <th>参考価格</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>DIYキットの使用</td>
        <td><small>ご自由にお試しください</small></td>
        <td>―</td>
        <td>無料</td>
      </tr>
      <tr>
        <td>スターターパック</td>
        <td><small>サーバー・ドメイン契約代行/Wordpressインストール/初期設定/SNS・OGP設定/カラー・ロゴ設定/Google登録。器だけ欲しいという方向けに技術面を完全フォロー。最小工数での引き渡しです。あとはご自身でDIY！</small></td>
        <td>5-10日</td>
        <td>20万円</td>
      </tr>
      <tr>
        <td>立ち上げパック</td>
        <td><small>スターターパックの内容に加えて、初期最低限必要な10ページ程度を作成。ご用意いただいた写真・テキストを元に編集し公開できる状態にします</small></td>
        <td>10-15日</td>
        <td>30万円</td>
      </tr>
      <tr>
        <td>引っ越しパック</td>
        <td><small>別のブログ等からの引っ越しリフォーム（50P程度）。古くなってしまったデータをクリーンに整えます</small></td>
        <td>15-20日</td>
        <td>40万円</td>
      </tr>
      <tr>
        <td>成長運用パック</td>
        <td><small>安心して運用し、独立いただけるようサポートします。</small></td>
        <td>―</td>
        <td>3万円/月</td>
      </tr>
      <tr>
        <td>教育・講習会</td>
        <td><small>基本的なことを実践的に学ぶワークショップや勉強会を行います。ノウハウは共有されるべきです。</small></td>
        <td>―</td>
        <td>応相談</td>
      </tr>
    </tbody>
</table>
</div>


<ul class="small">
  <li>規模・工数に寄って価格が変動することご了承ください。随時御見積とさせていただきます。</li>
  <li>サーバー・ドメイン費用は実費がかかります（5千〜1万円/年程度）</li>
  <li>オリジナルデザインは別途御見積となります。</li>
  <li>50ページ以上のウェブサイトは打ち合わせや制作期間の数により体制を組み御見積いたします。</li>
  <li>写真撮影・映像制作・記事ライティング（インタビュー等）・WEB以外の制作物も承ります。</li>
</li>
</ul>

<h2 class="category_title"><span class="glyphicon glyphicon-envelope"></span>お問い合わせ</h2>
<p>使ってみたい方、一緒に開発してみたい方、サポートやサービスについてメール及びFacebookメッセージで承ります。規模・ジャンルを問いません。規模・目的・公開希望時期をお知らせください。</p>

<p class="text-center mb20"><a href="mailto:nito@future-archives.net?subject=問い合わせ&amp;body=規模・目的・公開希望時期等をお知らせください。担当よりご返信差し上げます。" class="btn btn-danger" role="button">メールでの問い合わせ<span class="glyphicon glyphicon-envelope"></span></a></p>
<p class="text-center mb20"><a href="https://www.facebook.com/tomoya.nitoube" class="btn btn-primary" role="button">Facebookメッセージでの問い合わせ<span class="glyphicon glyphicon-flash"></span></a></p>


</div><!-- /.col-sm-9 -->
<?php include ('inc/sidebar_starter.php'); ?>
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>


