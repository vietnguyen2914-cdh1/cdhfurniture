<?php
/**
 * Plugin Name: CSS Theme Override
 * Plugin URI: http://www.jcummings.net
 * Description: Adds a settings panel to the WP Admin allowing you to override theme styles on a page or post basis
 * Version: 1.1.1
 * Author: John Cummings
 * Author URI: http://www.jcummings.net
 * License: GPL2
 *
 /*  Copyright 2014 John Cummings  (email : john@jcummings.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
include 'css-theme-override-options.php';

function css_theme_override(){
	$id = get_the_ID();
	$options = get_option('css_override');
	$options['page_id'] = preg_replace('/\.$/', '', $options['page_id']); //Remove dot at end if present
	$array = explode(',',$options['page_id']);
	
	foreach($array as $value){
		if($id == trim($value) || $value == 'ALL'){
			$custom_css = substr_replace($options['css_code'],'!important',-1,0);
		?>
			<style>
			<?php echo $custom_css;?>
			</style>
		    <?php	
		}	
	}
}

add_filter( 'wp_head' , 'css_theme_override' );
?>