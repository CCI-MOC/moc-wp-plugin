<?php
/*
 *
 * @wordpress-plugin
 * Plugin Name: MOC WordPress Plugin
 * Description: Misc. setting for massopen.cloud WP site
 * Author: MOC Ops Staff
 * Version: 0.1.0
 * Author URI: http://massopen.cloud
 */

add_filter( 'wp_feed_cache_transient_lifetime',
  create_function('$a', 'return 600;') );

?>
