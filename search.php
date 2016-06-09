<?php
/**
 * The template for displaying the search result
 * 検索結果一覧
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container">



<div id="index">
<h1>検索結果</h1>
				<?php 
				if (have_posts()) : // Loop
					while (have_posts()) : the_post(); // Loop start ?>

<div id="post-<?php the_ID(); ?>" class="index">
<p><span class="date"><?php echo get_the_date(); ?></span><span class="tags"><br class="br-sp"><span class="glyphicon glyphicon-tag"></span> <?php the_category(' / ') ?><?php the_tags(' / ') ?></span></p>
<div class="index-thumb">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb600375' ); ?></a>
<?php else: // サムネイルを持っていないときの処理 ?>
<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/no-image.jpg" alt="NO IMAGE" title="NO IMAGE" /></a>
<?php endif; ?>
</div><!-- /.index-thumb -->
<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
<?php /* ?><span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span><?php */ ?>
<?php echo mb_substr(get_the_excerpt(), 0, 300); ?>...<a class="more" href="<?php the_permalink(); ?>">続きを読む</a>
<?php 
	$args = array(
	'before' => '<div class="page-link">',
	'after' => '</div>',
	'link_before' => '<span>',
	'link_after' => '</span>',
	);
	wp_link_pages($args); ?>
<?php if ( is_multi_author() ): ?> 
	<span>: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
	<?php
	endif;
	?>
</div><!--./ post-->

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

</div><!-- /.container -->
<?php get_footer(); ?>