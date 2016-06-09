<?php
/**
 * The template for displaying 404 pages (not found)
 * 検索機能付きエラーページ
 */
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container">

<h1 class="entry-title">Not Found</h1>
<p>ページが見つかりませんでした。</p>

<form method="get" id="searchform" action="/">
<span class="col-xs-6 ml-20 pb300">
<input class="form-control" id="ex3" type="text" placeholder="" name="s" id="s">
</span>
<button type="submit" class="btn btn-primary" id="searchsubmit"><span class="glyphicon glyphicon-search"></span></button>
</form>

</div><!-- ./container -->
<?php get_footer(); ?>