<?php
/**
 * Template Name: Page-full-width
 * 固定ページ
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container" id="content"><!-- container ./ -->
<div class="row">
<div class="col-sm-12"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>

<?php 
if (have_posts()) : // Loop
	while (have_posts()) : the_post(); // Loop start ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php echo get_the_title(); ?></h1>							
		<?php the_content(); ?>
		<?php 
		$args = array(
			'before' => '<div class="page-link">',
			'after' => '</div>',
			'link_before' => '<span>',
			'link_after' => '</span>',
		);
		wp_link_pages($args); ?>
		<?php if ( is_multi_author() ): ?> 
		<span class="post-author">作成者 : <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
			<?php
			endif;
			?>
		</div>
						
					<?php 
					endwhile; // /.Loop		
					else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
					<?php
					endif;
					?>

</div><!-- /.col-sm-12 -->
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>