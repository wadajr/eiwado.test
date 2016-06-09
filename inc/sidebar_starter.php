<?php
/**
 * The template for displaying the sidebar
 * サイドバーテンプレート
 * カテゴリ「is_category('name')」の'name'を入力しておくことでカレント表示が機能します
*/
?>
<div class="col-sm-3 sidebar navbar-fixed"><!-- sidebar ./ -->
<div class="list-group">
    <a href="/starter/" class="list-group-item <?php if ( is_page('starter')) { echo 'current'; } ?>">無料ではじめるDIYキット</a>
    <a href="/support/" class="list-group-item <?php if ( is_page('support')) { echo 'current'; } ?>">サポート・価格・問い合わせ</a>
    </div>
</div>
</div><!-- /.sidebar -->

<style>.navbar-fixed { position: fixed; right: 15px;}</style>

