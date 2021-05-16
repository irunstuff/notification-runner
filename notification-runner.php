<?php

/*
 * Plugin Name:       Notification Runner
 * Plugin URI:        https://irunstuff.com/plugins/notification-runner
 * Description:       Disable successful update notification emails for core updates, plugins, and themes.
 * Version:           1.0.0
 * Author:            IRunStuff.com
 * Author URI:        https://irunstuff.com
 * Text Domain:       notification-runner
 * Domain Path:       /locale
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * License:           GNU General Public License v3 (GPLv3)
{Plugin Name} is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.
{Plugin Name} is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with {Plugin Name}. If not, see {License URI}.
 */


/* prevent direct access to this file; security */
defined('ABSPATH') or die();


add_filter( 'auto_core_update_send_email', 'irunstuff_stop_auto_update_emails', 10, 4 );


function irunstuff_stop_update_emails( $send, $type, $core_update, $result ) {
  if ( ! empty( $type ) && $type == 'success' ) {
    return false;
  }

  return true;
}


add_filter( 'auto_plugin_update_send_email', '__return_false' );


add_filter( 'auto_theme_update_send_email', '__return_false' );

?>
