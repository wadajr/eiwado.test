<h2 class="widget-title">Latest</h2>
<div class="mb40">
<?php query_posts('posts_per_page=5&ignore_sticky_posts=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="new-entries">
  <div class="thumb">
  <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb160100' ); ?></a>
  <?php else: // サムネイルを持っていないときの処理 ?>
    <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpg" alt="NO IMAGE" /></a>
  <?php endif; ?>
  </div><!-- /.new-entry-thumb -->
  <div class="content">
    <a href="<?php the_permalink(); ?>"><?php the_title();?></a><br>
    <!--<span class="date"><?php echo get_the_date(); ?></span>-->
  </div><!-- /.new-entry-content -->
</div><!-- /.new-entry -->
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php /* <p><a href="/news/" class="list-group-item"><span class="glyphicon glyphicon-minus"></span> すべての記事</a></p>
<br style="clear:both;"> */?>
</div>
