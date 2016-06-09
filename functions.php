<?php
//wp_headの不要要素削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');
function disable_emoji() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );    
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );

//アイキャッチ画像設定
add_theme_support('post-thumbnails');

//アイキャッチ画像作成
add_image_size('thumb600375',600,375,true);
add_image_size('thumb160100',160,100,true);
add_image_size('thumb600800',600,800,true);

//MOREリンクの修正
function custom_content_more_link( $output ) {
$output = preg_replace('/#more-[\d]+/i', '', $output );
return $output;
}
add_filter( 'the_content_more_link', 'custom_content_more_link' );

//RSS用サムネイル出力
function rss_post_thumbnail($content) {
    global $post;
    if(has_post_thumbnail($post->ID)) {
        $content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

// メインコンテンツ幅
if ( ! isset( $content_width ) ) $content_width = 748;

// RSS2 の feed リンクを出力
add_theme_support( 'automatic-feed-links' );

// カスタムメニューを有効化
add_theme_support( 'menus' );

// カスタムメニューの「場所」を設定
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );

// サイドバーウィジットを有効化
register_sidebar( array(
	'name' => 'サイドバーウィジット-1',
	'id' => 'sidebar-1',
	'description' => 'サイドバーのウィジットエリアです。',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
) );

// [...]表記非表示
function new_excerpt_more($more) {
	return ''; 
}
add_filter('excerpt_more', 'new_excerpt_more');

//Pagenation
function wp_pagination() {
	global $wp_query;
	$big = 99999999;
	$page_format = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 0, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_next'    => True,
		'prev_text'    => ('<span class="glyphicon glyphicon-chevron-left"></span>前へ'),
		'next_text'    => ('次へ<span class="glyphicon glyphicon-chevron-right"></span>'),
		'type'  => 'array',
		'end_size'  => '2'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		//echo '<li>'. $paged . ' of ' . $wp_query->max_num_pages .'</li>';
		foreach ( $page_format as $page ) {
    		echo "<li>$page</li>";
		}
			echo '</ul>';
	}
	wp_reset_query();
}

//サムネイルのsrcset要素削除
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
//サムネイルのサイズ指定削除
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// カスタム投稿タイプを作成する
add_action('init', 'add_gallery_post_type');
function add_gallery_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'ギャラリー',
                    'singular_name' => 'ギャラリー',
                    'add_new' => '新規追加',
                    'add_new_item' => 'ギャラリーを新規追加',
                    'edit_item' => 'ギャラリーを編集する',
                    'new_item' => '新規ギャラリー',
                    'all_items' => 'ギャラリー一覧',
                    'view_item' => 'ギャラリーの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'ギャラリーが見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内にギャラリーが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
                    'thumbnail',
            ),
            'taxonomies' => array('gallery_category','gallery_tag')
    );
    register_post_type('gallery', $params);
}
// カスタム投稿タイプ（gallery）用のカテゴリ＆タグを作成する
add_action('init', 'create_gallery_taxonomies');
function create_gallery_taxonomies() {
    // カテゴリを作成
    $labels = array(
            'name'                => 'ギャラリーカテゴリ',        //複数系のときのカテゴリ名
            'singular_name'       => 'ギャラリーカテゴリ',        //単数系のときのカテゴリ名
            'search_items'        => 'ギャラリーカテゴリを検索',
            'all_items'           => '全てのギャラリーカテゴリ',
            'parent_item'         => '親カテゴリ',
            'parent_item_colon'   => '親カテゴリ:',
            'edit_item'           => 'ギャラリーカテゴリを編集',
			'menu_position' =>5, //管理画面のメニュー順位
            'update_item'         => 'ギャラリーカテゴリを更新',
            'add_new_item'        => '新規ギャラリーカテゴリを追加',
            'new_item_name'       => '新規ギャラリーカテゴリ',
            'menu_name'           => 'ギャラリーカテゴリ'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'gallery_cat' )
    );
    register_taxonomy( 'gallery_category', 'gallery', $args );

    // タグを作成
    $labels = array(
            'name'                => 'ギャラリータグ',        //複数系のときのタグ名
            'singular_name'       => 'ギャラリータグ',        //単数系のときのタグ名
            'search_items'        => 'ギャラリータグを検索',
            'all_items'           => '全てのWebタグ',
            'parent_item'         => null,
            'parent_item_colon'   => null,
            'edit_item'           => 'ギャラリータグを編集',
            'update_item'         => 'ギャラリータグを更新',
            'add_new_item'        => '新規ギャラリータグを追加',
            'new_item_name'       => '新規ギャラリータグ',
            'separate_items_with_commas'   => 'ギャラリータグをコンマで区切る',
            'add_or_remove_items'          => 'ギャラリータグを追加or削除する',
            'choose_from_most_used'        => 'よく使われているギャラリータグから選択',
            'not_found'                    => 'アイテムは見つかりませんでした',
            'menu_name'                    => 'ギャラリータグ'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'            => false,
            'labels'                  => $labels,
            'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
            'rewrite'                 => array( 'slug' => 'gallery_tag' )
    );

    register_taxonomy( 'gallery_tag', 'gallery', $args );
}

// リード文章最大数調整
function change_excerpt_mblength($length) {
return 2000;
}
add_filter('excerpt_mblength', 'change_excerpt_mblength');