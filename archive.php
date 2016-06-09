<?php
/**
 * The template for displaying archive pages
 * 記事一覧（アーカイブ）ページテンプレート 
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container">

<div class="row">
<div class="col-sm-9"><!-- content area/ -->

<div id="index">
<h1 class="category_title"><?php single_cat_title( '', true ); ?></h1>

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
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>							
<?php /* ?><span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span><?php */ ?>
<p><?php echo mb_substr(get_the_excerpt(), 0, 300); ?>...<a class="more" href="<?php the_permalink(); ?>"></a></p>
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



<div class="text-center"><ul class="pagination"><?php wp_pagination(); ?></div>


</div><!-- /.index -->

</div><!-- /.content area -->
<?php get_sidebar(); ?>
</div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>