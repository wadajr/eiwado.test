<?php
/**
 * The template for displaying the sidebar
 * サイドバーテンプレート
 * ページ「is_page('name')」やカテゴリ「is_category('name')」の'name'を入力しておくことでカレント表示が機能します。
*/
?>

<div class="col-sm-3 sidebar"><!-- sidebar/ -->
<?php if(!is_single()){ ?>
<div class="mt30"> </div>
<?php } ?>
<?php include ('inc/inc-sidebar_categories.php'); //カテゴリ ?>
<?php include ('inc/inc-sidebar_new-entries.php'); //最新記事 ?>
<div class="text-center">
<?php include ('inc/inc-sidebar_social.php'); //ソーシャル ?>
</div>
<?/*php dynamic_sidebar(); */?>
<?/*php include ('inc-sidebar_banner.php'); //バナー */?>
</div><!-- /.sidebar -->



