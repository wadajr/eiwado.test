<?php
/**
 * The template for displaying the footer
 * フッタテンプレート
*/
?>

<footer class="footer">
<?php if(!is_single()){ ?>
<div class="mt-30"><?php include ('inc/inc-social-all.php'); ?></div>
<?php } ?>
<?php if(is_single()){ ?>
<div class="mt40"></div>
<?php } ?>
<div class="container">
<div class="row">
<div class="col-sm-8">
<p class="footer-text">Copyright &copy; <?php bloginfo('name'); ?> All rights reserved. Powered by <a href="http://starter.future-archives.net" target="_blank">Future Archives</a></p>
</div>
<div class="col-sm-4">
    <?php /*フッタメニューは必要に応じて表示
    <span class="footer-text"><small><a href="/access">お問い合わせ</a>　<a href="/policy">サイトポリシー</a></small></span>　*/ ?>
    <a href="#anchor0"><span class="glyphicon glyphicon-circle-arrow-up page-top"></span></a></div>
</div>
</div>
</footer>

<!-- Bootstrap core JavaScript
 Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/assets/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript"> 
$(function () { //link scroll #anchor
  var headerHight = 150;
  $('a[href^=#anchor]').click(function(){
    var href= $(this).attr("href");
    var target = $(href == "#anchor" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHight;
    $("html, body").animate({scrollTop:position}, 400, "swing");
    return false;
  });
});
$(function () { //popover
  $('[data-toggle="popover"]').popover()
})
</script>

</body>
</html>