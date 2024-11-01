<?php

defined('ABSPATH') or die("Play nice!");

// Scripts files to be included in the header

function tito_load_files() {
	global $tito_options;

	$tito_script_url = "https://js.tito.io/v2";
	if(isset($tito_options['plugins']) && trim($tito_options['plugins']) !== "") {
		$tito_script_url .= '/with/' . join(",", array_map("trim", explode(",", $tito_options['plugins'])));
	}

	wp_enqueue_script( 'tito_script', $tito_script_url, array('jquery'), null);
}

add_action('wp_enqueue_scripts', 'tito_load_files');

?>
