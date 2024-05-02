<?php

/**
 * Plugin Name: KD WordPress Plugin Dev
 * Description: 大門光星のプラグイン開発テンプレートです。
 * Version: 1.0
 */

namespace KoseiDaimon;

defined('ABSPATH') || exit;

define('KOSEIDAIMON_VERSION', '1.0');
define('KOSEIDAIMON_URL', plugin_dir_url(__FILE__));
define('KOSEIDAIMON_PATH', plugin_dir_path(__FILE__));

// ================================================
//  アセットURL関数
//  この関数は、キャッシュによって古い情報が表示されないように
//  バージョン番号を追加してアセットのURLを生成します。
// ================================================
function get_asset_url($path) {
  $file_path = KOSEIDAIMON_PATH . 'assets/' . $path;
  if (file_exists($file_path)) {
    return KOSEIDAIMON_URL . 'assets/' . $path . '?v=' . filemtime($file_path);
  } else {
    if (defined('WP_DEBUG') && WP_DEBUG) {
      error_log("Failed to load asset at path: {$file_path}");
    }
    error_log("Failed to load asset at path: {$file_path}");
    return null;
  }
}

// ================================================
// CSSとJSの読み込み
// ================================================
function enqueue_koseidaimon_style_js() {
  $css_url = get_asset_url('css/main.css');
  $js_url  = get_asset_url('js/main.js');
  if ($css_url) {
    wp_enqueue_style('koseidaimon-style', $css_url);
  }
  if ($js_url) {
    wp_enqueue_script('koseidaimon-script', $js_url, array('jquery'), null, true);

    // PHPからJavaScriptにデータを渡す
    wp_localize_script('koseidaimon-script', 'KoseiDaimon', array(
      'asset_url' => KOSEIDAIMON_URL . 'assets/',
    ));
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_koseidaimon_style_js');
