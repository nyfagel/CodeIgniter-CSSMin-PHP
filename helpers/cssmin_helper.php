<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('minifycss')) {
	function minifycss($css) {
		require_once dirname(__FILE__).'/../libraries/cssmin.php';
		$compressor = new CSSmin();
		return $compressor->run($css);
	}
}

?>

