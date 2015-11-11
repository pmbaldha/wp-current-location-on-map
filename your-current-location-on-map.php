<?php
/*
Plugin Name: Your Current Location On Map
Plugin URI:  https://github.com/pmbaldha/wp-current-location-on-map/
Description: Displays your current location in map with accuracy. Your Current Location On Map plugin is very easy to use,mobile friendly,responsive.  
Version:     1.0
Author:      Prashant Baldha
Author URI:  https://github.com/pmbaldha/
License:     GPL2
Your Current Location On Map is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Your Current Location On Map is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Your Current Location On Map. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
add_shortcode( 'your-current-location-on-map','clom_your_current_location_on_map');
function clom_your_current_location_on_map()
{ 	
	wp_enqueue_style(
		'clom_leaflet_css',
		plugins_url( '/leaflet/leaflet.css', __FILE__ )
	);	
	wp_enqueue_style(
		'clom_map_css',
		plugins_url( '/css/map.css', __FILE__ )
	);	
	wp_enqueue_script(
		'clom_leaflet_js',
		plugins_url( '/leaflet/leaflet-src.js', __FILE__ )
	);
	wp_enqueue_script(
		'clom_map_js',
		plugins_url( '/js/map-bind.js', __FILE__ ),
		array('clom_leaflet_js')
	);
	echo '<div id="clom_map">map div</div>';
}
