<?php

/*
 * Plugin Name:       Hindi Dates
 * Plugin URI:        https://wordpress.org/plugins/hindi-dates/
 * Description:       Convert English months and weekdays into Hindi language.
 * Version:           1.0
 * Tested Up to:      6.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ranzuni
 * Author URI:        https://profiles.wordpress.org/ranzuni/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hindi-dates
 * Domain Path:       /languages
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

if( !defined( 'ABSPATH' ) ) {
    exit();
}

define( 'HINDI_DATES_PLUGIN_VERSION', '1.0' );
define( 'HINDI_DATES_PLUGIN_FILE', __FILE__ );
define( 'HINDI_DATES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'HINDI_DATES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'HINDI_DATES_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

add_action( 'init', 'hindi_dates_load_textdomain' );
function hindi_dates_load_textdomain() {
  load_plugin_textdomain( 'hindi-dates', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function hindi_dates_convert_days( $str ) {
  $day_en = array( 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'SATURDAY', 'SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday' );
  $day_hi = array( 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार' );
  return str_replace( $day_en, $day_hi, $str );
}

function hindi_dates_convert_days_shorten( $str ) {
  $days_en = array( 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'SAT', 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri' );
  $days_hi = array( 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार', 'शनिवार', 'रविवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'गुरुवार', 'शुक्रवार' );
  return str_replace( $days_en, $days_hi, $str );
}

function hindi_dates_convert_months( $str ) {
  $month_en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december' );
  $month_hi = array( 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर', 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर', 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर' );
  return str_replace( $month_en, $month_hi, $str );
}

function hindi_dates_convert_months_shorten( $str ) {
  $months_en = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec' );
  $months_hi = array( 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर', 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर', 'जनवरी', 'फ़रवरी', 'मार्च', 'अप्रैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितंबर', 'अक्टूबर', 'नवंबर', 'दिसंबर' );
  return str_replace( $months_en, $months_hi, $str );
}

function hindi_dates( $output ) {
  $output = hindi_dates_convert_days( $output );
  $output = hindi_dates_convert_days_shorten( $output );
  $output = hindi_dates_convert_months( $output );
  $output = hindi_dates_convert_months_shorten( $output );
  return $output;
}

add_action( 'init', 'apply_hindi_dates' );
function apply_hindi_dates() {
  add_filter( 'the_date', 'hindi_dates' );
  add_filter( 'get_the_date', 'hindi_dates' );
  add_filter( 'date_i18n', 'hindi_dates' );
  add_filter( 'get_comment_date', 'hindi_dates' );
  add_filter( 'widget_text', 'hindi_dates' );
  add_filter( 'get_calendar', 'hindi_dates' );
  add_filter( 'get_the_archive_title', 'hindi_dates' );
  add_filter( 'get_feed_build_date', 'hindi_dates' );
  add_filter( 'get_the_modified_date', 'hindi_dates' );
  add_filter( 'the_modified_date', 'hindi_dates' );
  add_filter( 'the_weekday_date', 'hindi_dates' );
  add_filter( 'wp_date', 'hindi_dates' );
  add_filter( 'the_weekday', 'hindi_dates' );
}

register_activation_hook( __FILE__, 'hindi_dates_notice_hook' );
function hindi_dates_notice_hook() {
    set_transient( 'hindi-dates-notification', true, 5 );
}

add_action( 'admin_notices', 'hindi_dates_activation_notification' ); 
function hindi_dates_activation_notification(){
    if( get_transient( 'hindi-dates-notification' ) ) {
        ?>
        <div class="updated notice is-dismissible">
            <p><?php esc_attr_e( 'Thank you for installing Hindi Dates!', 'hindi-dates' ); ?></p>
        </div>
        <?php
        delete_transient( 'hindi-dates-notification' );
    }
}