<?php


/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/


function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
      'html5',
      array( //HTML5でマークアップ
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );
}


function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


add_action('after_setup_theme', 'my_setup');


function my_menu_init()
{
register_nav_menus(

array(
'global' => 'ヘッダーメニュー',
'footer-menu' => 'フッターメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');




/**
 * パンくずタイトルの書き換え
 *
 * https://mtekk.us/code/breadcrumb-navxt/breadcrumb-navxt-doc/2/#bcn_breadcrumb_title
 * @param object $title タイトル.
 */
function my_bcn_breadcrumb_title( $title, $this_type, $this_id ) {
    if ( is_post_type_archive( 'notice' ) ) {
      $title = 'お知らせ一覧';
    }
    return $title;
  };
  add_filter( 'bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3 );

/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

    if ( is_category() ) { // カテゴリーアーカイブの場合
    $title = single_cat_title( '', false );
    } elseif ( is_tag() ) { // タグアーカイブの場合
    $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) { // タームアーカイブの場合
    $title = single_term_title( '', false );
    } elseif ( is_author() ) { // 作者アーカイブの場合
    $title = get_the_author();
    } elseif ( is_date() ) { // 日付アーカイブの場合
    $title = '';
    if ( get_query_var( 'year' ) ) {
    $title .= get_query_var( 'year' ) . '年';
    }
    if ( get_query_var( 'monthnum' ) ) {
    $title .= get_query_var( 'monthnum' ) . '月';
    }
    if ( get_query_var( 'day' ) ) {
    $title .= get_query_var( 'day' ) . '日';
    }
    }
    return $title;
    };
    add_filter( 'get_the_archive_title', 'my_archive_title' );


function my_the_post_category( $anchor = true, $id = 0 ){
global $post;

if ( 0 === $id ) {
  $id = $post->ID;
}
$this_categories = get_the_category( $id );
if ( $this_categories[0] ) {
if ( $anchor ) { //引数がtrueならリンク付きで出力
echo '<a href="' . esc_url( get_category_link( $this_categories[0]->term_id ) ) . '">' . esc_html( $this_categories[0]->cat_name ) . '</a>';
} else { //引数がfalseならカテゴリー名のみ出力
echo esc_html( $this_categories[0]->cat_name );
}
}
}


function my_get_post_tags($id = 0 ) {
global $post;
if ( 0 === $id ) {
$id = $post->ID;
}

$tags = get_the_tags( $id );

if ( $tags ) {
foreach( $tags as $tag ){
  echo '<div class="entry-tag-item"><a href="'. esc_url( get_tag_link($tag->term_id) ) .'">'. esc_html( $tag->name ) .'</a></div><!-- /entry-tag-item -->';
}
}
}