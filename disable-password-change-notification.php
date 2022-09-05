<?php
/**
 * Plugin Name:     Disable Password Change Notification
 * Plugin URI:      https://github.com/magicoli/disable-password-change-notification
 * Description:     Disable WordPress Password Change email notification
 * Author:          Magiiic
 * Author URI:      https://magiiic.com
 * Text Domain:     disable-password-change-notification
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Disable_Password_Change_Notification
 */

add_filter( 'send_password_change_email', '__return_false' );
