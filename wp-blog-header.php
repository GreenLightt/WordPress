<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

    // wp_did_header变量，相当于一个flag，确保每次刷新时，wp-blog-header.php文件只执行一次。
    $wp_did_header = true;

    // 初始化阶段
    require_once( dirname(__FILE__) . '/wp-load.php' );

    // 内容处理阶段
    wp();

    // 主题应用阶段
    require_once( ABSPATH . WPINC . '/template-loader.php' );

}
