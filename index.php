<?php
/*
Template Name: Index
 */
?>
<?php get_header(); // ヘッダ読み込み //?>
<?php include ('inc/navbar.php'); // ナビゲーション読み込み // ?>
<?php include ('inc/carousel.php'); // スライドショー読み込み // ?>


<div class="container"> <?php // no-gutterによる隙間なし配置 // ?>
<?php include ('inc/inc-social-all.php'); // ソーシャルパーツ読み込み // ?>
<div class="row no-gutter"> 
	<div class="col-sm-4 col-xs-12 pickup">
	<a href="/philosophy/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/dummy00.png" alt="img"/>
	<p class="title">フィロソフィ</p></a>
        <p class="lead"><strong>ちゃんと伝わる魅力的な舞台。</strong><br><span class="small">DIY感覚で、地域への提供や共同開発をはじめましょう。さっといいものをつくりたいから、勝手に品質向上委員会。</span></p>
</div>
<div class="col-sm-4 col-xs-6 pickup">
	<a href="/design/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/dummy01.png" alt="img"/>
	<p class="title">デザイン</p></a>
        <p class="lead"><strong>今よりも簡単、美しく、スピーディ。</strong><br><span class="small">デザインは組み合わせの妙。既に揃っています。かんたんをもっとカンタンに。ノウハウを惜しみなく詰め込みました。</span></p>
</div>
<div class="col-sm-4 col-xs-6 pickup">
	<a href="/starter/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/dummy01.png" alt="img"/>
        <p class="title">スタート</p></a>
        <p class="lead"><strong>長期的に育てるための環境。</strong><br><span class="small">無料での自由な開発。有料での完全サポートも承ります。</span></p>  
</div>
</div><!-- /.row no-gutter -->


<div class="col-sm-10 col-sm-push-1 mt40"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>


<div id="index"> <?php // インデックス表示 // ?>
<h2 class="category_title">記事サンプル</h2>
				<?php 
				if (have_posts()) : // Loop
					while (have_posts()) : the_post(); // Loop start ?>

<div id="post-<?php the_ID(); ?>" class="index">
<p><span class="date"><?php echo get_the_date(); ?></span><span class="tags"><br class="br-sp"><span class="glyphicon glyphicon-tag"></span> <?php the_category(' / ') ?><?php the_tags(' / ') ?></span></p>
<div class="index-thumb">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb160100' ); ?></a>
<?php else: // サムネイルを持っていないときの処理 ?>
<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE"/></a>
<?php endif; ?>
</div><!-- /.index-thumb -->
<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
<?php /* ?><span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span><?php */ ?>
<p><?php echo mb_substr(get_the_excerpt(), 0, 300); ?>...<a class="more" href="<?php the_permalink(); ?>">続きを読む</a></p>
<?php 
	$args = array(
	'before' => '<div class="page-link">',
	'after' => '</div>',
	'link_before' => '<span>',
	'link_after' => '</span>',
	);
	wp_link_pages($args); ?>
<?php if ( is_multi_author() ): ?> 
	<span>作成者 : <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
	<?php
	endif;
	?>
</div><!--/.post-->
	<?php 
	endwhile; // /.Loop		
	else : // 記事が見つからなかった場合の処理 ?>
	<div>
	<h2>記事はありません</h2>
	<p>お探しの記事は見つかりませんでした。</p>
	</div>
	<?php
	endif;
	?>
</div><!-- /.index -->



<ul class="pager">
<li class="next"><a href="/news/">もっと見る<span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>


</div><!-- /.content area -->
</div><!-- /.container -->

<?php get_footer(); // フッタ読み込み //?>