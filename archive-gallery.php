<?php
/**
 * The template for displaying archive pages
 * 記事一覧（アーカイブ）ページテンプレート 
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container">

<div class="text-center">
<ul class="pagination">
<li><a href='/gallery/'>すべてを表示</a></li>
<?php wp_get_archives('type=yearly&post_type=gallery'); ?>
</ul>
</div>

<div class="row no-gutter index-list mt0">
<h1 style="display:none;">ギャラリー</h1>

				<?php 
				if (have_posts()) : // Loop
					while (have_posts()) : the_post(); // Loop start ?>

<div id="gallery" class="col-sm-6 pickup">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?><?php the_post_thumbnail( 'thumb600800' ); // サムネサイズはfunctionにて指定?>
<?php else: // サムネイルを持っていないときの処理 ?><img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpg" alt="NO IMAGE" title="NO IMAGE"/>
<?php endif; ?>
  
  <div class="copy">
  <span class="date"><?php echo get_the_date('Y/n月'); ?></span>
  <h2 class="mt0"><?php echo get_the_title(); ?></h2>
  <p style="margin-right:10px;"><?php echo get_the_content(); ?></p>
  </div>
  <?php 
	$args = array(
	'before' => '<div class="page-link">',
	'after' => '</div>',
	'link_before' => '<span>',
	'link_after' => '</span>',
	);
	wp_link_pages($args); ?>
</div><!--/.pickup-->

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

</div><!-- /.row -->
<div class="text-center"><ul class="pagination"><?php wp_pagination(); ?></div>

<div class="text-center">
<ul class="pagination">
<li><a href='/gallery/'>すべてを表示</a></li>
<?php wp_get_archives('type=yearly&post_type=gallery'); ?>
</ul>
</div>

</div><!-- /.container -->

<?php get_footer(); ?>