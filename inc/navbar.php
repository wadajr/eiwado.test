<?php
/**
 * The template for displaying global nav.
 * グローバルナビゲーション
 * ページ「is_page('name')」やカテゴリ「is_category('name')」の'name'を入力しておくことでカレント表示が機能します。
*/
?>
<div class="navbar yamm navbar-default navbar-fixed-top"><!-- navbar/ -->
<div class="container">
	<div class="navbar-header">
	<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Future Archives"><!--<?php bloginfo( 'name' ); ?>--></a>
	</div>
<div id="navbar-collapse-1" class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
	<li><a href="/philosophy/" <?php if ( is_category('philosophy') or is_page('philosophy') or is_tag('philosophy' or 'philosophy')) { echo 'class="current"'; } ?>>フィロソフィ</a></li>
	<li><a href="/design/" <?php if ( is_category('design') or is_page('design') or is_tag('design' or 'design')) { echo 'class="current"'; } ?>>デザイン</a></li>
    <!-- Mega dropdown -->
	<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" id="dropdown-toggle">サンプル<b class="caret"></b></a>
	<ul class="dropdown-menu">

    <li>
    <div class="yamm-content">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="list-group">
                <p class="megamenu-subtitle">更新記事テンプレート</p>
                <a href="/news/" class="list-group-item">お知らせ一覧　<br class="br-pc"><xsmall>archive.php<br>サイト規模問わずの発信型ブログテンプレート</xsmall></a>
			<a href="/news/hello-world/" class="list-group-item">お知らせ詳細　<br class="br-pc"><xsmall>single.php</xsmall></a>
			<a href="/gallery/" class="list-group-item">ギャラリー　<br class="br-pc"><xsmall>archive-gallery.php<br>カンタン運用を念頭に一覧ページで完結です</xsmall></a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="list-group">
                <p class="megamenu-subtitle">固定ページテンプレート</p>
			<a href="/page/" class="list-group-item">固定ページ（ナビあり）　<br class="br-pc"><xsmall>page.php</xsmall></a>
			<a href="/page-no-nav/" class="list-group-item">固定ページ（ナビなし）　<br class="br-pc"><xsmall>page-no-nav.php</xsmall></a>
			<a href="/page-full-width/" class="list-group-item">固定ページ（全幅）　<br class="br-pc"><xsmall>page-full-width.php</xsmall></a>
			<a href="/page-parallax/" class="list-group-item">固定ページ（パララックス）　<br class="br-pc"><xsmall>page-parallax.php</xsmall></a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="list-group">
                <p class="megamenu-subtitle">基本ページサンプル</p>
			<a href="/page-member/" class="list-group-item">スタッフ　<br class="br-pc"><xsmall>page-member.php</xsmall></a>
			<a href="/page-access/" class="list-group-item">アクセス　<br class="br-pc"><xsmall>page-access.php</xsmall></a>
			<a href="/page-cafe/" class="list-group-item">カフェ　<br class="br-pc"><xsmall>page-cafe.php</xsmall></a>
			</div>
		</div>
	</div><!--/.row-->
	</div><!--/.yamm-content-->
	</li>
	</ul><!--/.dropdown-menu-->
	</li><!--/.dropdown-->
	<!-- ./Mega dropdown -->

	<li><a href="/starter/" <?php if ( is_page('support') or is_page('starter')) { echo 'class="current"'; } ?>>スタート</a></li>
	<li><a href="/about/" <?php if ( is_page('about') or is_page('about')) { echo 'class="current"'; } ?>>プロフィール</a></li>

    </ul><!-- /.nav navbar-nav -->
</div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</div><!-- /.navbar -->