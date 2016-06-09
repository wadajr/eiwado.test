<?php
/**
 * The template for displaying all single posts and attachments
 * 記事ページ 
 */
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); //ナビゲーションファイル読み込み ?>
<div class="container" id="content"><!-- container ./ -->
<div class="row">
<div class="col-sm-9"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>


<?php 
if (have_posts()) : // Loop
	while (have_posts()) : the_post(); // Loop start ?>
<hr class="mt0">
<h1><?php echo get_the_title(); ?></h1>
<p><span class="date"><?php echo get_the_date(); ?></span>
<span class="tags"><span class="glyphicon glyphicon-tag"></span> <?php the_category(' / ') ?><?php the_tags(' / ') ?></span></p>

<div class="row mt60">
<div class="col-sm-10 col-sm-push-2">
<?php include ('inc/inc-social-content.php'); //ソーシャルボタンファイル読み込み ?>

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

<?php include ('inc/inc-social-content.php'); //ソーシャルボタンファイル読み込み ?>
</div><!-- col-sm-10 col-sm-push-2 ./ -->
</div><!-- row mt60 ./ -->


<hr class="boldline">
<?php if( get_next_post() ): //記事読み込み ?>
<div class="recommend">
<strong>次の記事<span class="glyphicon glyphicon-chevron-right"></span></strong>
<div class="index">
<p class="title"><?php next_post_link('%link', '%title'); ?></p>						
</div><!--/.post-->
</div>

<?php endif; if( get_previous_post() ): //記事読み込み ?>
<div class="recommend">
<strong><span class="glyphicon glyphicon-chevron-left"></span>前の記事</strong>
<div class="index">
<p class="title"><?php previous_post_link('%link', '%title'); ?></p>						
</div><!--/.post-->
</div>
<?php endif; ?>
					<?php 
					endwhile; // /.Loop		
					else : // 記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
					<?php
					endif;
					?>


</div><!-- /.col-sm-9 -->
<?php get_sidebar(); ?>
</div><!-- /.row -->
</div><!-- /.container -->
<?php get_footer(); ?>