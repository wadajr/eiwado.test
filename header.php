<?php
/**
 * The template for displaying the header
 * ヘッダテンプレート
 * 
 * 52行目にご自身のApp IDを記述しましょう。App IDはFacebookデバッガーで取得できます。（https://developers.facebook.com/tools/debug/）
 * 85行目に/origin.jsファイルにGoogle Analytics等、使用するスクリプトを記載し、htdocs直下に配置しましょう。
 * ご自身のno-image.jpgを用意しましょう。 
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"><!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/notosansjapanese.css" rel="stylesheet">
<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/genericons/genericons.css' rel='stylesheet' id='genericons-css' type='text/css' media='all' />
 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
 <!--[if lt IE 9]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/assets/js/ie-emulation-modes-warning.js"></script>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="/feed/" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon-precomposed.png" />
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php echo get_permalink(); ?>">
<meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?>">
<meta name="twitter:description" content="<?php
		global $page, $paged;
		if ( is_home() || is_front_page() ) {
			bloginfo('description');
		} elseif (is_single() || is_page() ) {
			if (have_posts()) : while (have_posts()) : the_post();
				echo strip_tags(get_the_excerpt());
			endwhile; endif;
		}
		?>..." />
<meta name="twitter:image" content="<?php
		if(has_post_thumbnail() && !is_home()) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id());
			echo $image[0];
		} else {
			echo esc_url(get_template_directory_uri('/')) . '/img/no-image.jpg';
		}
?>" />
<meta property="fb:app_id" content="1102607953136914" /><?php //App IDを入力  ?>
<meta property="og:type" content="blog">
<?php
	if (is_single()){//記事ページ
     if(have_posts()): while(have_posts()): the_post();
     echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'...">';echo "\n";//抜粋
     endwhile; endif;
     echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトル
     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URL
	} else {//記事ページ以外
     echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面ブログ説明文
     echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面ブログタイトル
     echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」管理画面ブログURL
	}
	?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php
		$str = $post->post_content;
		$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか
		if (is_single()){//記事ページ
			if (has_post_thumbnail()){//サムネイルがある
	     $image_id = get_post_thumbnail_id();
		 $image = wp_get_attachment_image_src( $image_id, 'full');
	     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
		 } else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//サムネイルは無いが画像あり
     echo '<meta property="og:image" content="'; echo get_template_directory_uri('/'); echo '/img/no-image.jpg">';echo "\n";
	 } else {//サムネイルも画像も無い
	     echo '<meta property="og:image" content="'; echo get_template_directory_uri('/'); echo '/img/no-image.jpg">';echo "\n";
		 }
		 } else {//記事ページ以外
	     echo '<meta property="og:image" content="'; echo get_template_directory_uri('/'); echo '/img/no-image.jpg">';echo "\n";
		 }
	?>
<script type='text/javascript' src='/origin.js'></script><?php //アナリティクス等で利用  ?>
</head>
<body id="anchor0">