<?php
/* 
 * Plugin Name: マイプラグイン
 * Version: 1.0.0
 * Description: 自分専用のプラグイン
 * Author: admin
*/

add_shortcode('date', function () {
  return date('Y年 n月 j日');
});

add_shortcode('sum', function ($atts) {
  $atts = shortcode_atts([
    'x' => 0,
    'y' => 0
  ], $atts, 'sum');
  return $atts['x'] + $atts['y'];
});

add_action('init', function () {
  register_post_type('item', [ // urlなどに使われるidのような値
    'label' => '商品', // 管理画面に表示されるラベル
    'public' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-store',
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],
    'has_archive' => true,
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);

  register_taxonomy('genre', 'item', [
    'label' => '商品ジャンル',
    'hierarchical' => true, // true:カテゴリ、false:タグ
    'show_in_rest' => true, // 対象の投稿タイプに設定されていたら設定する
  ]);
});
