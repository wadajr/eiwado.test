<?php
/*
Template Name: Page-access
 * 固定ページ
*/
?>
<?php get_header(); ?>
<?php include ('inc/navbar.php'); ?>
<div class="container" id="content"><!-- container ./ -->



<div class="row">
<div class="col-sm-8 col-sm-push-2"><!-- content area / --> <?php // col-sm-push-XX,col-sm-ppull-XX, で配置調整 // ?>
<p class="text-center" style="font-weight:900;font-size:60px;"><span class="glyphicon glyphicon-map-marker"></p>
<h1 style="display:none;">アクセス</h1>
<h2 class="lead text-center">湘南モノレール駅からすぐです</h2>

<div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104156.02347971992!2d139.47076781093116!3d35.333907202118624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018459b80ac5619%3A0x5700747a399f2502!2z56We5aWI5bed55yM6Y6M5YCJ5biC!5e0!3m2!1sja!2sjp!4v1463760290968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<table class="table mt40">
    <tbody>
      <tr>
        <th>最寄り駅</th>
        <td>湘南モノレール「湘南深沢駅」徒歩3分<br>京浜急行バス「深沢駅」目の前<br>江ノ電バス「深沢駅」徒歩3分</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>神奈川県鎌倉市</td>
      </tr>
      <tr>
        <th>電話</th>
        <td>XXXX-XXXX-XXXX</td>
      </tr>
      <tr>
        <th>営業時間</th>
        <td>10：00〜20：00</td>
      </tr>
      <tr>
        <th>定休日</th>
        <td>水曜日　臨時休業・年末年始・夏季休暇等あり</td>
      </tr>
      <tr>
        <th>メール</th>
        <td>XXXX@XXXX.XXXX</td>
      </tr>
	 </tbody>
</table>

</div>
</div>


</div><!-- /.col-sm-9 -->
</div><!-- /.row -->
</div> <!-- ./container -->
<?php get_footer(); ?>


