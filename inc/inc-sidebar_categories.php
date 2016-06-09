<div class="list-group">
<?php
//カテゴリーリスト＆記事一覧
$args=array(
//いらないパラメータは省略可
  'type'	=> 'post',
  'child_of'	=> '',
  'parent'  	=> 0,
  'orderby' 	=> 'name',
  'order'   	=> 'ASC',
  'hide_empty' 	=> 1,
  'hierarchical'=> 1,
  'exclude'  	=> '0',
  'pad_counts' 	=> false
  );
$categories=get_categories($args);
	
	//取得したカテゴリへの各種処理
	foreach($categories as $val){
		//カテゴリのリンクURLを取得
		$cat_link = get_category_link($val->cat_ID);
		
		//子カテゴリのIDを配列で取得
		$child_cat_num = count(get_term_children($val->cat_ID,'category'));
		
		//子カテゴリが存在する場合
		if($child_cat_num > 0){
			//親カテゴリのリスト出力
			echo '<a class="list-group-item active" href="' . $cat_link . '">' . $val -> name . '</a>';
			//子カテゴリの一覧取得条件
			$category_children_args = array('parent'=>$val->cat_ID);
			//子カテゴリの一覧取得
			$category_children = get_categories($category_children_args);
			//子カテゴリの数だけリスト出力
			foreach($category_children as $child_val){
				$cat_link = get_category_link($child_val -> cat_ID);
				echo '<a class="list-group-item" href="' . $cat_link . '"><span class="glyphicon glyphicon-minus"></span>' . $child_val -> name . '</a>';
			}
			//echo '</ul>';
		}

		//子カテゴリが存在しない場合
		else{
			echo '<a class="list-group-item" href="' . $cat_link . '"><span class="glyphicon glyphicon-minus"></span>' . $val -> name . '</a>';
		}
		
	}
?>
</div>