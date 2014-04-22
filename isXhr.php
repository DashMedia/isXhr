<?php
/**
 * isXhr
 *
 * SNIPPET USAGE:
 *
 * [[!isXhr? &yes=`<h2>[[*pagetitle]]</h2>` &no=`<h1>[[*pagetitle]]</h1>` ]]
 * 
 * 
 * AUTHOR: Jason Carney, DashMedia.com.au
 */


$settingsArray = array('yes' => '', 'no' => '');
foreach ($settingsArray as $key => $value) {
	if(isset(${$value})){
		$settings[$value] = ${$value};
	} else {
		$settings[$value] = '';
	}
}

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
   return $settings['yes'];
}
else {
   return $settings['no'];
}