<?php
/**
 * The template for displaying the sidebar
 * サイドバーテンプレート
 * ページ「is_page('name')」やカテゴリ「is_category('name')」の'name'を入力しておくことでカレント表示が機能します。
*/
?>

<div class="col-sm-3 sidebar"><!-- sidebar/ -->
<div class="list-group">
 <a href="#" class="list-group-item active">大カテゴリ category</a>
 <a href="/category/sample/" class="list-group-item <?php if ( is_category('sample')) { echo ' current'; } ?>"><span class="glyphicon glyphicon-minus"></span> サンプルカテゴリ</a>
 <a href="#" class="list-group-item <?php if ( is_category('name')) { echo ' current'; } ?>"><span class="glyphicon glyphicon-minus"></span> カテゴリ category</a>
 <a href="#" class="list-group-item <?php if ( is_category('name')) { echo ' current'; } ?>"><span class="glyphicon glyphicon-minus"></span> カテゴリ category</a>
 <a href="#" class="list-group-item <?php if ( is_category('name')) { echo ' current'; } ?>"><span class="glyphicon glyphicon-minus"></span> カテゴリ category</a>
 <a href="#" class="list-group-item <?php if ( is_category('name')) { echo ' current'; } ?>"><span class="glyphicon glyphicon-minus"></span> カテゴリ category</a>
 <a href="#" class="list-group-item active <?php if ( is_page('name')) { echo ' current'; } ?>">ページ page</a>
</div>
<?/*php dynamic_sidebar(); */?>
<?/*php include ('inc/inc-sidebar_new-entries.php'); //最新記事 */?>
<?/*php include ('inc/inc-sidebar_social.php'); //ソーシャル */?>
<?/*php include ('inc/inc-sidebar_banner.php'); //バナー */?>
</div><!-- /.sidebar -->



