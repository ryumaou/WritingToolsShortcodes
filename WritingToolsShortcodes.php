<?php
/*
Plugin Name: Writing Tools Shortcodes
Plugin URI: https://jkhoffman.com/about/wordpress-projects/
Version: 1.0
License: GPL2
Description: Random generator tools for writers of all kinds. 
Author: J. K. Hoffman
Author URI: https://jkhoffman.com
*/


// Security recommendation from wp.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// the functions behind the short codes etc
include( plugin_dir_path( __FILE__ ) . 'library/RomanNameFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/SpaceOperaEDCFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/FunnyNameFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/EDCFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/FantasyEDCFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/SpaceOperaPlotFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/SteamPunkInventionsFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/HistoryTimelineFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/StoryStarterFunction.php' );
include( plugin_dir_path( __FILE__ ) . 'library/StarsystemFunction.php' );

add_shortcode('RandomRomanNames', 'My_RomanNamesFunction');
add_shortcode('SpaceOperaEDC', 'My_SpaceOperaEDCFunction');
add_shortcode('RandomFunnyNames', 'My_FunnyNamesFunction');
add_shortcode('RandomEDC', 'My_EDCFunction');
add_shortcode('FantasyEDC', 'My_FantasyEDCFunction');
add_shortcode('SpaceOperaPlot', 'My_SpaceOperaPlotFunction');
add_shortcode('SteampunkInventions', 'My_SteampunkInventionFunction');
add_shortcode('HistoricalTimeline', 'My_HistoricalTimelineFunction');
add_shortcode('StoryStarter', 'My_StoryStarterFunction');
add_shortcode('StarSystem', 'My_StarSystemFunction');

?>