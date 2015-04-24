<?php
/**
 * @package Treedbox
 */

/**
Plugin Name: Treedbox Admin Menu
Plugin URI: http://treedbox.com.br/
Description: Repositioning your Admin Menu on Top
Version: 1.0.3
Author: Treedbox
Author URI: http://treedbox.com.br/
License: GPLv2 or later
Text Domain: treedbox
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
defined('ABSPATH') or die("Curiosity killed the cat :F");

function treedbox_adminmenu(){
echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('treedbox_admin_menu.min.css', __file__).'">';
}
add_action('admin_head', 'treedbox_adminmenu');
?>